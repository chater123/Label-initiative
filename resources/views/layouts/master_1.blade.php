<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" type="image/gif" href="images/home_iBI_icon.ico" />
    <link href="/css/app_talk.css" rel="stylesheet">
    <link rel="stylesheet"
      type="text/css" href="{{ mix('css/app.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
      <style>
      .initiative_list{
      list-style-image: url('images/home_5Dx_icon.ico');
      }
      .initiative_list li{
      font-family: 'Source Sans Pro', sans-serif;
      font-size: 1.7em;
      }
      #pusher{
      visibility: visible;
      }
      #navigation_menu{
      display: none;
      visibility: hidden;
      }
      #logo_left
      {
      display: none;
      }
      @media only screen and (min-width: 860px) {
      #navigation_menu{
      display: flex;
      visibility: visible;
      }
      #pusher{
      display: none;
      visibility:hidden;
      }
      #logo_left{
      display: flex;
      }
      }
      </style>
      <script>
      window.App = {!! json_encode([
      'csrfToken' => csrf_token(),
      'user' => Auth::user(),
      'signedIn' => Auth::check()
      ]) !!};
      </script>
    </head>
    <body>
      <div class="ui  stackable centered grid" id="app">
        @include('partials.header_1')
        @role('Admin')
        @include('partials.admin_menu')
        @endrole
        @yield('content')
        
        @include('partials.footer_1')
      </div>
       {{-- <script src="{{ mix('js/user-notifications.js') }}"></script> --}}
      <script src="{{ mix('js/app.js') }}"></script>
      <script src="{{asset('js/app_talk.js')}}"></script>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="{{ asset('js/semantic.min.js') }}"></script>
      <script>
      $( ".ui.checkbox" ).checkbox();
      $('.ui.dropdown').dropdown();
      $("#pusher").click(()=>{
      $('.ui.sidebar')
      .sidebar('toggle')
      ;
      });
      </script>

      <script type="text/javascript">
      function copyToClipboard(element) {
      var $temp = $("<input>");
      $("body").append($temp);
      $temp.val($(element).text()).select();
      document.execCommand("copy");
      $temp.remove();
      }
      </script>
      @include('partials.tawk_to')
    </body>
  </html>