@php
    Form::macro('myField', function($type,$name,$label,$required)
    {
        if ($required)
            return '<label for="'.$name.'">'.$label.'</label><input type="'.$type.'" name="'.$name.'" class="form-control form-control-sm required" required  id='.$name.'/>';
        return '<label for="'.$name.'">'.$label.'</label><input type="'.$type.'" name="'.$name.'" class="form-control form-control-sm"  id='.$name.'/>';
    });
@endphp

<div class="modal-header">
    <h4 class="modal-title left">@lang('backoffice.mod.createMod')</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<div class="card card-primary card-outline card-outline-tabs">
    <div class="card-body">
        {{ Form::open(array('route' => 'backoffice.user.store','method' => 'post')) }}
            @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        {!! Form::myField('text','name',lang('backoffice.mod.name'),true) !!}
                    </div>
                    <div class="col-6">
                        <label for="iso_lang">@lang('backoffice.mod.language')</label>
                        {!! Form::select('iso_lang', lang('backoffice.mod.lang'), null, ['class' => 'form-control form-control-sm']) !!}
                    </div>
                    <div class="col-12">
                        {!! Form::myField('email','email',lang('backoffice.mod.email'),true) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" id="saveBtn" class="btn btn-primary">@lang('fullstack.create')</a>
            </div>
        {{ Form::close() }}

    </div>
    <!-- /.card -->
</div>
