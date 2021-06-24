<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title left">@lang('frontoffice.interationform.detailsTitle')</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="modal-body">
        <fieldset class="interation">
            <legend class="interation">@lang('frontoffice.interationform.user_info')</legend>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <h6><b>@lang('frontoffice.interationform.name'):</b> {{ $interation['name'] }}</h6>
                </div>
                @if($interation['age'] != 0)
                    <div class="col-sm-12 col-md-3">
                        <h6><b>@lang('frontoffice.age'): </b>{{ $interation['age'] }}</h6>
                    </div>
                @endif
                <div class="col-sm-12 col-md-5">
                    <h6><b>@lang('frontoffice.interationform.email'):</b> {{ $interation['email'] }}</h6>
                </div>
            </div>
        </fieldset>
        <fieldset class="interation">
            <legend class="interation">{{ $interation['title'] }}</legend>
            <div class="row">
                <div class="col-sm-12">
                    <span>{{ $interation['description'] }}</span>
                </div>
            </div>
        </fieldset>

        @foreach($files as $key=>$file)
            @if(count($file)!=0)
                <div class="row">
                    <div class="accordion col-12" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="heading{{ $key }}" style="padding: 0px !important; background-color:lightgrey;">
                                <h4 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" onclick="stopVideo();stopYoutube();" type="button" data-toggle="collapse" data-target="#collapse{{$key}}" aria-expanded="true" aria-controls="collapse{{$key}}">
                                        @lang('frontoffice.details-'.$key)
                                    </button>
                                </h4>
                            </div>
                            <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{$key}}" data-parent="#accordionExample">
                                <div class="card-body">
                                    @switch($key)
                                        @case('f')
                                            @include('map.files.pdf')
                                        @break
                                        @case('i')
                                            @include('map.files.image')
                                        @break
                                        @case('v')
                                            @include('map.files.video')
                                        @break
                                        @default
                                            @include('map.files.link')
                                    @endswitch
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div><!-- /.modal-content -->
<div class="modal-footer">
    <a href="{{ route('backoffice.interation.approve',$interation['uuid'])  }}" class="btn btn-primary mr-5">@lang('backoffice.accept')</a>

    <a href="{{ route('backoffice.interation.destroy',$interation['uuid']) }}" class="btn btn-danger">@lang('backoffice.reject')</a>
</div>
