@extends('layout.backoffice')

@section('css')
<style>
    #map{
        height: 400px;
        width: 100%;
    }
</style>
@endsection

@section('content')

<div id="map"> </div>

@endsection

@section('javascript')
<script async
    src="https://maps.googleapis.com/maps/api/js?key={{env('MAPS_API_KEY')}}&callback=initMap">
</script>

<script>
    let map;

function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 40.0332629, lng: -7.8896263 },
    zoom: 8,
  });
}
</script>
@endsection
