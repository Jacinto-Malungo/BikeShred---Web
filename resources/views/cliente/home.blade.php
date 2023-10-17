@extends('cliente.layouts')
@section('title', 'BikeShared | Clinte')
@section('conteudo')

<section class="section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4 me-auto">
          <h2 class="mb-4">Explore Luanda, veja os pontos túristicos.</h2>
          <p class="mb-4">Kilamba. Viana. Talatona. Mutamba e muitos outras localidades espelhadas em toda Luanda. Temos estações de
            bicicletas em todo o mapa, por isso é fácil chegar onde você está indo. E de volta.</p>
          <p><a href="#" class="btn btn-primary">Baixe o aplicativo</a></p>
        </div>
        <div class="col-md-6" data-aos="fade-left">
            <img src="{{ asset('assets/img/luanda.jpeg') }}" alt="Image" class="img-fluid">
        </div>
      </div>
    </div>
  </section>


@endsection
