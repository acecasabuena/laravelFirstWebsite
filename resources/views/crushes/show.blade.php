

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

	<p class = "ez" >First Name: {{$crush->first_name}}</p>
	
	<p class = "ez">Last Name: {{$crush->last_name}}</p>

	<p class = "ez">FB Profile link: {{$crush->fb_profile_link}}</p>

	<p class = "ez">Contact Number: {{$crush->contact_number}}</p>

<h1>
	QUALITIES
</h1>
	<a href="{{ route('crushes.id.quality', array('id'=>$crush->id)) }}">ADD QUALITY</a>

</form>

<table border = '50' >

	<thead>
			<tr>
					<td>Qualities</td>
					<td>ID</td>
					<td>Action</td>	
			</tr>
	</thead>

	<tbody>
		@foreach($quality as $qualities)
			<tr>
				
				<td> {{$qualities->crush_quality}} </td>
				<td><a href="{{ route('crushes.id.delete_quality',$qualities->id ) }}">Delete</a></td>
			</tr>
		@endforeach
	
	