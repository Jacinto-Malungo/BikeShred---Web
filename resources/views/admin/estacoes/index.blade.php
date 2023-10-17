@extends('admin.dashboard.layouts')
@section('title', 'BikeShared | Index')
@section('conteudo')


    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    @include('includes.mensagens')
                    <div class="row">

                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Listagem De Estações</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Estações</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary" href="{{ route('admin.addEstacao') }}" role="button"
                                    style="color: #fff">
                                    +Add
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Input Validation Start -->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix pd-2">
                        <div class="pull-center">
                            <h4 class="text-blue h4">Estações Registadas</h4>
                        </div>

                        <table class="table table-bordered">

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Capacidade</th>
                                    <th scope="col">Latitude</th>
                                    <th scope="col">Longitude</th>
                                    <th scope="col">...</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($estacoes as $estacao)
                                    <tr>
                                        {{-- <th scope="row">1</th> --}}
                                        <td>
                                            {{ $loop->index + 1 }}
                                        </td>
                                        <td>{{ $estacao['name'] }}</td>
                                        <td>{{ $estacao['capacidade'] }}</td>
                                        <td>{{ $estacao['latitude'] }}</td>
                                        <td>{{ $estacao['longitude'] }}</td>
                                        <td style="display: flex;">

                                            {{--

                                                     <a class="badge" style="background: blue; color: #fff; cursor: pointer; margin-right: 5px;">editar</a>

                                                --}}

                                            <form action="{{ route('destroyEstacao', $estacao['id']) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                {{-- <a class="badge" style="background: red; color: #fff; cursor: pointer;">deletar</a> --}}
                                                <button class="badge badge-danger" style="background: red; border: #fff;"
                                                    type="submit">deletar</button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>

                        </table>


                    </div>







                </div>
            </div>
        </div>


    @endsection
