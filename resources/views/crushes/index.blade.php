<html>
<head>

  <title>Crushes</title>
<style>
body{
	font-family: Bebas Neue;
}
table{
	width:68%;
	border: 1px solid;
	text-align: center;

}
td{
	border: 1px solid gray;
}
a{
	text-decoration: none;
	color: black;
}
thead{
	color: royalblue;
}

</style>

</head>
	<center>
		<br>
<body>
	<h3>Laravel Midterm Exam</h3>
<br>
<table>

	<thead>
			<tr>
					<td>First Name</td>
					<td>Last Name</td>
					<td>Fb Profile</td>
					<td>Contact Number</td>
					<td>Action</td>
					
			</tr>
	</thead>

	<tbody>
		@foreach($crushes as $crush)
			<tr>
				<td> {{$crush->first_name}}</td>
				<td>{{$crush->last_name}} </td>
			 	<td><a href=" {{$crush->fb_profile_link}}"> {{$crush->fb_profile_link}}</a></td>
				<td>{{$crush->contact_number}} </td>
				<td><a href="{{ route('crushes.id.edit', array('id'=>$crush->id)) }}">Edit | </a> &nbsp 
					<a href="{{ route('crushes.id.destroy', array('id'=>$crush->id)) }}">Delete | </a> &nbsp 
					<a href="{{ route('crushes.id.show', array('id'=>$crush->id)) }}"> Show</a></td>
				
			</tr>

	@endforeach
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td><a href = "{{ route ('crushes.create')}}">Add new Crush</a></td>
	</tr>
	</tbody>

</table>

</body>
</center>
</html>