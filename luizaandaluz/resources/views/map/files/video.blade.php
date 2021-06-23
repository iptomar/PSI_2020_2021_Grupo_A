<div id="carouselImage" class="carousel slide" data-interval="false">
    <div class="carousel-inner">
        @foreach ($file as $index=>$video)
            <div class="carousel-item {{ $index==0 ? 'active' : '' }}" style="text-align: center">
                <video width="auto" height="auto" controls>
                    <source src="{{ asset('files/'.$video['filepath']) }}" type="video/{{ substr($video['filepath'],Str::length($video['filepath'])-3) }}">
                </video>
            </div>
        @endforeach
        @if (count($file) > 1)
            <a class="carousel-control-prev" onclick="stopVideo();stopYoutube();" href="#carouselImage" role="button" data-slide="prev" style="background-color: black">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" onclick="stopVideo();stopYoutube();" href="#carouselImage" role="button" data-slide="next" style="background-color: black">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        @endif

    </div>
</div>
