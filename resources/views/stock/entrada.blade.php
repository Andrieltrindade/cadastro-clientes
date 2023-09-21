@extends('layouts.stock')

@section('title', 'Microchip Partners - Entrada')

@section('content')

<div class="container_form">
    <h1 class="fa-caret-right">Operação de Entrada</h1>
    <form action="/stockin" method="POST">
        @csrf
        <div class="form_grupo">
            <label for="stockInProduct">Produto</label>
            <input type="text" name="stockInProduct" class="form_input" id="stockInProduct" placeholder="Produto"
                required>
        </div>

        <div class="form_grupo">
            <label for="stockInQuantity">Quantidade</label>
            <input type="text" name="stockInQuantity" class="form_input" id="stockInQuantity"
                placeholder="Quantidade" required>
        </div>

        <div class="form_grupo">
            <label for="stockInInvoice">Nota Fiscal de Entrada</label>
            <input type="text" name="stockInInvoice" class="form_input" id="stockInInvoice" placeholder="Nota fiscal"
                required>
        </div>

        <div class="form_grupo">
            <label for="stockInStockToday">Estoque Atual</label>
            <input type="text" name="stockInStockToday" class="form_input" id="stockInStockToday"
                placeholder="Estoque Atual" required>
        </div>

        <div class="form_grupo">
            <label for="stockInLocal">Localização</label>
            <input type="text" name="stockInLocal" class="form_input" id="stockInLocal" placeholder="Localização"
                required>
        </div>

        <div class="form_grupo">
            <label for="stockInLocalZone">Prateleira</label>
            <select name="stockInLocalZone" class="form_input" id="stockInLocalZone" placeholder="Prateleira">
                <option value="1">Prateleira 1</option>
                <option value="2">Prateleira 2</option>
                <option value="3">Prateleira 3</option>
            </select>
        </div>

        <div class="form_grupo">
            <label for="stockInLocalZoneNumber">Andar/Nº</label>
            <select name="stockInLocalZoneNumber" class="form_input" id="stockInLocalZoneNumber"placeholder="Andar/Nº">
                <option value="1">Andar 1</option>
                <option value="2">Andar 2</option>
                <option value="3">Andar 3</option>
            </select>
        </div>

        <div class="form_grupo">
            <label for="stockInProvider">Fornecedor</label>
            <input type="text" name="stockInProvider" class="form_input" id="stockInProvider"
                placeholder="Fornecedor" required>
        </div>
        <button type="submit">Salvar</button>
    </form>

@endsection