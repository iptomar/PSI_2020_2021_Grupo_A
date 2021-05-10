<div id="interationMap" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title left">@lang('frontoffice.formCreate')</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form id="interactionForm">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" id="interaction" />
                <input type="hidden" name="lat" id='lat'/>
                <input type="hidden" name="lng" id='lng'/>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="title">@lang('frontoffice.formTitle')</label>
                            <input type="text" name="title" class="form-control form-control-sm"  id='title'/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="description">@lang('frontoffice.formDescription')</label>
                            <textarea id="description" class="form-control" name="description" rows="3"></textarea>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">@lang('fullstack.close')</button>
                    <button type="submit" id="saveBtn" class="btn btn-primary">@lang('fullstack.send')</a>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
