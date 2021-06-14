<div class="row">
    <div class="img-container">

        <div class="img-title">
            <span>@lang('frontoffice.group')<span>
        </div>
    </div>
</div>

    @foreach ($alunos as $index=>$aluno)
        @if ($index == 0 || $index == 4)
            <div class="row justify-content-md-center ml-2 mb-6">
        @endif
        <div class="col-sm-12 col-md-3 d-flex align-items-stretch">
            <div class="card foundation card-vision">
                <div class="card-header text-center">
                    <img src="{{$aluno['image']}}" style="max-width: 100px;" />
                </div>
                <div class="card-body">
                    <p class="card-header">{{ $aluno['number'] }} - {{ $aluno['name'] }} @if(($aluno['website']['url']) != '')<a target="_blank" href="{{ $aluno['website']['url'] }}" alt="{{ $aluno['website']['name'] }}"><i class="fas fa-globe"></i></a>@endif</p>
                    <p class="card-text">{{ $aluno['birthday'] }}</p>
                    <p class="card-text">{!! $aluno['desc'] !!}</p>
                </div>
            </div>
        </div>
        @if ($index == 3 || $index == 8)
            </div>
        @endif
    @endforeach

