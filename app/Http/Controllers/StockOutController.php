<?php

namespace App\Http\Controllers;
use App\Models\StockOut;

use Illuminate\Http\Request;

class StockOutController extends Controller
{
    public function Saida() {
        return view('stock.saida');
    } 

    public function Store(Request $request) {
        
       
    }
}

