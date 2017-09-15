<div class="row" style="border-bottom: 5px solid orange; padding:1em 0; margin: 0;">
    <div class="two wide column middle aligned">
        <a href="/">
            <img src="{{asset("images/synergie.png")}}" alt="images/synergie.png" class="ui left floating small image" id="logo_left">
        </a>
        <div class="ui sidebar orange vertical menu" id="sidebar_navigation">
            <a class="item" href="/qui_sommes_nous">
                @lang('lang.header_us')
            </a>
            <a class="item" href="{{URL::to('projet')}}">
                 @lang('lang.header_projets')
            </a>
            <a class="item" href="{{URL::to('partenaire')}}">
               @lang('lang.header_partners')
            </a>
            <a class="item" href="{{URL::to('evenement')}}">
                @lang('lang.header_events')
            </a>
            <a class="item">
                @if(Auth::guest())
                    <div class="ui orange button">
                       @lang('lang.header_connect')
                    </div>
                @else
                    <div class="ui dropdown">
                        <div class="text">
                            <img class="ui avatar image" src="images/man.jpg" alt="" >
                            {{ Auth::user()->name }}
                         </div>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            @role('Admin')
                                <a href="#"><i class="unlock alternate icon"></i>
                                    @lang('lang.header_admin')
                                </a>
                            @endrole
                        
                            <div class="item">
                                 <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="sign out icon"></i>
                                    @lang('lang.header_logout')
                                 </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                 </form>
                             </div>
                        </div>
                    </div>
                @endif
            </a>
        </div>
        <div class="pusher" id="pusher">
            <button class="ui orange icon button">
                <i class="sidebar icon"></i>
            </button>
        </div>
    </div>

    <div class="nine wide column middle aligned" id="navigation_menu">
        <div class="ui five orange item secondary menu">
            <a href="/qui_sommes_nous" class="item"> 
              <p class="ui small orange header">
                   @lang('lang.header_us')
              </p>      
            </a>
            <a href="{{URL::to('projet')}}" class=" item">
                <p class=" ui small orange header">
                    @lang('lang.header_projets')
                </p> 
            </a>
            <a href="{{URL::to('evenement')}}" class="item">
                   <p class=" ui small orange header">
                       @lang('lang.header_events')
                   </p>  
            </a>
            
            <a href="{{URL::to('partenaire')}}" class="item">
                   <p class=" ui small orange header">
                        @lang('lang.header_partners')
                   </p>
            </a>

            @if(Auth::guest())
                <a class="item"  href="{{URL::to('login')}}">
                    <div class="ui orange button">
                        @lang('lang.header_connect')
                    </div>
                </a>
            @else
                 <div class="item">
                    <div class="ui dropdown">
                        <div class="text">
                            <img class="ui avatar image" src="{{asset('images/man.jpg')}}" alt="" >
                            {{ Auth::user()->name }}
                        </div>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            @role('Admin')
                                <div  class="text" href="#">
                                    <i class="unlock alternate icon"></i>
                                     @lang('lang.header_admin')
                                </div>
                            @endrole

                            @role('Porteur de Projet')
                                <a class="item" href="/espace_porteur">
                                    <i class="home icon"></i>
                                    @lang('lang.header_myspace')
                                </a>
                            @endrole

                            @role('Partenaire Projet')
                                <a class="item" href="/espace_partenaire">
                                    <i class="home icon"></i>
                                    @lang('lang.header_myspace')
                                </a>
                            @endrole
                            <div class="item">
                                <div onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="sign out icon"></i>
                                    @lang('lang.header_logout')
                                </div>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
        
    @if(Auth::check())
        <div class="one wide column middle aligned " id="user_notifications">
            <user-notifications></user-notifications>
        </div>        
    @endif

    <div class="two wide middle aligned column">
        <div class="ui dropdown">
            <i class="world icon"></i>
            <span class="text">
                <i class=" {{App::getLocale()}} flag"></i>
            </span>       
            <div class="menu">
                @foreach ( config('app.languages') as $user)
                    @if($user !== config('app.locale'))
                        <div class="item">
                            <a href="{!! url('language') !!}/{{ $user }}">
                                <i class=" {{$user}} flag"></i>
                            </a>
                        </div>
                    @endif
                @endforeach       
            </div>
        </div>
    </div>

    <div class="two wide column middle aligned">
        @if(App::getLocale()=="ar")
        <a href="/"><img src="{{ asset("images/logo(arabic).png") }}" alt="" class="ui  right floating small image" id="logo_right"></a>
        @else
          <a href="/"><img src="{{ asset("images/test_modified.png") }}" alt="" class="ui  right floating small image" id="logo_right"></a>
        @endif
    </div>
        
</div>