<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>


    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('login') }}">Login<span class="sr-only"></span></a>
              </li>

            </ul>
            <form class="form-inline mt-2 mt-md-0" action="/" method="GET">
              <input class="form-control mr-sm-2" type="text" id="search" name="search" placeholder="Pesquisar" aria-label="Search">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
          </div>
        </nav>
    </header>


    <div style="padding: 10% 10% 10% 10%; background-color: #9a9a9a;">

        @if(session('msg'))
            <div class="col alert alert-dark" style="background-color: green;" role="alert">
                <p class="p-3" style="text-align: center; color: #fff;">{{session('msg')}}</p>
            </div>
        @endif

        <form class="row g-3" action="{{ route('user.createUser') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <h2 style="margin-left: 35%; color: #000">Registar Utilizador</h2>

            <div class="col-md-6 form-group">
                <label for="title">Nome:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome" required>
            </div>

            <div class="col-md-6 form-group">
                <label for="exampleFormControlInput1">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="examplo@gmail.com" required>
            </div>

            <div class="col-md-6 form-group">
                <label for="title">Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Senha" required>
            </div>

            <div class="col-md-6 form-group" hidden>
                <label for="title">Admin:</label>
                <input type="text" class="form-control" id="is_admin" name="is_admin" value="1" placeholder="Numero" required>
            </div>

            <div class="col-md-6 text-center">
                <button type="submit" class="btn btn-primary col-md-6 py-3" style="padding-right: 10%;"><p style="margin-left: 20px; font-weight: 500;">Registar</p></button>
            </div>

        </form>


    </div>
</body>
</html>
