var json_locations;
var map;

var url = window.location.origin;
var markers = [];
var customIcon = L.icon({
    iconUrl: '/imagem/marker.png',
    iconSize:     [50, 65], // size of the icon
    iconAnchor:   [10, 64], // point of the icon which will correspond to marker's location
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});

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
    removeMarkers();
    L.marker(e.latlng,{icon: customIcon}).on('click', markerClick).addTo(map);
    $('#list_interation tbody tr').remove();
    openModel(e.latlng);
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
                markers.push(info);
                var location = [parseFloat(info.lat),parseFloat(info.lng)];
                L.marker(location,{icon: customIcon}).on('click', markerClick).addTo(map);
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

function markerClick(e) {
    actionURL = window.location.origin + "/map/interations/";
    var marker = getMarker(e.latlng);
    $.ajax({
        method:'GET',
        url:actionURL+marker.id,
        headers:{
            'Content-Type': 'application/json',
            'Accept': 'application/json',
        },
        success: function(data){
            $('#list_interation tbody tr').remove();
            var table = createTable(data);
            $('#list_interation').find('tbody').append(table);
            openModel(e.latlng);
        }
    });
}

function getMarker(latlng){
    var tmp;
    $.each(markers, function (index,marker){
        if(latlng.lat==marker.lat && latlng.lng == marker.lng){
            tmp =  marker;
        }
    });
    return tmp;
}

function createTable(interations){
    var code = '';
    $.each(interations, function(index,interation){
        code += '<tr>';
        code += '<td>'+interation.name+'</td>';
        code += '<td>'+interation.title+'</td>';
        code += '<td>'+interation.date+'</td>';
        code += '</tr>';
    });
    return code;
}
