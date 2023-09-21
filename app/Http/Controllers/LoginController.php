<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
  public function Index (Request $request) {

    $erro = '';
    
    if($request->get('erro') == 1) {
        $erro = 'Usuario ou senha nao existem';
    }


    return view('site.login', ['titulo' => 'login', 'erro' => $erro]);
  }

  public function autenticar(Request $request) {
    
        //Regras de validação
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];
        
        //As mensagens de feedback de validação
        $feedback = [
            'usuario.email' => 'O campo E-mail é obrigatório',
            'usuario.senha' => 'O campo Senha é obrigatório'
        ];

        //Se nao passar o Validade
        $request->validate($regras, $feedback);

        //Recuperamos os parametros dos formularios 
        $email = $request->get('usuario');
        $password = $request->get('senha');

        echo "Usuário: $email | Senha: $password";
        echo '<br>';

       

        //Iniciar o Model

        $user = new User();

        $usuario = $user->where('email', $email)
                        ->where('password', $password)
                        ->get()
                        ->first();
        
        if(isset($usuario->name)) {
            echo 'Usuario existe';
        } else {
            return redirect()->route('site.login', ['erro' => 1]);
        }


        echo '<pre>';
        print_r($usuario);
        echo '</pre>';

  }

}
