
<h1>{{$shoutout}}</h1>

<table border = "100">
	<th>#</th>
	<th>COLOR</th>
	<th>DESCRIPTION</th>

@foreach($colors as $color => $description)
	

		<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{ $color}}</td>
				<td>{{ $description }}</td>
		</tr>
	 

	<br>
@endforeach