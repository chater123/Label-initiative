@extends('layouts.master_1')
@section('content')
<div class="row" style="background-color:rgba(214, 212, 212,.2);padding:6em 0; ">
  <h1 class="ui header">Nos Evenement</h1>
  <div class="ui four container cards">
    @foreach($evenements as $evenement)
    <div class="card" style="max-width: 400px;">
      <div class="image">
       <img src="{{Cloudder::show($evenement->photos[0]->filename)}}">
     </div>

     <div class="content">
      <a class="header">
        <a  class="ui header" href="{{route('evenement.show',$evenement->id)}}">
          {{$evenement->title}}
        </a>
      </a>
      <div class="meta">
        <span class="date">
          {{$evenement->created_at->diffForHumans()}}
        </span>
      </div>
    </div>

    <div class="extra content">
      @if($evenement->url)
      <i class="orange world icon"></i>
      <a href="{{$evenement->url}}" target="_blank">
        S'inscrire dans l'evenement
      </a>
      @endif

      <div class="ui divider">
      </div>

      @role('Admin')
      <div class="ui buttons">
        <a href="{{ route('evenement.edit', $evenement->id) }}" class="ui yellow button" role="button">
          <i class="edit icon"></i>
          Edit
        </a>
        <div class="or"></div>
        {!! Form::open(['method' => 'DELETE', 'route' => ['evenement.destroy', $evenement->id] ]) !!}
        {!! Form::submit('Delete', ['class' => 'ui red button ']) !!}
        {!! Form::close() !!}
        
      </div>
      @endrole
    </div>
    
  </div>
  @endforeach
</div>
@role('Admin')
<a class="ui  button" href="{{URL::to('evenement\create')}}" style="margin:2em;" >
  <i class=" orange large plus icon"></i>
  Ajouter des Evenements
</a>
@endrole
</div>



@endsection