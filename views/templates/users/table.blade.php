<div class="table-responsive mb-3">
    <table class="table table-bordered table-striped" id="users-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>

                    <td>
                        <div class="btn-group">
                            <a href="{{ route('users.show', [$user->id]) }}"
                               class='btn btn-sm btn-primary'>
                                 @if($config->options->localized) @@lang('crud.detail') @else View @endif
                            </a>
                            <a href="{{ route('users.edit', [$user->id]) }}"
                               class='btn btn-sm btn-success'>
                                 @if($config->options->localized) @@lang('crud.edit') @else Edit @endif
                            </a>
                            <a href="#!" onclick="if(confirm( 'Are you sure?' )){event.preventDefault(); document.getElementById('delete_users_{{$user->id}}').submit();}"
                               class='btn btn-sm btn-danger'>
                                @if($config->options->localized) @lang('crud.delete') @else 'Delete' @endif
                            </a>
                        </div>
                        {!! Form::open([
                            'route' => ['users.destroy', $user->id],
                            'method' => 'delete',
                            'id' => 'delete_users_'.$user->id
                        ]) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@include('mazer-templates::common.paginate', ['records' => $users])
