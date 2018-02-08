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
        <a class="btn btn-primary  btn-xs" href="{{ route('produto.create') }}">
          Novo
        </a>
      </h1>

      <div>

        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Titulo</th>
              <th>Descrição</th>
              <th>Quantidade</th>
              <th>Valor</th>
              <th class="text-center">#</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($produtos as $produto)
            <tr>
              <td>{{ $produto->titulo }}</td>
              <td>{{ $produto->descricao }}</td>
              <td>{{ $produto->quantidade }}</td>
              <td>{{ $produto->valor }}</td>
              <td class="text-center">
                <a class="btn btn-primary btn-xs float-left" href="{{ route('produto.edit', $produto->id) }}">
                  Editar
                </a>
                <form method="POST" action="{{ route('produto.destroy', $produto->id) }}">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button type="submit" class="btn btn-danger btn-xs btn_excluir">
                    Remover
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
