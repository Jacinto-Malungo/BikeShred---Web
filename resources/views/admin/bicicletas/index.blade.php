@extends('admin.dashboard.layouts')
@section('title', 'BikeShared | Index')
@section('conteudo')

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">

                    @if(session('msg'))
                        <div class="col alert" style="background-color: rgb(0, 166, 6);" role="alert">
                            <p class="p-3" style="text-align: center; color: #fff;">{{session('msg')}}</p>
                        </div>
                    @endif

                    {{--
                        @if($errors->all())
                        <div class="col alert alert-dark bg-dark" role="alert">
                            @foreach ($errors->all() as $error )
                            <p class="p-3 text-danger" style="text-align: center;">{{$error}}</p>
                            @endforeach
                        </div>
                    @endif

                         --}}

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Listagem De Bicicletas</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Bicicletas</li>
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
                            <h4 class="text-blue h4">Bicicletas Registadas</h4>
                        </div>

                        <table class="table table-bordered">

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Imagem</th>
                                    <th scope="col">Modelo</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">...</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bicicletas as $bicicleta)
                                    <tr>

                                        <td>
                                            {{ $loop->index + 1}}
                                        </td>
                                        <td>{{ $bicicleta['image'] }}</td>
                                        <td>{{ $bicicleta['modelo'] }}</td>
                                        <td>{{ $bicicleta['status'] }}</td>
                                        <td style="display: flex;">

                                             {{--
                                                <a class="badge" style="background: blue; color: #fff; cursor: pointer; margin-right: 5px;">editar</a>
                                                --}}


                                            <form action="{{ route('destroyBicicleta', $bicicleta['id']) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="badge badge-danger" style="background: red; border: #fff;" type="submit">deletar</button>
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
    </div>
@endsection
