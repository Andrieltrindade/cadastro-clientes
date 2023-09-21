@extends('layouts.stock')

@section('title', 'Microchip Partners -  Saída')

@section('content')

<div class="container_form">

    <h1 class="fa-caret-right"> Operação de Saída</h1>
    <form method="post" id="formStockOut">

        <div class="form_grupo">
            <label for="stockOutProduct">Produto</label>
            <select name="stockOutClient" class="form_input" id="stockOutClient">
                <option value="1">Ao Cliente</option>
                <option value="2">Devolver Fornecedor</option>
                <option value="3">Vencida/Avaria</option>
            </select>
        </div>

        <div class="form_grupo">
            <label for="stockOutInvoice">Nota Fiscal de Saída</label>
            <input type="text" name="stockOutInvoice" class="form_input" id="stockOutInvoice" required>
        </div>

        <div class="form_grupo">
            <label for="stockOutQuantity">Quantidade</label>
            <input type="text" name="stockOutQuantity" class="form_input" id="stockOutQuantity" value="1">
        </div>

        <div class="form_grupo">
            <label for="stockOutStockToday">Estoque Atual</label>
            <input type="text" name="stockOutStockToday" id="stockOutStockToday" value=""
                placeholder="selecione um produto" readonly style="background-color: #ccc">
        </div>

        <div class="form_grupo">
            <label for="stockOutLocal">Localização</label>
            <input type="text" name="stockOutLocal" class="form_input" id="stockOutLocal" value=""
                placeholder="selecione um produto" readonly style="background-color: #ccc">
        </div>

        <div class="form_grupo">
            <label for="stockOutLocalZone">Prateleira</label>
            <input type="text" name="stockOutLocalZone" class="form_input" id="stockOutLocalZone" value=""
                placeholder="selecione um produto" readonly style="background-color: #ccc">
        </div>

        <div class="form_grupo">
            <label for="stockOutLocalZoneNumber">Andar/Nº</label>
            <input type="text" name="stockOutLocalZoneNumber" class="form_input" id="stockOutLocalZoneNumber"
                value="" placeholder="selecione um produto" readonly style="background-color: #ccc">
        </div>

        <div class="form_grupo">
            <label for="stockOutClient">Tipo de Operação</label>
            <select name="stockOutClient" class="form_input" id="stockOutClient">
                <option value="1">Ao Cliente</option>
                <option value="2">Devolver Fornecedor</option>
                <option value="3">Vencida/Avaria</option>
            </select>
        </div>

        <div class="form_grupo">
            <button name="btnStockOut" id="btnStockOut"><i class="fa fa-sync-alt"></i> Atualizar Estoque</button>
            <a id='btnDelStockOut' title='Remover Este Registro' class='btn_delete' data-val="" data-id=""><i
                    class='fa fa-trash-alt'></i></a>
        </div>
        <div class="clear"></div>
    </form>
</div>

@endsection