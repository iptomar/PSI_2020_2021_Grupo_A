
<div class="col-12">
    <div class="card card-la card-outline">
        <div class="card-header">
            <a href="#" data-toggle="modal" data-target="#modalInfo" data-action="{{ route('backoffice.user.create') }}" class="btn btn-custom btn-add btn-modal" style="float:right">
                <i class="fa fa-plus"></i>@lang('backoffice.add-mod')
            </a>
        </div>
        <div class="card-body table-responsive p-0">
            <table id="modTable" class="table table-hover text-nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>@lang('backoffice.mod.name')</th>
                        <th>@lang('backoffice.mod.email')</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr data-action="{{ route('backoffice.user.edit',$user->uuid) }}" style="cursor: pointer">
                            <td ><a class="btn btn-edit btn-sm btn-row" href="#">{{ $user->name }}</a></td>
                            <td><a class="btn btn-edit btn-sm btn-row" href="#">{{ $user->email }}</a></td>
                            <td><a href="{{ route('backoffice.user.destroy',$user->uuid) }}"><i class="text-danger fa fa-trash"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

