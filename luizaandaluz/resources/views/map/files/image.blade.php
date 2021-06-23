<div id="carouselImage" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach ($file as $index=>$image)
            <li data-target="#carouselImage" data-slide-to="{{ $index }}" @if($index==0) class="active"@endif></li>
        @endforeach
    </ol>
    <div class="carousel-inner">
        @foreach ($file as $index=>$image)
            <div class="carousel-item {{ $index==0 ? 'active' : '' }}">
                <img src="{{ asset('files/'.$image['filepath']) }}" class="d-block w-100" alt="{{ $image['name'] }}">
            </div>
        @endforeach
        <a class="carousel-control-prev" href="#carouselImage" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselImage" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
