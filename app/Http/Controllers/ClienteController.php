<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteCadastro;

class ClienteController extends Controller
{

    public function Cadastro(Request $request) {
        return view('cliente.cadastro',);
    }
    
    public function Store(Request $request) {
        
        $site_cadastros = new SiteCadastro;

        $site_cadastros->cnpj_cpf = $request->cnpj_cpf;
        $site_cadastros->rg = $request->rg;
        $site_cadastros->nome = $request->nome;
        $site_cadastros->sexo = $request->sexo;
        $site_cadastros->email = $request->email;
        $site_cadastros->data_de_nascimento = $request->data_de_nascimento;
        $site_cadastros->telefone1 = $request->telefone1;
        $site_cadastros->telefone2 = $request->telefone2;
        $site_cadastros->cep = $request->cep;
        $site_cadastros->logradouro = $request->logradouro;
        $site_cadastros->numero = $request->numero;
        $site_cadastros->bairro = $request->bairro;
        $site_cadastros->cidade = $request->cidade;
        $site_cadastros->uf = $request->uf;

        $site_cadastros->save();
        return redirect('/');
    }
} 

