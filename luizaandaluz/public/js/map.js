var json_locations;
let map;

$url = window.location.origin+"/locations";



function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 40.0332629, lng: -7.8896263 },
    zoom: 8,
  });
  $.ajax({
    url:'/locations',
    headers:{
      'Content-Type': 'application/json',
      'Accept': 'application/json',
    },
    success: function(data){
      $.each()
      
        $.each(data, function (index,info){
          var myLatLng = { lat: parseFloat(info.lat), lng: parseFloat(info.lng) };
          new google.maps.Marker({
            position: myLatLng,
            map,
            title: "Hello World!",
          });
        }); 
    }
  });
}
