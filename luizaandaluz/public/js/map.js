var json_locations;
var map;

$url = window.location.origin+"/locations";

map = L.map('map').setView([40.0332629,-7.8896263],7);

L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=IXBp03awRrE7NSnTkCkm', {
    attribution:'<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
}).addTo(map);



