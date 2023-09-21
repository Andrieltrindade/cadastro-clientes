<?php

use Illuminate\Support\Facades\Route;



    Route::prefix('/cliente')->group(function(){
        Route::get('/','App\Http\Controllers\clienteController@cadastro')->name('cliente.cadastro');
        Route::Post('/','App\Http\Controllers\clienteController@store');
      
    });
    
    
    Route::prefix('/products')->group(function(){
        Route::get('/','App\Http\Controllers\productsController@products')->name('site.products');
        Route::Post('/','App\Http\Controllers\productsController@store');
    });
    
    
    Route::prefix('/pedidos')->group(function(){
    
        Route::get('/','App\Http\Controllers\gerarpedidosController@pedidos')->name('site.gerarpedidos');
    
    });
    
    
    //Rotas Stock da aplicação
    Route::prefix('/stockin')->group(function(){
        Route::get('/','App\Http\Controllers\StockInController@entrada')->name('stock.entrada');
        Route::Post('/','App\Http\Controllers\StockInController@store');
    });
    
    Route::prefix('/home')->group(function(){
        Route::get('/','App\Http\Controllers\HomeController@home')->name('stock.home');
        Route::Post('/','App\Http\Controllers\HomeController@store');
    });
    
    Route::prefix('/stockout')->group(function(){
        Route::get('/','App\Http\Controllers\StockOutController@saida')->name('stock.saida');
        Route::Post('/','App\Http\Controllers\StockOutController@store');
    });
    
    Route::prefix('/stockback')->group(function(){
        Route::get('/','App\Http\Controllers\StockBackController@devolucao')->name('stock.devolucao');
        Route::Post('/','App\Http\Controllers\StockBackController@store');
    });
    
    Route::prefix('/stocksender')->group(function(){
        Route::get('/','App\Http\Controllers\StockSenderController@expedicao')->name('stock.expedicao');
        Route::Post('/','App\Http\Controllers\StockSenderController@store');
    });
    //Fim das rotas Stock
    
    
    Route::get('/','App\Http\Controllers\PrincipalController@principal')->name('site.index');
    
    Route::get('/consulta','App\Http\Controllers\ConsultaController@consulta')->name('site.consulta');
    
    Route::fallback(function (){
        echo 'A rota acessada não existe, <a href="'.route('site.index').'">clique aqui</a> para o menu inicial';
    });
    



//Middleware login
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
});