var tooltip;
var map;

map = L.map('map').setView([39.23286485050368, -8.681974512559403],18);
L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=IXBp03awRrE7NSnTkCkm', {
    minZoom: 15,
    maxZoom: 19,
    attribution:'<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
}).addTo(map);


L.marker([39.23286485050368, -8.681974512559403]).addTo(map).bindTooltip("<b>"+tooltip+"</b>");

