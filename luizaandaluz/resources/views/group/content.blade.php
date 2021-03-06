<div class="row">
    <div class="img-container">

        <div class="group-title">
            <span>@lang('frontoffice.group')<span>
        </div>
    </div>
</div>

    @foreach ($alunos as $index=>$aluno)

        @if ($index == 0 || $index == 4)
            <div class="row justify-content-md-center ml-2 mb-6">
        @endif
        <div class="col-sm-12 col-md-3 d-flex align-items-stretch justify-content-md-center">
            <div class="card foundation card-vision" style="margin-top: 0%; box-shadow:0 0 1px rgb(255 0 0 / 100%), 0 1px 3px rgb(0 0 0 / 100%)">
                @if($index == 5)

                    <div class="ribbon-wrapper ribbon-lg ">
                        <div class="ribbon bg-black">
                              @lang('fullstack.team-leader')
                        </div>
                    </div>
                @endif
                @if($index == 8)

                    <div class="ribbon-wrapper ribbon-lg ">
                        <div class="ribbon bg-yellow">
                              @lang('fullstack.teacher')
                        </div>
                    </div>
                @endif
                <div class="card-header text-center">
                    <img src="{{$aluno['image']}}" style="max-width: 100px;" />
                </div>
                <div class="card-body">
                    <p class="card-header">{{ empty($aluno['number']) ? '' : $aluno['number'] . ' -' }}  {{ $aluno['name'] }} @if(($aluno['website']['url']) != '')<a target="_blank" href="{{ $aluno['website']['url'] }}" alt="{{ $aluno['website']['name'] }}"><i class="fas fa-globe"></i></a>@endif</p>
                    <p class="card-text">{{ $aluno['birthday'] }}</p>
                    <p class="card-text">{!! $aluno['desc'] !!}</p>
                </div>
            </div>
        </div>
        @if ($index == 3 || $index == 8)
            </div>
        @endif
    @endforeach

