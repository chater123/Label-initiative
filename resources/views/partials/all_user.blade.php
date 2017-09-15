<div class="row">
    <table class="ui very padded unstackable celled table" style="height: 100vh; overflow: scroll">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Date/Time Added</th>
                <th>User Roles</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                <td>
                    
                    
                    <div class="ui small buttons">
                        <a href="{{ route('users.edit', $user->id) }}" class="ui yellow button">Edit</a>
                        <div class="or"></div>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                        {!! Form::submit('Delete', ['class' => 'ui red button']) !!}
                        {!! Form::close() !!}
                 </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('users.create') }}" class="ui  animated blue button" style="margin:2em;">
        <div class="visible content">Add User</div>
        <div class="hidden  content">
            <i class="add  user  icon"></i> 
        </div>
    </a>
</div>