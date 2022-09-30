<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Criar Postagem</title>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body class=" d-flex align-content-center">
	<header class="container-fluid">
		<form action="/create" method="POST" class="container-fluid d-flex justify-content-center align-content-center flex-column" style="width:500px" enctype="multipart/form-data">
			@csrf
			<div class="mb-4">
				<label for="titulo" class="form-text">Digite o Titulo</label>
				<input type="text" id="titulo" class="form-control" name="titulo" placeholder="Digite o Titulo">

			</div>
			<div class="mb-4">
				<label for="subdescricao" class="form-text">Digite a Subdescrição</label>
				<input type="text" class="form-control" id="subdescricao" name="subdescricao" placeholder="digite o sub-titulo">
			</div>
			<div class="mb-4">
				<label for="descricao" class="form-text">Digite a Descrição</label>
				<input type="text" id="descricao" class="form-control" name="descricao" placeholder="digite a dscricao">
			</div>
			<div class='mb-4'>
				<label for="link" class="form-text">Digite o Link</label>
				<input type="text" id="link" name="link" class="form-control" placeholder="Digite o link Do mod ara download">
			</div>
			<div class="mb-4">
				<label for="foto" class="form-text">Escolha uma Foto</label>
				<input type="file" class="form-control-file" id="foto" name="foto">
			</div>
			<button class="btn btn-dark">Enviar</button>
		</form>
	</header>
</body>
</html>