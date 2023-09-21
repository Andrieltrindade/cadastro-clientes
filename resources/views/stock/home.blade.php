<html lang="pt-br">

<head>
    <link rel="stylesheet" href="css/estilo_basico2.css">
</head>
<article id="home">
    <h1><i class="fa fa-caret-right"></i> Home</h1>

    <section class="homeSearch">
        <p><i class="fa fa-search"></i> Pesquisar Nota Fiscal</p>

        <form action="{{ route('stock.home')}}" method="get">
            <input type="text" name="searchProduct" id="searchProduct">
            <button name="search" id="btnSearch"><i class="fa fa-search"></i> Pesquisar</button>
        </form>

        <h2><i class="fa fa-table"></i> Resultado da Busca:</h2>
        <table id="searchTable">
            <tr>
                <th>Nº OS</th>
                <th>Nota Fiscal</th>
                <th>Status</th>
                <th>Transportadora</th>
                <th>Recolhido</th>
                <th>Local</th>
            </tr>
            @foreach($stockins as $Stockin)
                <tr>
                    <td>{{ $stockins[0]->stockInInvoice }}</span></td>
                    <td> {{ $stockins[0]->stockInInvoice }}</td>
                    <td>{{ $stockins[0]->stockInInvoice }}</td>
                    <td>{{ $stockins[0]->stockInInvoice }}</td>
                    <td>{{ $stockins[0]->stockInInvoice }}</td>
                    <td> <span {{ $stockins[0]->stockInInvoice }}></span></td>
                </tr> 
            @endforeach

        </table>
    </section>
</article>

</html>
