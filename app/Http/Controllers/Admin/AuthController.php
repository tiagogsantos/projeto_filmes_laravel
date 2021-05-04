<?php

namespace App\Http\Controllers\Admin;

use App\Films;
use App\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;

class AuthController extends Controller
{
    public function showLoginForm ()
    {
        //Usar o código abaixo quando der problema na senha
        /* $user = User::where('id', 1)->first();
         $user->password = 'teste';
         $user->save(); */

        // Se eu já estiver logado eu vou ser redirecionado caso eu mude a url
        if (Auth::check() === true ) {
            return redirect()->route('admin.home');
        }

        return view('admin.index');
    }

    public function home ()
    {
        // Retornando os films cadastrados
        $films = Films::orderBy('id', 'DESC')->limit(3)->get();
        // Retornando as series cadastradas
        $series = Series::orderBy('id', 'DESC')->limit(10)->get();

        return view('admin.dashboard', [
            'films' => $films,
            'series' => $series
        ]);
    }

    public function login (Request $request)
    {
        // Estou testando se o if abaixo encontra-se vazio
        if (in_array('', $request->only('email', 'password'))) {
            $json['message'] = $this->message->error('Oops, informe todos os dados para efetuar o login')->render();
            return response()->json($json);
        }

        // Estou validando se o e-mail é válido
        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $json['message'] = $this->message->warning("Ooops, o e-mail informado não é válido")->render();
            return response()->json($json);
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        // no if abaixo estou verificando se as credenciais são válidas, o attempt está validando as credenciais
        if (!Auth::attempt($credentials)) {
            $json['message'] = $this->message->warning("Ooops, usuário e senha não conferem")->render();
            return response()->json($json);
        }

        $this->autenticated($request->getClientIp());

        $json['redirect'] = route('admin.home');
        return response()->json($json);
    }

    public function logout ()
    {
        /** Deslogando o usuário do sistema admin */
        Auth::logout();
        return redirect()->route('admin.login');
    }

    private function autenticated(string $ip)
    {
        // filtrando pelo usuário logado
        $user = User::where('id', Auth::user()->id);
        $user->update([
            'last_login_at' => date('Y-m-d H:i:s'),
            'last_login_ip' => $ip
        ]);
    }
}
