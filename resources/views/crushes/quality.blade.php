
@if ($errors->any())

<div class="alert alert-danger">
	<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
	</ul>
</div>
@endif
<form action = "{{ $action}}" method = "POST">

	{{ csrf_field() }}

	<input type = "hidden" name = "crush_id" value = "{{ $id }}">
	<label>Crush Quality:</label>
	<input type = "text" name = "crush_quality" value = "@if (old('crush_quality')) {{ old('crush_quality') }} @else {{$crush->crush_quality}} @endif">
	<br>

	
	<br>

	<button type="submit">{{ $submit_text}}</button>

</form>