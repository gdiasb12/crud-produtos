<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laravel</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

	<!-- Styles -->
	<style>
	html, body {
		background-color: #fff;
		color: #636b6f;
		font-family: 'Raleway', sans-serif;
		font-weight: 100;
		height: 100vh;
		margin: 0;
	}

	.full-height {
		height: 100vh;
	}

	.flex-center {
		align-items: center;
		display: flex;
		justify-content: center;
	}

	.position-ref {
		position: relative;
	}

	.top-right {
		position: absolute;
		right: 10px;
		top: 18px;
	}

	.content {
		text-align: center;
	}

	.title {
		font-size: 84px;
	}

	.links > a {
		color: #636b6f;
		padding: 0 25px;
		font-size: 12px;
		font-weight: 600;
		letter-spacing: .1rem;
		text-decoration: none;
		text-transform: uppercase;
	}

	.m-b-md {
		margin-bottom: 30px;
	}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
	<div class="flex-center">

		<div class="container">
			<h1 class="text-primary">
				Produtos 
			</h1>

			<div>
				<form method="POST" class="col-12" action="{{ $route }}">
					{{ csrf_field() }}
					{{ method_field($method) }}
					<div class="box-body d-flex row">
						<div class="col-md-6 pl-md-0">
							<label for="titulo">Titulo: <span class="text-red">*</span></label>
							<input type="text" class="form-control form-control-lg" name="titulo" id="titulo" placeholder="Titulo" value="{{ $produto->titulo ?? old('titulo') }}" required>
							<br>
						</div>

						<div class="col-md-6 pr-md-0">
							<label for="quantidade">Quantidade: <span class="text-red">*</span></label>
							<input type="number" class="form-control form-control-lg" name="quantidade" id="quantidade" value="{{ $produto->quantidade ?? old('quantidade') }}" required>
							<br>
						</div>

						<div class="col-md-6 pl-md-0">
							<label for="descricao">Descrição : <span class="text-red">*</span></label>							
							<input type="text" class="form-control form-control-lg" name="descricao" id="descricao" placeholder="Descrição" value="{{ $produto->descricao ?? old('descricao') }}" required>
							<br>
						</div>

						<div class="col-md-6 pr-md-0">
							<label for="valor">Valor (R$): <span class="text-red">*</span></label>
							<input type="number" step="any" class="form-control form-control-lg" name="valor" id="valor" placeholder="00,00" value="{{ $produto->valor ?? old('valor') }}">
							<br>
						</div>

					</div>
					<div class="col-md-12 p-0 pt-3 row">
						<button type="submit" class="btn btn-success mr-3" >
							Salvar
						</button>
						<a class="btn btn-dark" href="{{ route('produto.index') }}">
							Voltar
						</a>
					</div>
					<br>
					<span class="align-self-end">
						<small>
							<em>* Campo obrigatório</em>
						</small>
					</span>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
