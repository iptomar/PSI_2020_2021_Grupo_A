
<div id="carouselImage" class="carousel slide" data-interval="false">
    <div class="carousel-inner">
        @foreach ($file as $index=>$link)
            <div class="carousel-item {{ $index==0 ? 'active' : '' }}" style="text-align: center">
                <iframe width="auto" height="auto" src="https://www.youtube.com/embed/{{ $link['filepath'] }}" title="YouTube video player" frameborder="0"
allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        @endforeach
        @if (count($file) > 1)
            <a class="carousel-control-prev" onclick="stopYoutube();stopVideo();" href="#carouselImage" role="button" data-slide="prev" style="background-color: black">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" onclick="stopYoutube();stopVideo();" href="#carouselImage" role="button" data-slide="next" style="background-color: black">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        @endif

    </div>
</div>
