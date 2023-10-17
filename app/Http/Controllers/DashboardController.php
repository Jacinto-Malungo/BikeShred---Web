<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;
use App\Models\Estacao;
use App\Models\Bicicleta;
use App\Models\Doca;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bikeStations = Estacao::all();

        $bikes = Bicicleta::all();

        $docas = Doca::all();

        $users = User::all();

        return \view('admin.dashboard.dashboard', ['bikeStations' => $bikeStations, 'bikes' => $bikes, 'docas' => $docas, 'users' => $users]);
        //
         
        $client = new Client();
        $urlDoca = 'http://localhost:8080/getAllDoca';
        $urlUser = 'http://localhost:8080/getAllUser';
        $urlBina = 'http://localhost:8080/getAllBicleta';

        try {

            $responseDoca = $client->get($urlDoca);
            $responseUser = $client->get($urlUser);
            $responseBina = $client->get($urlBina);

            $docas = json_decode($responseDoca->getBody(), true);
            $users = json_decode($responseUser->getBody(), true);
            $binas = json_decode($responseBina->getBody(), true);

            return \view('admin.dashboard.dashboard',  \compact('docas', 'users', 'binas'));
        } catch (\Exception $e) {
            // Lidar com o erro
            return view('admin.docas.index')->with('error', 'Erro ao obter as docas');
        }
    }

}
