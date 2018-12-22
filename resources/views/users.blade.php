<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
</head>
<body>
	<h2>{{$Title}}</h2>

	<ul>
		 @forelse ($usuarios as $usuario)
			<li>{{$usuario}}</li>
	@empty
		<p>NO HAY USUARIOS REGISTRADOS EN LA BASE DE DATOS</p>
	@endforelse
	</ul>
</body>
</html>