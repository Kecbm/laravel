<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <main>
        <h1>Edit user</h1>

        <!-- method: para editar no Laravel -->
        <form method="post" action="{{route('user.update', $user->id)}}">
          <!-- Quando fazemos um POST, devemos passar um token para o Laravel saber que a requisição está saindo da nossa aplicação mesmo -->
          @csrf
          <!-- Diretiva do Laravel -->
          @method('put')
          <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" value="{{$user->name}}" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" value="{{$user->email}}" class="form-control" name="email" id="email" placeholder="Password">
          </div>

          <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
