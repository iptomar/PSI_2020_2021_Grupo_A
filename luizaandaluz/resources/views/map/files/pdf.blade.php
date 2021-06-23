<ul class="list-group">
    @foreach ($file as $pdf)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $pdf['name'] }}
            <a class="badge badge-danger badge-pill" href="{{ asset('files/'.$pdf['filepath']) }}" download><i class="fas fa-download"></i></a>
        </li>
    @endforeach
</ul>
