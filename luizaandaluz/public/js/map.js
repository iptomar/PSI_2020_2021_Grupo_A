var json_locations;
var map;

$url = window.location.origin+"/locations";

map = L.map('map',{worldCopyJump: true,maxBounds: [
    //south west
    [-84.0, -180],
    //north east
    [85.0, 180]
]
}).setView([40.0332629,-7.8896263],7);
L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=IXBp03awRrE7NSnTkCkm', {
    minZoom: 3,
    attribution:'<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
}).addTo(map);


updateMarkers();

map.on('click',function(e){
    /*removeMarkers();
    L.marker(e.latlng).addTo(map);
    openModel(e.latlng);*/
    L.Routing.control({
        waypoints: [
          L.latLng(57.74, 11.94),
          L.latLng(57.6792, 11.949)
        ]
      }).addTo(map);
})

function openModel(latlng){
    $('#lat').val(latlng.lat);
    $('#lng').val(latlng.lng);
    $('#interationMap').modal('toggle');
}

$('#interactionForm').submit(function(e){
    e.preventDefault();
    var inputs = $(this).serialize();

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
     });

    $.post('map/store',inputs,function(data,status){
        toast(data);
        resetMarkers();
        $('#interationMap').modal('toggle');
        clearForm();
    })
});
function clearForm(){
    $('#interactionForm').get(0).reset();
}
function updateMarkers(){
    $.ajax({
        url:'map/locations',
        headers:{
            'Content-Type': 'application/json',
            'Accept': 'application/json',
        },
        success: function(data){
            $.each(data, function (index,info){
                var location = [parseFloat(info.lat),parseFloat(info.lng)];
                L.marker(location).addTo(map).bindTooltip("<b>"+info.title+"</b>");
            });
        }
    });
}

function removeMarkers(){
    map.eachLayer(function (layer) {
        if(null == layer['_url'])
            map.removeLayer(layer);
    });
}

function resetMarkers(){
    removeMarkers();
    updateMarkers();
}

$('#interationMap').on('hidden.bs.modal',function(){
    removeMarkers();
    updateMarkers();
    clearForm();
});

function toast(messages){
    $.each(messages, function(type,message){
        $(document).Toasts('create', {
            title: message['title'],
            class: type,
            autohide: true,
            delay: 1500,
            body: message['text']
        });
    });
}

