@php
if($sample == "bahala gud ka")
{
	$sample = "amping";
}
@endphp
<h1>{{$sample}}</h1>

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