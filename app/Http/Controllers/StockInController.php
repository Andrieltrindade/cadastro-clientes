<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StockIn;

class StockInController extends Controller
{
    public function Entrada() {
        return view('stock.entrada');
    }

    public function Store(Request $request) {
        
        $stockin= new stockin;

        $stockin->stockInProduct = $request->stockInProduct;
        $stockin->stockInQuantity = $request->stockInQuantity;
        $stockin->stockInInvoice = $request->stockInInvoice;
        $stockin->stockInStockToday = $request->stockInStockToday;
        $stockin->stockInLocal = $request->stockInLocal;
        $stockin->stockInLocalZone = $request->stockInLocalZone;
        $stockin->stockInLocalZoneNumber = $request->stockInLocalZoneNumber;
        $stockin->stockInProvider = $request->stockInProvider;
    
       
        $stockin->save();
        return redirect('/');
    }
}
