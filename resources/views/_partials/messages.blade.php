
@if ($errors->any())
	<div class="alert alert-danger changeABC">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

@foreach (['danger', 'warning', 'success', 'info'] as $msg)
	@if(Session::has($msg))
		<div class="alert alert-{{ $msg }} changeABC">
			{{ Session::get($msg) }}
		</div>
	@endif
@endforeach
