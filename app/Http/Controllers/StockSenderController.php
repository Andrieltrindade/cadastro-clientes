<?php

namespace App\Http\Controllers;
use App\Models\StockSender;

use Illuminate\Http\Request;

class StockSenderController extends Controller
{
    public function Expedicao() {
        return view('stock.expedicao');
    }
}
