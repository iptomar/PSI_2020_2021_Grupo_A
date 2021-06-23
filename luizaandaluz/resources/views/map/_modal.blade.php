<div id="interationMap" class="modal fade" tabindex="-1" role="dialog">
    @csrf
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title left">@lang('fullstack.interations')</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="card card-primary card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-four-create-tab" data-toggle="pill" href="#custom-tabs-four-list" role="tab" aria-controls="custom-tabs-four-list" aria-selected="true"><i class="text-info fa fa-list" aria-hidden="true"></i> @lang('fullstack.list')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-create-tab" data-toggle="pill" href="#custom-tabs-four-create" role="tab" aria-controls="custom-tabs-four-create" aria-selected="false"><i class="text-success fas fa-plus-circle" aria-hidden="true"></i> @lang('fullstack.create')</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-four-tabContent">
                        <div class="tab-pane fade active show" id="custom-tabs-four-list" role="tabpanel" aria-labelledby="custom-tabs-four-list-tab">
                            @include('map.list')
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-four-create" role="tabpanel" aria-labelledby="custom-tabs-four-create-tab">
                            @include('map.create')
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
