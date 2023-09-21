<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Microchip Partners - Principal</title>
    <link rel="website icon" type="png" href="img/logo2012.png">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilo_basico.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="collapse navbar-collapse" id="navbar">
        <a href="/" class="navbar-brand">
          <img src="img/logo2012.png" alt="Copa Extremo SUL">
        </a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <li><a href="{{ route('cliente.cadastro') }}">Clientes</a></li>
          </li>
          <li class="nav-item">
            <li><a href="{{ route('site.gerarpedidos') }}">Estoque/pedidos</a></li>
          </li>
          <li class="nav-item">
            <li><a href="/register">Cadastar</a></li>
          </li>
          <li class="nav-item">
            <a href="/login" class="nav-link">Entrar</a>
        </ul>
      </div>
    </nav>
</header>
<body>

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1></h1>
        </div>

        <div class="informacao-pagina">
            <p></p>
            <p></p>
        </div>
        
    </div>

    <footer>
        <p>Microchip Partners &copy; 2023</p>
    </footer>
    <script  type = "module"  src = "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" > </script> 
           
</body>

</html>
