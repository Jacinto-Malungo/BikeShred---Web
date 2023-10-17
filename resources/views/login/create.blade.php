@extends('login.layouts')
@section('title', 'Creat account')
@section('conteudo')
<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="login-box bg-white box-shadow border-radius-5" style="margin-top: 50px;">
                    <div>
                        <!-- Pills content -->
                        <div class="tab-content">
                            @include('includes.mensagens')

                            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                                <form class="needs-validation" novalidate action="{{ route('user.createUser') }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf

                                    <div style="padding: 0px 10px 2px 0px; text-align: center; height: 50px;">
                                        <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" style="width: 50%; margin-top: -75px;">
                                    </div>

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nome de Utilizador</label>
                                        <input type="text" class="form-control" id="name" name='name' required>
                                        <div class="valid-feedback">
                                          @lang('validation.good')
                                        </div>
                                        <div class="invalid-feedback">
                                          @lang('validation.required', ['atributo' => __('atributo Nome')])
                                        </div>
                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="loginName">Email</label>
                                        <input type="email" id="email" name='email' class="form-control" required>
                                        <div class="valid-feedback">
                                            @lang('validation.good')
                                          </div>
                                          <div class="invalid-feedback">
                                            @lang('validation.required', ['atributo' => __('atributo Email')])
                                        </div>
                                    </div>

                                    <input type="hidden" name="saldo" value="{{ 10 }}">

                                    <!-- Password input -->
                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="loginPassword">Password</label>
                                        <input type="password" id="loginPassword" name="password" class="form-control" required>
                                        <div class="valid-feedback">
                                            @lang('validation.good')
                                          </div>
                                          <div class="invalid-feedback">
                                            @lang('validation.required', ['atributo' => __('atributo Password')])
                                        </div>
                                    </div>

                                    <div class="col-md-6 form-group" hidden>
                                        <label for="title">Admin:</label>
                                        <input type="text" class="form-control" id="is_admin" name="is_admin" value="1" placeholder="Numero" required>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-block mb-4">Registar</button>

                                </form>
                            </div>

                        </div>
                        <!-- Pills content -->
                    </div>

                    @include('includes.valid.vendor-scripts')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection



