<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" />
        <title>Label Initiative</title>
        <style>
            #my_step1
            {
                background: #FF6600  url("images/slider_4.jpg") no-repeat;
                background-size: cover;
                width: 100%;
            }
            #my_step2
            {
                background: #FF6600  url("images/slider2.jpg") no-repeat;
                background-size: cover;
                width: 100%;
            }
            #my_step3
            {
                background: #FF6600  url("images/slider3.jpg") no-repeat;
                background-size: cover;
                width: 100%;
            }
        /*sidebar*/

            #pusher
            {
                visibility: visible;
            }
            #navigation_menu
            {
                display: none;
                visibility: hidden;
            }

            #logo_left
            {
                display: none;
            }

            @media only screen and (min-width: 860px) 
            {
                #navigation_menu
                {
                    display: flex;
                    visibility: visible;
                }

                #pusher
                {
                    display: none;
                    visibility:hidden;
                }

                #logo_left
                {
                    display: flex;
                }
            } 
        </style>
        <link rel="shortcut icon" type="image/gif" href="images/home_iBI_icon.ico" />
        {{-- styles --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/rvslider.min.css') }}">
        <link rel="stylesheet" href="{{asset('modern-slide-in/css/sequence-theme.modern-slide-in.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
        <script>
            window.App = {!! json_encode([
            'csrfToken' => csrf_token(),
            'user' => Auth::user(),
            'signedIn' => Auth::check()
      ]) !!};
      </script>
    </head>

    <body>
        <div class="ui centered stackable grid" id="app">
            @include('partials.header_1')
            {{-- new row --}}
            <div class="row"  style="padding-top:0; padding-bottom: 0em">
                <div id="sequence" class="seq">
                    <div class="seq-screen">
                        <ul class="seq-canvas">
                            <li id="my_step1">
                                <div class="seq-model">
                                    <a href="/register">
                                        @if(App::getLocale()=="ar")
                                            <img data-seq src="images/rubrique_arabe.png" alt="" />
                                        @else
                                            <img data-seq src="images/rubrique.png" alt="" />
                                        @endif   
                                    </a>
                                </div>
                                <div class="seq-title">
                                    <h2 data-seq>
                                        @lang('lang.slider_one_message')
                                    </h2>
                                </div>
                            </li>
    
                            <li  id="my_step2">
                                <div class="seq-model">
                                    <a href="/register">
                                        @if(App::getLocale()=="ar")
                                            <img data-seq src="images/rubrique_arabe.png" alt="" />
                                        @else
                                            <img data-seq src="images/rubrique.png" alt="" />
                                        @endif   
                                    </a>
                                </div>
                                <div class="seq-title">
                                    <h2 data-seq>
                                        @lang('lang.slider_two_message')
                                    </h2>
                                </div>
                            </li>
    
                            <li id="my_step3">
                                <div class="seq-model">
                                    <a href="/register">
                                        @if(App::getLocale()=="ar")
                                            <img data-seq src="images/rubrique_arabe.png" alt="" />
                                        @else
                                            <img data-seq src="images/rubrique.png" alt="" />
                                        @endif   
                                    </a>
                                </div>
                                <div class="seq-title">
                                    <h2 data-seq>
                                        @lang('lang.slider_three_message')
                                    </h2>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                        <button type="button" class="seq-prev" aria-label="Previous">Previous</button>
                        <button type="button" class="seq-next" aria-label="Next">Next</button>
                    </fieldset>
                </div>
            </div>
    
            <!-- new row -->
    
            <div class=" orange middle aligned  row" style="background-color: #ff6600">
                <div class=" three wide column">
                    <img src="{{asset('images/home_black_and_white.png')}}" class="ui centered bordered small image" style="box-shadow: 1px 1px  2px 1px rgba(0,0,0,0.75);"> 
                </div>
                <div class="ten wide column">
                    <p class="main-title">
                        @lang('lang.message_principale')
                    </p>
                </div>
            </div>
    
            {{-- new row --}}
    
            <div class="row">    
                <div class="ten wide column">
                    <p class="main-title" style="font-size: 2.7em; font-family: 'Open Sans Condensed';">
                        <b>@lang('lang.name_of_app')</b> 
                        <span style="color: #ff6600;"> @lang('lang.support_message')</span>
                        <br>
                        <a class="ui orange large  labeled icon button" href="/deposer" style="padding: 2em; margin-top: 2em; ">
                            <i class="idea icon"></i>
                            @lang('lang.deposer_projet')
                        </a>
                    </p>
              </div>
            </div>
    
            <!-- new row -->
    
            <div class="row">
                <div class="ui horizontal large divider" id="centred_title">
                    <h2> 
                        <i class=" chevron down icon "></i>
                         @lang('lang.decouvrir_projet')
                    </h2>
                </div>
    
                <div class="ui three special container  doubling cards">
                    @foreach($projets as $projet)
                        <div class="card">
                            <div class=" blurring dimmable image">
                                <div class="ui dimmer">
                                    <div class="content">
                                        <div class="center">
                                            <a class="ui orange button" href="/projet/{{$projet->id}}">Découvrir</a>
                                        </div>
                                    </div>
                                </div>
                                <img src="images/5.jpg" alt="">
                                <div id="message_principale" style="position: static; padding: 1.2em;">{{$projet->title}}</div>
                            </div>
    
                            <div class="extra">
                                <i class=" red heart icon"></i>
                                {{count($projet->favoriters)}}
                            </div>
                        </div>
                     @endforeach
                </div>
            </div>
    
            <!-- new row -->
    
            <div class="row">
                <div class="column">
                    <center>
                        <a class="ui orange large button" href="{{URL::to('projet')}}" style="padding: 1.5em; margin: 1.5em">
                            @lang('lang.all_projets')
                        </a>
                    </center>
    
                    <div class="ui horizontal divider" id="centred_title">
                        <h2> 
                            <i class=" chevron down icon "></i>
                            @lang('lang.chiffre_cle')
                        </h2>
                    </div>
    
                    <div class="ui four statistics" >
                        <div class="statistic">
                            <div class="value">
                                <i class="idea orange icon"></i>
                                {{count($projets)}}
                            </div>
                            <div class="label">
                                @lang('lang.projet')
                            </div>
                        </div>
    
                        <div class="statistic" >
                            <div class="value">
                             <i class="users orange  icon"></i>
                              300
                            </div>
                            <div class="label">
                            @lang('lang.membres_actifs')
                            </div>
                        </div>
    
                        <div class="statistic" >
                            <div class="value">
                                <i class="id orange badge icon"></i>  
                                300
                            </div>
                            <div class="label">
                                @lang('lang.assoc')
                            </div>
                        </div>
                  
                        <div class="statistic">
                            <div class="value">
                                <i class="handshake orange icon"></i>
                                {{count($partenaires)}}
                            </div>
                            <div class="label">
                                @lang('lang.spons')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            {{-- new row --}}
    
            <div class="row">
                <div class="ui horizontal large divider" id="centred_title">
                    <h2>
                        <i class=" chevron down icon "></i>
                        @lang('lang.spons')
                    </h2>
                </div>
    
                <div class=" six wide column">
                    
                        <el-carousel :interval="4000" type="card" height="200px">
                            @foreach($partenaires as $partenaire)
                                <el-carousel-item>
                                    <center>
                                        <img src="{{  asset('images/partners/'.$partenaire->logo)}}" alt="partenaire" class="ui small image">
                                    </center>
                                </el-carousel-item>
                            @endforeach
                        </el-carousel>
                </div>
               
    
                <div class="ui horizontal large divider" id="centred_title">
                    <h2>
                        <i class=" chevron down icon "></i> 
                        @lang('lang.video_l')
                    </h2>
                </div>
            </div>
    
        </div>
          {{-- end of the grid --}}
          <!-- new row out the grid-->
        <div class="rvs-container rvs-horizontal rvs-light rvs-orange-highlight rvs-large-thumbs" style="max-width: 100%">
            <div class="rvs-item-container" >
                <div class="rvs-item-stage">
                        <!-- The below is a single item, simply duplicate this layout for each item -->
                    <div class="rvs-item" style="background-image: url(https://img.youtube.com/vi/kiY79L_s1BU/maxresdefault.jpg)">
                        <p class="rvs-item-text">
                             Festival Village Durable <small>LABEL-INITIATIVE</small>
                        </p>
                        <a href="https://www.youtube.com/embed/kiY79L_s1BU" class="rvs-play-video"></a>
                    </div>
                        <!-- new item -->
                    <div class="rvs-item" style="background-image: url(https://img.youtube.com/vi/qh49jlLjQZ8/maxresdefault.jpg)">
                        <p class="rvs-item-text">
                            Film sur les actions de la Fondation Village Durable Région de  Moulay Bousselham<small>LABEL-INITIATIVE</small>
                        </p>
                        <a href="https://www.youtube.com/embed/qh49jlLjQZ8" class="rvs-play-video"></a>
                    </div>
                        <!-- new item -->
                    <div class="rvs-item" style="background-image: url(http://img.youtube.com/vi/KpQYOVDFC7U/hqdefault.jpg)">
                        <p class="rvs-item-text">
                            Film sur les actions de la Fondation Village Durable Région de Casablanca. <small>LABEL-INITIATIVE</small>
                        </p>
                        <a href="https://www.youtube.com/embed/KpQYOVDFC7U" class="rvs-play-video"></a>
                    </div>
                </div>
            </div>
    
            <div class="rvs-nav-container">
                <a class="rvs-nav-prev"></a>
                <div class="rvs-nav-stage">
                <!-- The below is the corresponding nav item for the single item, simply duplicate this layout for each item -->
                    <a class="rvs-nav-item">
                        <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/kiY79L_s1BU/maxresdefault.jpg) "></span>
                        <h4 class="rvs-nav-item-title">
                            Festival Village Durable
                        </h4>
                        <small class="rvs-nav-item-credits">
                            LABEL-INITIATIVE
                        </small>
                    </a>
                <!-- new item -->
                    <a class="rvs-nav-item">
                        <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/qh49jlLjQZ8/maxresdefault.jpg) "></span>
                        <h4 class="rvs-nav-item-title">
                            Film sur les actions de la Fondation Village Durable Région de  Moulay Bousselham.
                        </h4>
                        <small class="rvs-nav-item-credits">
                            LABEL-INITIATIVE
                        </small>
                    </a>
                <!-- new item -->
                    <a class="rvs-nav-item">
                        <span class="rvs-nav-item-thumb" style="background-image: url(https://img.youtube.com/vi/KpQYOVDFC7U/2.jpg)"></span>
                        <h4 class="rvs-nav-item-title">
                        Film sur les actions de la Fondation Village Durable Région de Casablanca.
                        </h4>
                        <small class="rvs-nav-item-credits">
                            LABEL-INITIATIVE
                        </small>
                    </a>
                </div>
                <a class="rvs-nav-next"></a>
            </div>
        </div>
          
          <!-- new row out grid -->
        @include('partials.footer_1')
    
    
        <script src="{{ mix('js/app.js') }}"></script>
        <script src="{{ mix('js/user-notifications.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="{{asset('js/rvslider.min.js')}}"></script>
        <script>
            jQuery(function($)
            {
                $('.rvs-container').rvslider();
            });
        </script>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{ asset('js/semantic.min.js') }}"></script>
        <script>
            $('.ui.dropdown').dropdown();   
            $("#pusher").click(()=>
            {
                $('.ui.sidebar')
                .sidebar('toggle')
            });
    
            $('.special.cards .image').dimmer(
            {
                on: 'hover'
            });
        </script>
    
        <script src="{{asset('modern-slide-in/scripts/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('modern-slide-in/scripts/hammer.min.js')}}"></script>
        <script src="{{asset('modern-slide-in/scripts/sequence.min.js')}}"></script>
        <script src="{{asset('modern-slide-in/scripts/sequence-theme.modern-slide-in.js')}}"></script>
        @include('partials.one_signal_notification')
        @include('partials.tawk_to')
    </body>
</html>