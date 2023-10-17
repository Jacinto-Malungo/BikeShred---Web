@extends('errors::minimal')

@section('title', __('ERRO'))
@section('code', '503')
@section('message', __('Serviço Temporariamente Indispunivel...'))


@extends('site.layouts_errors')

@section('title')
  @lang('translation.Error_503')
@endsection

@section('body')

  <body>
  @endsection

  @section('conteudo')
    <div class="account-pages my-5 pt-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="mb-5 text-center">
              <h1 class="display-2 fw-medium">5<i class="bx bx-buoy bx-spin text-primary display-3"></i>3</h1>
              <h4 class="text-uppercase">Desculpe, Serviço Temporariamente Indispunivel...</h4>
              <div class="mt-5 text-center">
                <a class="btn btn-primary waves-effect waves-light" href="{{ route('site.home') }}">Volta para Página Inicial</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8 col-xl-6">
            <div>
              <img src="{{ URL::asset('/assets/images/error-img.png') }}" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection
