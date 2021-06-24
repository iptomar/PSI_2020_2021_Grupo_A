
<div class="card card-la card-outline">
    <div class="card-header">
      <a href="$modal-form" data-toggle="modal" data-action="" class="btn btn-custom btn-add btn-modal" style="float:right">
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
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a href=""><i class="text-danger fa fa-trash"></i></a></td>
                </tr>
                @endforeach
          </tbody>
        </table>
      </div>
  </div>
