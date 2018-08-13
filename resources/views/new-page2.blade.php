<html>
	<body>

		<h1>ikatulo</h1>


		@foreach($name as $name)

		<a href="{{route('aw'),array('text' => $name)}}">{{$name}}</a>
	</body>
	<

</html>