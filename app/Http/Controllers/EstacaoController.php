<?php

namespace App\Http\Controllers;
use App\Models\Estacao;
use App\Models\Doca;
use App\Models\Bicicleta;
use Illuminate\Http\Request;
use GoogleMaps\GoogleMaps;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator; //Importamos o Validator para validar os campos
use GuzzleHttp\Client;
use App\Models\User;

use Illuminate\Support\Facades\Auth;


class EstacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function mapa()
    {
        $bikeStations = Estacao::all();

        ///$bikeStations = Estacao::all();

        return view('cliente.mapa', compact('bikeStations'));
    }

    /**
     * Show the form for index a new resource.
     */
    public function index()
    {
        $client = new Client();
        $response = $client->get('http://localhost:8080/estacao1/getAllEstacao');
        $estacoes = json_decode($response->getBody(), true);
        return view('admin.estacoes.index', ['estacoes' => $estacoes]);
    }

    public function add()
    {
        $client = new Client();
        $response = $client->get('http://localhost:8080/estacao1/getAllEstacao');
        $estacoes = json_decode($response->getBody(), true);
        return view('admin.estacoes.create');
    }

    // Função para fazer a solicitação de registro de estação
    public function create(Request $request)
    {
        // Crie uma instância do cliente GuzzleHttp
        $client = new Client();

        try {
            // Faça uma solicitação POST para a rota de registro de estação
            $response = $client->post('http://localhost:8080/estacao1/postEstacao', [
                'json' => [
                    //'name' => $request->name,
                    'name' => filter_var($request->name, FILTER_SANITIZE_STRING),
                    //'latitude' => $request->latitude,
                    'latitude' => filter_var($request->latitude, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION),
                    //'longitude' => $request->longitude,
                    'longitude' => filter_var($request->longitude, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION),
                    //'capacidade' => $request->capacidade,
                    'capacidade' => filter_var($request->capacidade, FILTER_SANITIZE_NUMBER_INT),
                    //'premio_entrega' => $request->premio_entrega,
                    'premio_entrega' => filter_var($request->premio_entrega, FILTER_SANITIZE_NUMBER_INT),
                    //'binas_disponiveis' => $request->capacidade,
                    'binas_disponiveis' => filter_var($request->capacidade, FILTER_SANITIZE_NUMBER_INT),
                ],
            ]);

            // Verifica o código de status da resposta
            if ($response->getStatusCode() == 200) {
                // Registro de estação bem-sucedido
                $novaEstacao = json_decode($response->getBody(), true);
                
                return redirect(route('estacao'))->with('msg', 'Estação Salva Com Sucesso!');
            } else {
                return redirect(route('estacao'))->with('msg', 'Não Foi Possível Salvar Estação!!');
            }
        } catch (\Exception $e) {
            return redirect(route('estacao'))->with('msg', 'Erro Inesperado Ao Salvar Estação!!');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $client = new Client();
        $response = $client->delete('http://localhost:8080/estacao1/deleteEstacao/'.$id);
        $status = $response->getStatusCode();

        if ($status == 200) {
            return redirect(route('estacao'))->with('msg', 'Estação Deletada Com Sucesso!');
        } else {
            return redirect(route('estacao'))->with('msg', 'Não Foi Possível Deletar Estação!');
        }

    }
}
