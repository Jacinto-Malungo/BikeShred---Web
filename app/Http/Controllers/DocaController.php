<?php
namespace App\Http\Controllers;
use App\Models\Doca;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class DocaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $url = 'http://localhost:8080/estacao1/getAllDoca';

        $client = new Client();
        
        try {
            $response = $client->get($url);

            $docas = json_decode($response->getBody(), true);
            // Processar os dados retornados
            // Retornar a view com os dados para exibição
            return view('admin.docas.index', ['docas' => $docas]);
        } catch (\Exception $e) {
            // Lidar com o erro
            return view('admin.docas.index')->with('error', 'Erro ao obter as docas');
        }

    }

    public function indexUpdateDoca($id)
    {
        $doca = Doca::findOrFail($id);

        return \view('admin.docas.indexUpdate', ['doca' => $doca]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(Request $request){

        Doca::findOrFail($request->id)->update($request->all());

        return redirect(route('doca'))->with('msg', 'Doca Atualizada Com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $client = new Client();
        $response = $client->delete('http://localhost:8080/estacao1/deleteDoca/'.$id);
        $status = $response->getStatusCode();
        if ($status == 200) {
            return redirect(route('doca'))->with('msg', 'Doca Deletada Com Sucesso!');
        } else {
            return redirect(route('doca'))->with('msg', 'Não Foi Possível Deletar Doca!');
        }
    }
}
