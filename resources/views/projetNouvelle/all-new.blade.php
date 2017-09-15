<div class="row">
    <div class="ui four cards">
        @foreach($projet->nouvelles as $nouvelle)
        <div class="card">
            <div class="image">
                <img src="{{asset('images/photo_nouvelles/'.$nouvelle->photo)}}">
            </div>
            <div class="content">
                <a class="header">{{$nouvelle->title}}</a>
                <div class="meta">
                    <span class="date">Joined in 2013</span>
                </div>
                <div class="description">
                    {{$nouvelle->description}}
                </div>
            </div>
            <div class="extra">
            {!! Form::open(['method' => 'DELETE', 'route' => ['deletephoto_nouvelle', $nouvelle->id] ]) !!}
            {!! Form::submit('
            DELETE', ['class' => 'ui red button ']) !!}
            {!! Form::close() !!}
            </div>
            
        </div>
        @endforeach
    </div>
</div>