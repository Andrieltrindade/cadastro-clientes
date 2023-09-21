<?php

namespace App\Http\Controllers;
use App\Models\StockBack;

use Illuminate\Http\Request;

class StockBackController extends Controller
{
    public function Devolucao() {
        return view('stock.devolucao');
    }
}
