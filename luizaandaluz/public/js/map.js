var json_locations;
var json_translations;
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
<<<<<<< HEAD
    /*removeMarkers();
    L.marker(e.latlng).addTo(map);
    openModel(e.latlng);*/
    L.Routing.control({
        waypoints: [
          L.latLng(57.74, 11.94),
          L.latLng(57.6792, 11.949)
        ]
      }).addTo(map);
=======
    removeMarkers();
    L.marker(e.latlng,{icon: customIcon}).on('click', markerClick).addTo(map);
    $('#list_interation tbody tr').remove();
    openModel(e.latlng);
>>>>>>> ef1ab97ecbb6d84a78012cb3a3168c81c1e49cab
})

function openModel(latlng){
    $('#lat').val(latlng.lat);
    $('#lng').val(latlng.lng);
    $('#interationMap').modal('toggle');
}

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
        code += '<tr data-action="'+interation.uuid+'">';
        code += '<td><a class="btn btn-sm btn-row" onclick="modalDetail(this);" data-modal="interationDetail">'+interation.name+'</a></td>';
        code += '<td><a class="btn btn-sm btn-row" onclick="modalDetail(this);" data-modal="interationDetail">'+interation.title+'</a></td>';
        code += '<td><a class="btn btn-sm btn-row" onclick="modalDetail(this);" data-modal="interationDetail">'+interation.date+'</a></td>';
        code += '</tr>';
    });
    return code;
}


$('#showFiles').on('click',function(){
    $('#file').show();
});
$('#showImages').on('click',function(){
    $('#image').show();
});
$('#showVideos').on('click',function(){
    $('#video').show();
});
$('#showLinks').on('click',function(){
    $('#youtube').show();
});

$('.fieldset-closed').on('click',function(){
    $(this).closest('.row').find('.newUpload').remove();
    $(this).closest('fieldset').hide();
});

$('#addfile').on('click',function(){
    var code = '<div class="row mb-2 form-inline newUpload" data-type="file">';
    code += '<div class="form-group mr-5">';
    code += '<label class="mr-2">'+json_translations.title+'</label>';
    code += '<input type="text" name="filename[]" class="form-control form-control-sm required" required/>';
    code += '</div>';
    code += '<div class="form-group">';
    code += '<input type="file" hidden name="files[]" onchange="fileSelect(event)" accept="application/pdf" />'
    code += '<a href="#" class="form-control mr-3" onclick="upload(this);"><i class="fas fa-upload"></i></a>';
    code += '<a href="#" class="form-control" onclick="closed(this);"><i class="fas fa-trash"></i></a>';
    code += '</div>';
    code += '</div>';
    $('#files').append(code);
});

$('#addimage').on('click',function(){
    var code = '<div class="row mb-2 form-inline newUpload" data-type="image">';
    code += '<div class="form-group mr-5">';
    code += '<label class="mr-2">'+json_translations.title+'</label>';
    code += '<input type="text" name="imagename[]" class="form-control form-control-sm required" required/>';
    code += '</div>';
    code += '<div class="form-group">';
    code += '<input type="file" hidden name="images[]" onchange="fileSelect(event)" accept="image/png, image/gif, image/jpeg" />'
    code += '<a href="#" class="form-control mr-3" onclick="upload(this);"><i class="fas fa-upload"></i></a>';
    code += '<a href="#" class="form-control" onclick="closed(this);"><i class="fas fa-trash"></i></a>';
    code += '</div>';
    code += '</div>';
    $('#images').append(code);
});

$('#addvideo').on('click',function(){
    var code = '<div class="row mb-2 form-inline newUpload" data-type="video">';
    code += '<div class="form-group mr-5">';
    code += '<label class="mr-2">'+json_translations.title+'</label>';
    code += '<input type="text" name="videoname[]" class="form-control form-control-sm required" required/>';
    code += '</div>';
    code += '<div class="form-group">';
    code += '<div hidden>';
    code += '<input type="file" name="videos[]" onchange="fileSelect(event)" accept="video/*" />';
    code += '</div>';
    code += '<a href="#" class="form-control mr-3" onclick="upload(this);"><i class="fas fa-upload"></i></a>';
    code += '<a href="#" class="form-control" onclick="closed(this);"><i class="fas fa-trash"></i></a>';
    code += '</div>';
    code += '</div>';
    $('#videos').append(code);
    getVideos();

});

$('#addlink').on('click',function(){
    var code = '<div class="row mb-2 form-inline newUpload" data-type="link">';
    code += '<div class="form-group">';
    code += '<label class="mr-2">'+json_translations.title+'</label>';
    code += '<input type="text" name="urltitle[]" class="form-control form-control-sm required mr-5" required/>';
    code += '<a href="#" class="form-control " onclick="closed(this);"><i class="fas fa-trash"></i></a>';
    code += '</div>';
    code += '<div class="form-group">';
    code += '<label class="mr-2">'+json_translations.url+'</label>';
    code += '<input type="text" name="url[]" onkeyup="check(this);" class="form-control form-control-sm required" required/>';
    code += '</div>';
    code += '</div>';
    $('#links').append(code);
});

function upload(element){
    var input = $(element).parent().find('input')[0];
    $(input).click();
}

function closed(element){
    $(element).closest('.row').remove();
}

function fileSelect(event){
    var target = $(event.target);
    var row = target.closest('.row')
    if($(row).data('type') != 'video'){
        if(event.target.files[0].size > 8388608){
            alert(json_translations.file-excess);
            event.target.value = "";
        }
    }else{
        if(event.target.files[0].size > 20971520){
            alert(json_translations.video-excess);
            event.target.value = "";
        }
    }
    $(row.find('input[type=text]')[0]).val(
        event.target.files.length == 0 ? "" : event.target.files[0].name
    );
}

function check(){
    console.log();
}

function modalDetail(element){
    var action = $(element).closest('tr').data('action');

    $('#interationMap').modal('hide');
    $.ajax({
        method:'GET',
        url:action,
        headers:{
            'Content-Type': 'application/*',
            'Accept': 'application/*',
        },
        success: function(data){
            $('#interationDetail').modal('toggle').find('.modal-dialog').addClass('modal-xl').find('.modal-content').html(data);
        }
    });
}

$('#interationDetail').on('hidden.bs.modal',function(){
    stopYoutube()
    stopVideo()
    $('#interationMap').modal('toggle');
});

function stopYoutube(){
    var iframe = $("iframe");
    $.each(iframe,function(i,y){
        $tmp = $(y).attr("src");
        $(y).attr("src","");
        $(y).attr("src",$tmp);
    })
}
function stopOtherYoutube(element){
    var iframe = $("iframe");
    $.each(iframe,function(i,y){
        if(y != element){
            $tmp = $(y).attr("src");
            $(y).attr("src","");
            $(y).attr("src",$tmp);
        }
    });
}

function stopVideo(){
    var video = $("video");
    $.each(video,function(i,v){
        v.pause();
        v.removeAttribute('src');
        v.load();
    });
}

function stopOtherVideo(element){
    var video = $("video");
    $.each(video,function(i,v){
        if(v != element){
            v.pause();
            v.removeAttribute('src');
            v.load();
        }
    });
}
