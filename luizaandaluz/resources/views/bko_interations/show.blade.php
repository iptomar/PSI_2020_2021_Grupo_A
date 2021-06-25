
<div class="col-12">
    <div class="card card-la card-outline">
        <div class="card-header"></div>
        <div class="card-body table-responsive p-0">
            <table id="modTable" class="table table-hover text-nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>@lang('backoffice.mod.name')</th>
                        <th>@lang('backoffice.mod.email')</th>
                        <th>@lang('backoffice.interation.title')</th>
                        <th>@lang('backoffice.interation.date')</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($interations as $index=>$interation)
                        <tr data-action="{{ route('backoffice.interation.interation',$interation->uuid) }}" style="cursor: pointer">
                            <td ><a class="btn btn-edit btn-sm btn-row" href="#">{{ $interation->name }}</a></td>
                            <td><a class="btn btn-edit btn-sm btn-row" href="#">{{ $interation->email }}</a></td>
                            <td><a class="btn btn-edit btn-sm btn-row" href="#">{{ $interation->title }}</a></td>
                            <td><a class="btn btn-edit btn-sm btn-row" href="#">{{ Carbon\Carbon::parse($interation->create_at)->format('d-m-Y') }}</a></td>
                            <td>
                                @if($interation->active)
                                    <i class="text-success fa fa-check mr-3"></i>
                                @endif
                                <i class="text-danger fa fa-trash">
                                    <a onclick="confirm('Are you sure?')" title="{{ lang('backoffice.reject') }}" href="{{ route('backoffice.interation.destroy',$interation->uuid) }}"></a>
                                </i>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

