@extends('cliente.layouts')
@section('title', 'BikeShared | Home')
@section('conteudo')


<section class="section" style="padding-top: -80px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h1>Conheça vários pontos de Luanda com BikeShared</h1>
                <p>Onde quer que você precise ir há uma bicleta esperando para leva-lo até la. Basta verificar o
                    mapa abaixo.</p>
            </div>
        </div>
        @include('includes.mapa')
    </div>
</section>

@endsection
