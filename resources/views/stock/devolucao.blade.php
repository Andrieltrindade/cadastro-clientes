@extends('layouts.stock')

@section('title', 'Microchip Partners - Devolução')

@section('content')

<div class="container_form">

    <h1 class="fa fa-caret-right"></i> Operação de Devolução</h1>
    <form action="/stockback" method="post">
        @csrf
        <div class="form_grupo">
            <!-- Nota Fiscal de entrada: Quando o produto é devolvido e retorna para o almox.-->
            <!-- Nota Fiscal de saída: Quando produto é devolvido e retornará ao cliente-->
            <label for="stockBackInvoice">Nota Fiscal</label>
            <input type="text" name="stockBackInvoice" class="form_input" id="stockBackInvoice">
        </div>

        <div class="form_grupo">
            <label for="stockBackProduct">Produto</label>
            <?php
            ?>
        </div>

        <div class="form_grupo">
            <label for="stockBackQuantity">Quantidade</label>
            <input type="text" name="stockBackQuantity" class="form_input" id="stockBackQuantity" value="1">
        </div>

        <div class="form_grupo">
            <label for="stockBackStockToday">Estoque Atual</label>
            <input type="text" name="stockBackStockToday" class="form_input" id="stockBackStockToday" value="" readonly>
        </div>

        <div class="form_grupo">

            <label for="stockBackLocal">Tipo de Devolução</label>
            <select name="stockBackLocal" class="form_input" id="stockBackLocal">
                <option value="1">Produto Defeituoso</option>
                <option value="2">Arrependimento</option>
                <option value="3">Produto Errado</option>
            </select>
        </div>

        <div class="form_grupo">

            <label for="stockBackProd">Estado do Produto</label>
            <select name="stockBackProd" class="form_input" id="stockBackProd">
                <option value="1">Sem Avarias</option>
                <option value="2">Com Avarias</option>
                <option value="3">Defeito Visível</option>
                <option value="4">Defeito Oculto</option>
            </select>
        </div>

        <div class="form_grupo">

            <label for="stockBackClient">Cliente</label>

            <select name="stockBackClient" id="stockBackClient">

            </select>
        </div>

        <div class="form_grupo">
            <label for="stockBackRegister">Data de Devolução</label>
            <input type="date" name="stockBackRegister" class="form_input" id="stockBackRegister" required>
        </div>

        <div class="form_grupo">
            <button name="btnStockBack" id="btnStockBack"><i class="fa fa-sync-alt"></i> Registrar Devolução</button>
            <a id='btnDelBack' title='Remover Este Registro' class='class="form_input"' data-val="" data-id=""><i
                    class='fa fa-trash-alt'></i></a>
        </div>
        <div class="clear"></div>
    </form>
</div>

@endsection
