<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;

use GuzzleHttp\Client;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function index(Request $request){

        $url = 'http://localhost:8080/estacao1/getAllUser';

        $client = new Client();

        try {
            $response = $client->get($url);

            $users = json_decode($response->getBody(), true);
            // Processar os dados retornados
            // Retornar a view com os dados para exibição
            return view('admin.users.index', ['users' => $users]);
        } catch (\Exception $e) {
            // Lidar com o erro
            return view('admin.users.index')->with('error', 'Erro ao obter os users');
        }

    }

    public function register(Request $request){
        return view('login.create');
    }

    public function login(Request $request){
        return view('login.logar');
    }


    public function create(Request $request){
        // Verificar se a senha já existe no banco de dados
        $emailExists = User::where('email', '=', $request->email)->exists();

        if ($emailExists) {
            // A senha já existe no banco de dados
            return redirect(route('register'))->with('msg', 'O email já está em uso!');
        }

        // Criar o usuário no Laravel
        // Fazer a solicitação HTTP para o web service
        $client = new Client();

        $response = $client->post('http://localhost:8080/estacao1/register', [
            'json' => [
                //filter_var($request->name, FILTER_SANITIZE_STRING),
                'pontos' => 10,
                //'is_admin' => $request->is_admin,
                'is_admin' => filter_var($request->is_admin, FILTER_SANITIZE_STRING),
                //'name' => $request->name,
                'name' => filter_var($request->name, FILTER_SANITIZE_STRING),
                //'email' => $request->email,
                'email' => filter_var($request->email, FILTER_SANITIZE_STRING),
                'password' => $request->password,
            ],
        ]);



        // Verificar a resposta do web service
        $statusCode = $response->getStatusCode();
        if ($statusCode == 200) {
            // Registro bem-sucedido no web service
            return redirect(route('login'))->with('msg', 'Utilizador Registado Com Sucesso!');
        } else {
            return redirect(route('register'))->with('msg', 'Não foi possível Registar Com Sucesso!');
            // return view("register");
        }
    }

    public function logar(Request $request)
    {
        $client = new Client();

        try {
            $response = $client->post('http://localhost:8080/estacao1/login', [
                'json' => [
                    'is_admin' => 0,
                    'email' => $request->email,
                    'password' => $request->password,
                ],
            ]);

            $body = $response->getBody()->getContents();
            $status = $response->getStatusCode();

            if ($status === 200) {
                Log::debug('Response Body:', [$body]); // Registrar o corpo da resposta no log

                if ($body == "Admin Logado com Sucesso") {
                    // Autenticar usuário localmente como admin
                    // Você pode usar qualquer usuário, já que o web service não retorna detalhes de usuário
                    $user = User::where('email', $request->email)->first(); // Encontre o usuário pelo email
                    Auth::login($user);
                    // Redirecionar para a área de admin
                    return redirect(route('admin.dashboard'))->with('msg', 'Admin logado com sucesso!');
                } else {
                    // Autenticar usuário normal localmente
                    $user = User::where('email', $request->email)->first(); // Encontre o usuário pelo email
                    Auth::login($user);
                    // Redirecionar para a área do cliente
                    return redirect(route('cliente.home'))->with('msg', 'Usuário logado com sucesso!');
                }
            }
        } catch (ClientException $e) {
            if ($e->getCode() === 401) {
                return redirect()->route('login')->with('error', 'Credenciais inválidas');
            }
        }
    }


    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('site.home'));
    }

    public function handle($request, Closure $next, $role)
{
    if (auth()->check() && auth()->user()->is_admin == $role) {
        return $next($request);
    }

    return redirect()->route('site.home'); // Redirecionar para a página inicial (ou outro lugar) caso não tenha permissão
}
}
