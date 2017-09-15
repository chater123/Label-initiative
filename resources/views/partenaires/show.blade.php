@extends('layouts.master_1')
@section('content')
<div class="row">
    <div class="ui very padded segment">
        <div class="ui orange  header">
            <img src="{{asset('images/partners/'.$partenaire->logo)}}" class="ui centered image">
            <div class="content">
                {{$partenaire->name}}
            </div>
        </div>
          <a href="{{ url()->previous() }}" class="ui orange  button">
            <i class="backward icon"></i>
            Back
          </a>
        <div class="ui divider">
    
         </div>
        @role('Admin')
            <div class="ui buttons">
                <a href="{{ route('partenaire.edit', $partenaire->id) }}" class="ui yellow button" role="button">
                    <i class="edit icon"></i>
                        Edit
                </a>
                <div class="or"></div>
                {!! Form::open(['method' => 'DELETE', 'route' => ['partenaire.destroy', $partenaire->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'ui red button ']) !!}
                {!! Form::close() !!}
        
            </div>
        @endrole
    </div>
</div>
@endsection