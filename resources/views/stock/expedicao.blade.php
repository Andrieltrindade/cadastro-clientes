@extends('layouts.stock')

@section('title', 'Microchip Partners - Expedição')

@section('content')

<div class="container_form">
    <h1 class="fa fa-caret-right"> Operação de Expedição</h1>
    <form action="/stocksender" method="post">

        <div class="form_grupo">
            <label for="stockSenderInvoice">Nota Fiscal de Saída</label>
            <input type="text" name="stockSenderInvoice" class="form_input" id="stockSenderInvoice">
        </div>

        <div class="form_grupo">
            <label for="stockSenderOS">Ordem de Serviço</label>
            <input type="text" name="stockSenderOS" class="form_input" id="stockSenderOS">
        </div>

        <div class="form_grupo">

            <label for="stockSenderState">UF</label>
            <select name="stockSenderState" class="form_input" id="stockSenderState">

            </select>
        </div>

        <div class="form_grupo">

            <label for="stockSenderCity">Cidade</label>
            <!-- Pega o id durante a atualização de dados-->
            <input type="text" name="stockSenderCityId" class="form_input" id="stockSenderCityId" value="" style="display: none">

            <select name="stockSenderCity" class="form_input" id="stockSenderCity" readonly style="background-color: #ccc;">
                <option value="0">Selecione o UF</option>
            </select>
        </div>

        <div class="form_grupo">

            <label for="stockSenderTransp">Pedido Via</label>
            <select name="stockSenderTransp" class="form_input" id="stockSenderTransp">
                <option value="1">Correios/Pac</option>
                <option value="2">Correios/Sedex</option>
                <option value="3">Transportadora A</option>
                <option value="4">Transportadora B</option>
            </select>
        </div>

        <div class="form_grupo">

            <label for="stockSenderStatus">Status da OS</label>
            <select name="stockSenderStatus" class="form_input" id="stockSenderStatus">
                <option value="1">Aguardando</option>
                <option value="2">Devolvido</option>
                <option value="3">Despachado</option>
            </select>
        </div>

        <div class="form_grupo">

            <label for="stockSenderProd">Estado do Produto</label>
            <select name="stockSenderProd" class="form_input" id="stockSenderProd">
                <option value="1">Sem Avarias</option>
                <option value="2">Com Avarias</option>
                <option value="3">Defeito Visível</option>
                <option value="4">Defeito Oculto</option>
            </select>
        </div>

        <div class="form_grupo">
            <label for="stockSenderRegister">Data do Recolhimento</label>
            <input type="date" name="stockSenderRegister" class="form_input" id="stockSenderRegister">
        </div>

        <div class="form_grupo">
            <button name="btnStockSender" id="btnStockSender"><i class="fa fa-sync-alt"></i> Registrar Expedição</button>
            <a id='btnDelSender' title='Remover Este Registro' class='btn_delete' data-val="" data-id=""><i
                    class='fa fa-trash-alt'></i></a>
        </div>
        <div class="clear"></div>
    </form>
</div>

@endsection