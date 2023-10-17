<?php

namespace App\Http\Controllers;

use App\Models\Bicicleta;
use Illuminate\Http\Request;
use GuzzleHttp\Client;


class BicletaController extends Controller
{
    public function index()
    {
        $url = 'http://localhost:8080/estacao1/getAllBicicleta';

        $client = new Client();
        try {
            $response = $client->get($url);

            $bicicletas = json_decode($response->getBody(), true);
            // Processar os dados retornados
            // Retornar a view com os dados para exibição
            return view('admin.bicicletas.index', ['bicicletas' => $bicicletas]);
        } catch (\Exception $e) {
            // Lidar com o erro
            return view('admin.bicicletas.index')->with('error', 'Erro ao obter as bicicletas');
        }
    }

    public function create(Request $request)
    {

        //= filter_var($request->text_media_final, FILTER_SANITIZE_STRING);
        //$dados_academico->ano_conclusao    = filter_var($request->text_ano_conclusao, FILTER_SANITIZE_NUMBER_INT);

        $bicicleta = new Bicicleta;
        //$bicicleta->modelo = $request->modelo;
        $bicicleta->modelo = filter_var( $request->modelo, FILTER_SANITIZE_STRING);
        $bicicleta->status = "Close";

        //Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid())
        {
            $requstImage = $request->image;

            $extension = $requstImage->extension();

            $imageName = md5($requstImage-> getClientOriginalName().strtotime("now")).".".$extension;

            /*Aqui adiccionamos a imagem na pasta*/
            $requstImage->move(public_path('assets/img/added_bike'), $imageName);

            //Aqui adiccionamos a imagem no banco
            $bicicleta->image = $imageName;
        }

        $bicicleta->save();

        /* Redicionar o usuário para uma página, usando a flash Messages*/
        return redirect(route('bicicleta'))->with('msg', 'Bicicleta Criada Com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $client = new Client();
        $response = $client->delete('http://localhost:8080/estacao1/deleteBicicleta/'.$id);
        $status = $response->getStatusCode();

        if ($status == 200) {
            return redirect(route('bicicleta'))->with('msg', 'Bicicleta Deletada Com Sucesso!');
        } else {
            return redirect(route('bicicleta'))->with('msg', 'Não Foi Possível Deletar Bicicleta!');
        }
    }
}
