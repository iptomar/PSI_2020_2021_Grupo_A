<div class="row">
    <div class="img-container">

        <div class="group-title">
            <span>@lang('frontoffice.group')<span>
        </div>
    </div>
</div>
    @foreach ($alunos as $index=>$aluno)
        @if ($index == 0 || $index == 4 || $index == 8)
            <div class="row justify-content-md-center ml-2 mb-6">
        @endif
        <div class="col-sm-12 col-md-3 d-flex align-items-stretch" >
            <div style="margin-top:0% !important; box-shadow: 0 0 1px rgb(0 0 0 / 13%), 0 1px 3px rgb(0 0 0 / 100%)" class="card foundation card-vision {{ $aluno['name'] == 'Engenheiro Paulo A. G. Santos' ? 'professor' : '' }}">
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
        @if ($index == 3 || $index == 7 || $index == 8)
            </div>
        @endif
    @endforeach

