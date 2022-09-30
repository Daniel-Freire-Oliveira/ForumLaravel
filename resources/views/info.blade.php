<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<title>
		Informações
	</title>
</head>
<body>
	<header class="container text-center">
		<div style="height:500px;width: 100%;">
			<img src="/foto/img/{{$event->foto}}" style="height: 100%; width: 100%;">
		</div>
		<div style="height:500px; width: 100%;">
			<hr>
			<h1>Informações do mod: {{$event->titulo}}</h1>
			<hr>
			<p>{{$event->descricao}}</p>
			<a class="btn btn-primary" href="{{$event->link}}"> Download</a>
		</div>

		
	</header>

</body>
</html>