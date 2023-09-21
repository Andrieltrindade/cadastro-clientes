<?php

namespace App\Http\Controllers;
use App\Models\StockIn;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(Request $request) {

        $stockins = StockIn::all();

        return view('stock.home', compact('stockins'));
    }

 
}
