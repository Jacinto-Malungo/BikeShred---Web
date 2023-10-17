<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h1>Login BikeShared</h1>
    <div style="padding: 10% 10% 10% 10%; background-color: #2856b8;">

        @if(session('msg'))
            <div class="col alert alert-dark" style="background-color: green;" role="alert">
                <p class="p-3" style="text-align: center; color: #fff;">{{session('msg')}}</p>
            </div>
        @endif

        <form class="row g-3" action="{{ route('user.login') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <h2 style="margin-left: 35%; color: #000">Logar Utilizador</h2>

            <div class="col-md-6 form-group">
                <label for="exampleFormControlInput1">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="examplo@gmail.com" required>
            </div>

            <div class="col-md-6 form-group">
                <label for="title">Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Senha" required>
            </div>

            <div class="col-md-6 text-center">
                <button type="submit" class="btn btn-primary col-md-6 py-3" style="padding-right: 10%;"><p style="margin-left: 20px; font-weight: 500;">Registar</p></button>
            </div>

        </form>


    </div>


</body>
</html>
