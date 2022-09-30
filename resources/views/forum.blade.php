<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forum</title>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style type="text/css">
    	#content{
    		display: flex;
    		justify-content: space-around;
    		align-content: center;
    		width: 100vw;
    		height: 200px;
    	}
    </style>
</head>
<body class='bg-dark text-white'>
	<nav class="container">
		<h1 class="text-center">
			Forum de Mods
		</h1>
		<div class="d-flex justify-content-end my-3">
			<a class="float-left" href="/create/project">Criar uma Postagem</a>
		</div>
	</nav>
	<header class="container-fluid text-white">
		@foreach($event as $evento)
			<div class="container border" id="content">
				<img src="/foto/img/{{$evento->foto}}">
				
				<div>
					<h1>
						Mod: {{$evento->titulo}}
					</h1>
					<p>
						sub-descrição: {{$evento->subdescricao}}<br>
						Criado em: {{$evento->created_at}}
					</p>
					<a href="/info/{{$evento->id}}">+ Informações</a>
				</div>

			</div>


		@endforeach
	</header>

</body>
</html>