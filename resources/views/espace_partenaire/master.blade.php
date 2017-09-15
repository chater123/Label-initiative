@extends('layouts.master_1')
@section('content')
  <div class="ui stackable celled grid" style="background-color: rgba(214, 212, 212,.2);padding:0;margin:0">
    <div class="row">
      <div class="four wide column">
        <div class="ui compact vertical labeled icon menu">
          <a class="item" href="/espace_partenaire">
            <i class="home icon orange"></i>
            @lang('lang.all_projets')
          </a>
          <a class="item" href="/espace_partenaire/fav_projets">
            <i class="folder icon orange"></i>
            @lang('lang.projet_followed')
          </a>
          <a class="item" href="/espace_partenaire/myaccount">
            <i class="configure icon orange"></i>
            @lang('lang.edit_my_acc')
          </a>
          <a class="item" href="/espace_partenaire/chat">
            <i class="mail outline icon orange"></i>
             @lang('lang.chat_with_porteur')
          </a>
        </div>
      </div>
  
      <div class="twelve wide column">
        <div class="ui very padded centered grid" style="padding-right: 30px;">
          @yield('espace_partenaire')
        </div>
      </div>
      
    </div>
  </div>
@endsection