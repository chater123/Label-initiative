@extends('layouts.master_1')
@section('content')

<div class="row" >
<div class="eleven wide column">
		<div class="ui four cards">
			@foreach($evenements as $evenement)
			<div class="ui  card">
    <img src="{{asset('storage/'.$evenement->photos[0]->filename)}}" class="ui image" >


  <div class="content">
    <a class="header"><a href="{{route('evenement.show',$evenement->id)}}">{{$evenement->title}}</a></a>
    <div class="meta">
      <span class="date">{{$evenement->created_at->diffForHumans()}}</span>
    </div>
  </div>
 
</div>
			@endforeach
</div>

	</div>

</div>

@can('Create Evenement')
    <a class="ui large button" href="{{URL::to('evenement\create')}}"> 
<i class=" orange large plus icon"></i>Ajouter des Evenements</a>
@endcan

@endsection