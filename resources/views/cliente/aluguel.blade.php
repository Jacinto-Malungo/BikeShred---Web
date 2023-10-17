@extends('cliente.layouts')
@section('title', 'BikeShared | Home')
@section('conteudo')


<section class="section" style="padding-top: -80px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h1>Listagem Dos Alugueres Efetuados</h1>
                <p>Onde quer que você precise ir há uma bicicleta esperando para leva-lo até la. Basta clicar na opção
                    mapa.</p>
            </div>
        </div>


        <!-- Input Validation Start -->
        <div class="pd-20 card-box mb-30">
                    <div class="clearfix pd-2">


                        <table class="table table-bordered">

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Bicicleta</th>
                                    <th scope="col">Doca</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Data</th>

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


                                    </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>

                </div>


    </div>
</section>

@endsection
