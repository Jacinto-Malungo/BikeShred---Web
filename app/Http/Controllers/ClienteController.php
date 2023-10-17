<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\User;
use App\Models\Role;
use App\Models\Estacao;
use App\Models\Aluguel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bikeStations = Estacao::all();
        return \view('cliente.home', compact('bikeStations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function aluguelUser()
    {
        $aluguels = Aluguel::all();
        return view('cliente.aluguel', ['aluguels' => $aluguels]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            //Criação novo usuário
            $user = new User();

            //$user->name = $request->name;
            $user->name = filter_var($request->name, FILTER_SANITIZE_STRING);

            //$user->email = $request->email;
            $user->email = filter_var($request->email, FILTER_SANITIZE_STRING);

            $user->password = bcrypt($request->password); //Aqui vamos criptografar a senha

            $user->image = $request->image;
            //$user->id_role = $request->id_role;
            $user->id_role = filter_var($request->id_role, FILTER_SANITIZE_NUMBER_INT);
                //Image Upload
            if($request->hasFile('image') && $request->file('image')->isValid()) {
                $requestImage = $request->image;
                $extension = $requestImage->extension();
                $imageName = md5($requestImage-> getClientOriginalName(). strtotime("now")).".".$extension;
                /*Aqui adiccionamos a imagem na pasta*/
                $requestImage->move(public_path('images/usersUpload'), $imageName);
                //Aqui adiccionamos a imagem no banco
                $user->image = $imageName;
            }


            $user->save();//Salva-se os Dados do usuário que será associado ao secretario
            //= filter_var($request->text_media_final, FILTER_SANITIZE_STRING);
            $cliente = new Cliente();
            //$cliente->id_user = filter_var($user->id, FILTER_SANITIZE_NUMBER_INT);
            $cliente->id_user = $user->id;
            //$cliente->saldo = $request->saldo;
            $cliente->saldo = filter_var($request->saldo, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            //$cliente->username = filter_var($user->name,  FILTER_SANITIZE_STRING);
            $cliente->username = $user->name;
            //$cliente->genero = $request->genero;
            $cliente->genero = filter_var($request->genero, FILTER_SANITIZE_STRING);
            $cliente->save();//Dados salvos no BD
            DB::commit();
            return redirect(route('login.create'))->with('msg', 'Parabéns a sua conta foi criada com sucesso!');

        } catch (\Exception $th) {
            //throw $th;
            DB::rollBack();
            return redirect(route('login.create'))->with('error', 'Não Foi Possível Salvar Sua Conta!!');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
