@extends('admin.dashboard.layouts')
@section('title', 'BikeShared | Index')
@section('conteudo')


    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Listagem de Alugueres</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Alugueres</li>
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

                <!-- Input Validation Start -->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix pd-2">
                        <div class="pull-center">
                            <h4 class="text-blue h4">Alugueres Registadas</h4>
                        </div>

                        <table class="table table-bordered">

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Bicicleta</th>
                                    <th scope="col">Doca</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">...</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($aluguels as $aluguel)
                                    <tr>

                                        <td>
                                            {{ $loop->index + 1 }}
                                        </td>
                                        <td>{{ $aluguel->status }}</td>
                                        <td>{{ $aluguel->bicicleta_id }}</td>
                                        <td>{{ $aluguel->doca_id }}</td>
                                        <td>{{ $aluguel->email_usuario }}</td>
                                        <td>{{ $aluguel->data_criacao }}</td>
                                        <td style="display: flex;">
                                            <a class="badge"
                                                style="background: blue; color: #fff; cursor: pointer; margin-right: 5px;">editar</a>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>

                </div>


            </div>
        </div>
    </div>


@endsection
