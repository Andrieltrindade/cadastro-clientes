<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function Consulta() {
        return view('site.consulta');
    }
}
