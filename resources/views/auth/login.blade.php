@extends('layouts.master_1')
@section('content')
<div class="row" style="background-color:rgba(214, 212, 212,.2); padding:6em 0;">
    <div class=" six wide column">
        <center>
        <h1 class="ui header">
        <div class="content">
            @lang('lang.welcome_message')
        </div>
        </h1>
        </center>
        <img src="{{asset('images/home_shadow.png')}}"  class="ui centred image" style="margin-bottom: 30px;">
    </div>
    <div class=" six wide column">
        <form class="ui segment form" method="POST" action="{{ route('login') }}">
            {!! csrf_field() !!}
            
            <div class="field">
                <label>*@lang('lang.email')</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
            </div>
            
            
            <div class="field">
                <label>*@lang('lang.password')</label>
                <input id="password" type="password" class="form-control" name="password" required>
            </div>
            
            <div class="field">
                <div class="ui checkbox">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label>@lang('lang.remember_me')</label>
                </div>
            </div>
            <div class="field">
                <button type="submit" class="ui orange button">
                @lang('lang.header_connect')
                </button>
                <a class="ui label" href="{{ route('password.request') }}">
                    @lang('lang.forgot_pwd')
                </a>
            </div>
            <div class="ui tiny subheader">
                @lang('lang.register_message') <br>
            </div>
            <div class="ui small buttons">
                <a class="ui yellow button" href="/register"> @lang('lang.devenir_part')</a>
                <div class="or"></div>
                <a class="ui orange button" href="/deposer">@lang('lang.devenir_port')</a>
            </div>
        </form>
    </div>
</div>
@endsection