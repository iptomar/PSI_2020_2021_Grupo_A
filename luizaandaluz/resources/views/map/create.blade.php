<form id="interactionForm" method="POST" action="{{ route('map.interaction') }}" enctype='multipart/form-data'>
    @csrf
    <input type="hidden" id="interaction" />
    <input type="hidden" name="lat" id='lat'/>
    <input type="hidden" name="lng" id='lng'/>

    <div class="modal-body">
        <fieldset class="interation">
            <legend class="interation">@lang('frontoffice.interationform.user_info')</legend>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <label for="name">@lang('frontoffice.interationform.name')</label>
                    <input type="text" name="name" class="form-control form-control-sm required" required  id='name'/>
                </div>
                <div class="col-sm-12 col-md-7">
                    <label for="email">@lang('frontoffice.interationform.email')</label>
                    <input type="email" name="email" class="form-control form-control-sm required" required id='email'/>
                </div>
                <div class="col-sm-12 col-md-5">
                    <label for="title">@lang('frontoffice.interationform.birthday')</label>
                    <input type="date" min="{{date('Y-m-d', strtotime(date('Y-m-d') . ' -100 year'))}}" max="{{date('Y-m-d', strtotime(date('Y-m-d') . ' -16 year'))}}" name="date" class="form-control form-control-sm" id='date'/>
                </div>
            </div>
        </fieldset>
        <fieldset class="interation" style="margin-bottom: 0px !important;">
            <legend class="interation">@lang('frontoffice.interationform.interation_info')</legend>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <label for="title">@lang('frontoffice.interationform.title')</label>
                    <input type="text" name="title" class="form-control form-control-sm required" required  id='title'/>
                </div>
                <div class="col-sm-12 col-md-12">
                    <label for="description">@lang('frontoffice.interationform.description')</label>
                    <textarea id="description" class="form-control form-control-sm required" name="description" rows="3"></textarea>
                </div>
            </div>
        </fieldset>
        <div class="custom-breadcrumb" class="col-12">
            <ul>
                <li title="@lang('frontoffice.uploadform.addPDF')"><a href="#" id="showFiles"><i class="text-danger fas fa-file-pdf"></i></a></li>
                <li title="@lang('frontoffice.uploadform.addImage')"><a href="#" id="showImages"><i class="text-warning fas fa-image"></i></a></li>
                <li title="@lang('frontoffice.uploadform.addVideo')"><a href="#" id="showVideos"><i class="fas fa-video"></i></a></li>
                <li title="@lang('frontoffice.uploadform.addLink')"><a href="#" id="showLinks"><i class="text-danger fab fa-youtube"></i></a></li>
            </ul>
        </div>
        @include('map.createFiles')
    </div>
    <div class="modal-footer">
        <button type="submit" id="saveBtn" class="btn btn-primary">@lang('fullstack.send')</a>
    </div>
</form>
