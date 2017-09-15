<div class="row">
	@include('layouts.errors')
	<div class="nine wide column">
		{{ Form::open(array('route' => 'store_nouvelle','files' => true)) }}
		<div class="ui form segment">
			<div class="ui centered grid">
				<div class=" column">
					<div class="field">
						<label>@lang('lang.picture_of_event')</label>
						<div class="ui left icon  input">
							{{ Form::file('photo', null)}}
							<i class="newspaper orange icon"></i>
						</div>
					</div>
					<div class="field">
						<label>@lang('lang.title')</label>
						<div class="ui left icon input">
							<input type="text" name="title" placeholder="Titre" required>
							<i class="user icon orange"></i>
						</div>
					</div>
					<div class="field">
						<label>@lang('lang.description')</label>
						<textarea name="description">
						</textarea>
					</div>
				</div>
			</div>
			<div class="ui one column stackable center aligned page grid">
				<div class="column twelve wide">
					
					<button class="ui orange right labeled icon button" type="submit">
					@lang('lang.add_news')
					<i class="right chevron icon"></i>
					</button>
				</div>
			</div>
			<p>@lang('lang.obligation_filling_message')</p>
		</div>
		{{ Form::close() }}
	</div>
</div>