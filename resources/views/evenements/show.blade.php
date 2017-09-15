@extends('layouts.master_1')
@section('content')
<div class=" relaxed row">
  <div class="nine wide column">
    <div class="ui very padded fluid segment">
      <center> <h1>{{{$evenement->title}}}</h1></center>
      <p class="ui fluid segment">{{$evenement->body}}</p>
      <div id="photo_caroussel">
        <template>
        <el-carousel :interval="4000">
        @foreach($evenement->photos as $photo)
        <el-carousel-item>
          <center>
            <img src="{{Cloudder::show($photo->filename)}}">
          </center>
        </el-carousel-item>
        @endforeach
        </el-carousel>
        </template>
      </div>
      <a href="{{ url()->previous() }}" class="ui orange button">
        <i class="backward icon"></i>
        Back
      </a>
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
  </div>

@endsection