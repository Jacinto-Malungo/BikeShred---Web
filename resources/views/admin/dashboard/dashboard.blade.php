@extends('admin.dashboard.layouts')
@section('title', 'BikeShared | Admim')
@section('conteudo')

    <link rel="stylesheet" type="text/css" href="{{ asset('dash/vendors/styles/core.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/vendors/styles/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/src/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dash/vendors/styles/style.css') }}">


    <div class="main-container">
        <div class="xs-pd-20-10 pd-ltr-20">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Bem vindo de volta <span
                                    style="font-weight: 800; color: blue; font-size: 22px;">ADMIN</span></h4>
                            {{-- <span class="weight-500 font-20 text-blue">{{auth()->user()->name}}</span> --}}
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-primary" role="button" style="color: #fff">
                                Julho 2023
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix progress-box">

                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="card-box pd-30 height-100-p">
                        <div class="progress-box text-center">
                            <input type="text" class="knob dial1" value="80" data-width="120" data-height="120"
                                data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#1b00ff"
                                data-angleOffset="160" readonly>
                            <h5 class="text-blue padding-top-10 h5">Estações</h5>
                            <span class="d-block">{{ $bikeStations->count() }}%<i
                                    class="fa fa-line-chart text-blue"></i></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="card-box pd-30 height-100-p">
                        <div class="progress-box text-center">
                            <input type="text" class="knob dial2" value="70" data-width="120" data-height="120"
                                data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#00e091"
                                data-angleOffset="180" readonly>
                            <h5 class="text-light-green padding-top-10 h5">Bicicletas</h5>

                            <span class="d-block">{{ $bikes->count() }}%<i
                                    class="fa text-light-green fa-line-chart"></i></span>

                            <span class="d-block">{{ $binas->count() }}<i class="fa text-light-green fa-line-chart"></i></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="card-box pd-30 height-100-p">
                        <div class="progress-box text-center">
                            <input type="text" class="knob dial3" value="90" data-width="120" data-height="120"
                                data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#f56767"
                                data-angleOffset="120" readonly>
                            <h5 class="text-light-orange padding-top-10 h5">Docas</h5>
                            <span class="d-block">{{ $docas->count() }}%<i
                                    class="fa text-light-orange fa-line-chart"></i></span>

                            <span class="d-block">{{ $docas->count() }}<i class="fa text-light-orange fa-line-chart"></i></span>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="card-box pd-30 height-100-p">
                        <div class="progress-box text-center">
                            <input type="text" class="knob dial4" value="65" data-width="120" data-height="120"
                                data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#a683eb"
                                data-angleOffset="180" readonly>
                            <h5 class="text-light-purple padding-top-10 h5">Utilizadores</h5>

                            <span class="d-block">{{ $users->count() }}%<i
                                    class="fa text-light-purple fa-line-chart"></i></span>

                            <span class="d-block">{{ $users->count() }}<i class="fa text-light-purple fa-line-chart"></i></span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    {{-- <script src="{{ asset('dash/src/plugins/jQuery-Knob-master/jquery.knob.min.js') }}"></script>
<script src="{{ asset('dash/src/plugins/highcharts-6.0.7/code/highcharts.js') }}"></script>
<script src="{{ asset('dash/src/plugins/highcharts-6.0.7/code/highcharts-more.js') }}"></script>
<script src="{{ asset('dash/src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
<script src="{{ asset('dash/src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('dash/vendors/scripts/dashboard2.js') }}"></script> --}}

@endsection
