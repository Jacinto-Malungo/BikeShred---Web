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

                {{--  @if($errors->all())
                    <div class="col alert alert-dark bg-dark" role="alert">
                        @foreach ($errors->all() as $error )
                        <p class="p-3 text-danger" style="text-align: center;">{{$error}}</p>
                        @endforeach
                    </div>
                @endif --}}
               

                <div class="row">

                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Atualização de Doca</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">Doca</li>
                                <li class="breadcrumb-item active" aria-current="page">Update Doca</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-primary" role="button" style="color: #fff">
                                Junho 2023
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Input Validation Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix pd-2">
                    <div class="pull-center">
                        <h4 class="text-blue h4">Atualizar Doca</h4>
                    </div>

                </div>

                <form class="row g-3" action="{{ route('updateDoca', 1) }}" method="POST">

                    @csrf
                    @method('PUT')

                    <div class="col-md-12 form-group">
                        <label for="title">Estado da Doca:</label>
                        <input type="text" class="form-control" id="status" name="status" value="{{$doca->status}}">
                    </div>

                    <div class="col-md-12 form-group">
                        <input type="submit" class="btn btn-primary col-md-12" value="Atualizar Doca">
                    </div>
                </form>

            </div>


        </div>
    </div>
</div>

@endsection
