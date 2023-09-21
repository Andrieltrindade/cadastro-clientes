<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title> @yield('title')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilo_basico2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="collapse navbar-collapse" id="navbar">
        <a href="/" class="navbar-brand">
          <img src="img/logo2012.png" alt="Copa Extremo SUL">
        </a>
        <ul class="navbar-nav">
            <li class="menuLinkStock">
                <a href="{{ route('stock.home') }}" class="btn_home"><i class="fa fa-home"></i> Home</a>
            </li> 
            <li class="menuLinkStock">
                <a  href="{{ route('stock.entrada') }}" class="btn_in"><i class="fa fa-sign-in-alt"></i> Entrada</a>
            </li>
            <li  class="menuLinkStock">
                <a  href="{{ route('stock.saida') }}" class="btn_out"><i class="fa fa-sign-out-alt"></i> Saída</a>
            </li>
            <li  class="menuLinkStock">
                <a  href="{{ route('stock.devolucao') }}" class="btn_back"><i class="fa fa-box-open"></i> Devolução</a>
            </li>
            
            <li  class="menuLinkStock">
                <a href="{{ route('stock.expedicao') }}" class="btn_sender"><i class="fa fa-boxes"></i> Expedição</a>
            </li>
      </div>
    </nav>
</header>

<body>
    
    @yield('content')

</body>

</html>
 