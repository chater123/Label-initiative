@extends('layouts.master_1')
@section('content')
<div class="ui  stackable celled grid" style="background-color: rgba(214, 212, 212,.2);padding:0;margin:0">
	<div class="row">
		<div class="four wide column">
			<div class="ui compact vertical labeled icon menu">
				<a class="item" href="/espace_porteur/edit">
					<i class="travel icon orange"></i>
					@lang('lang.my_pr')
				</a>
				<a class="item" href="/espace_porteur/myaccount">
					<i class="folder icon orange"></i>
					@lang('lang.my_acc')
				</a>
				<a class="item" href="/espace_porteur">
					<i class="newspaper icon orange"></i>
					@lang('lang.projet_news')
				</a>
				<a class="item" href="/espace_porteur/chat">
					<i class="mail outline icon orange"></i>
					@lang('lang.chat_with_partners')
				</a>
			</div>
		</div>
		<div class="twelve wide column">
			<div class="row" id="menu_bar">
				<a class="ui orange button" href="/espace_porteur/createnouvelle">
				<i class="plus icon"></i>
				@lang('lang.add_news')
				</a>
			</div>
			

			<div class="ui very padded centered grid" style="padding-right: 30px;">
				@yield('espace_porteur')	
			</div>
		</div>

	</div>
</div>
@endsection