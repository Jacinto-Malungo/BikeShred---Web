@extends('login.layouts')
@section('title', 'Login')
@section('conteudo')
<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="login-box bg-white box-shadow border-radius-5" style="margin-top: 50px;">
                    <div class="login-title" style="margin-bottom: 10px;">
                        <h2 class="text-center text-primary">BikeShared <img src="{{ asset('dash/vendors/images/logobike.png') }}" class="svg" alt="" style="width:100px; height:300;"></h2>
                    </div>
                    @include('includes.mensagens')
                    <form action="{{ route('user.login') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="input-group custom">
                            <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="E-mail" required>
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="icon-copy dw dw-email"></i></span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Password" required>
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                            </div>
                        </div>
                        <div class="row pb-30">
                            <div class="col-6">
                                <div class="forgot-password"><a href="{{route('register')}}" style="color:blue; margin-right: 40px;">Regista-se aqui</a></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="LogIn">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
