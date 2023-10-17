@if (session('msg'))
    <div class="col alert" style="background-color: green" role="alert">
        <p class="p-3" style="text-align: center; color: #fff;">{{ session('msg') }}</p>
    </div>
@endif


@if($mensagem = Session::get('login_error'))
    <div class="col alert" style="background-color: rgb(233, 5, 5); height: 70px; padding: -70px;" role="alert">
        <p class="p-3" style="text-align: center; color: #fff;">{{ $mensagem }}</p>
    </div>
@endif




@if($mensagem = Session::get('error'))
    <div class="col alert" style="background-color: rgb(233, 5, 5); height: 70px; padding: -70px;" role="alert">
        <p class="p-3" style="text-align: center; color: #fff;">{{ $mensagem }}</p>
    </div>
@endif

@if ($errors->all())
    <div class="col alert alert-dark bg-dark" role="alert">
        @foreach ($errors->all() as $error)
            <p class="p-3 text-danger" style="text-align: center;">{{ $error }}</p>
        @endforeach
    </div>
@endif
