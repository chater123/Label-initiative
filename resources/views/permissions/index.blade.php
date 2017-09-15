@extends('layouts.master_1')
@section('title', '| Permissions')
@section('content')
<div class="row">
    <table class="ui unstackable very padded celled table" style="height: 100vh; overflow: scroll;">
        <thead>
            <tr>
                <th>Permissions</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($permissions as $permission)
            <tr>
                <td>{{ $permission->name }}</td>
                <td>
                  <div class="ui small buttons">
                        <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}" class="ui yellow button">Edit</a>
                        <div class="or"></div>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
                        {!! Form::submit('Delete', ['class' => 'ui red button']) !!}
                        {!! Form::close() !!}
                 </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ URL::to('permissions/create') }}" class="ui animated button" style="margin:2em;">
        <div class="visible content">Add permission</div>
        <div class="hidden content">
            <i class="plug icon"></i>
        </div>
    </a>
</div>
@endsection