@extends('site.layouts')
@section('title', 'BikeShared | Home')
@section('conteudo')

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">
                <div>
                    <h1><a href="{{ route('site.home') }}"><img src="assets/img/logo.png" alt="" class="img-fluid"
                                style="width:160px; height: 120px; padding-top: 12px;"></a></h1>
                </div>
            @include('includes.nav')            
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section class="hero-section" id="hero">

        <div class="wave">

            <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                        <path
                            d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z"
                            id="Path"></path>
                    </g>
                </g>
            </svg>

        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 hero-text-image">
                    <div class="row">
                        <div class="col-lg-8 text-center text-lg-start">
                            <h1 data-aos="fade-right">Conheça o BikeShared</h1>
                            <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Experiêcia de passeio adorável e
                                único</p>
                            <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500">
                                <a href="{{ route('register') }}" class="btn btn-outline-white">Regista-se aqui</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->


    <main id="main">

        <!-- ======= Home Section ======= -->

        <section class="section" id="funcionamento">

            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-5" data-aos="fade-up">
                        <h2 class="section-heading">Como funciona</h2>
                        <p>É muito fácil</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="step">
                            <img src="assets/img/img01.svg" alt="Image" class="img-fluid" data-aos="fade-up">
                            <span class="number">1. <h3>Certo</h3></span>
                            <p>Escolhe uma bicleta e use o app BikeShared para começar</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="step">
                            <img src="assets/img/img02.svg" alt="Image" class="img-fluid" data-aos="fade-right">
                            <span class="number">2. <h3>Vamos passear</h3></span>
                            <p>Escolhe uma bicleta e use o app BikeShared para começar</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="step">

                            <img src="assets/img/img03.svg" alt="Image" class="img-fluid" data-aos="fade-left">
                            <span class="number">3. <h3>Estacione</h3></span>
                            <p>Escolhe uma bicleta e use o app BikeShared para começar</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="precos">

            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-5" data-aos="fade-up">
                        <h2 class="section-heading">Planos e preços</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="step">
                            <h3>Passeio avulso</h3>
                            <img src="assets/img/veloz.webp" alt="Image" class="img-fluid" data-aos="fade-up">
                            <span class="number">1.</span>
                            <p>Kz 200.00/Passeio um passeio de até 30 minutos.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="step">
                            <h3>Passeio diário</h3>
                            <img src="assets/img/passeio.webp" alt="Image" class="img-fluid" data-aos="fade-right">
                            <span class="number">2.</span>
                            <p>Kz 200.00/Passeio um passeio de até 30 minutos.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="step">
                            <h3>Assinatura Bike</h3>
                            <img src="assets/img/bmx.webp" alt="Image" class="img-fluid" data-aos="fade-left">
                            <span class="number">3.</span>
                            <p>Kz 200.00/Passeio um passeio de até 30 minutos.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 me-auto">
                        <h1 class="mb-4">Bicicletas BikeShared. Tipo, tudo isso.</h1>
                        <p class="mb-4">Kilamba. Viana. Talatona. Mutamba. Cidade de Jersey. Hoboken. Temos estações de
                            bicicletas em todo o mapa, por isso é fácil chegar onde você está indo. E de volta.</p>
                    </div>
                    <div class="col-md-6" data-aos="fade-left">
                        <img src="assets/img/viagem.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>    
    </main><!-- End #main -->
@endsection
