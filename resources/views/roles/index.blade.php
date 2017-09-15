@extends('layouts.master_1')
@section('title', '| Roles')
@section('content')
<div class="row">
    <table class="ui unstackable very padded celled table" style="height: 100vh; overflow: scroll;">
        <thead>
            <tr>
                <th>Role</th>
                <th>Permissions</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
            <tr>
                <td>{{ $role->name }}</td>
                <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>
                <td>
                   <div class="ui small buttons">
                        <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="ui yellow button" >Edit</a>
                        <div class="or"></div>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
                        {!! Form::submit('Delete', ['class' => 'ui red button']) !!}
                        {!! Form::close() !!}
                 </div>
                    
                 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ URL::to('roles/create') }}" class="ui animated button" style="margin: 2em;">
        <div class="visible content">Ajouter un role Role</div>
        <div class="hidden content">
            <i class="plus icon"></i>
        </div>
    </a>
</div>
@endsection