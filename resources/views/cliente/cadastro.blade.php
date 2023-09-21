<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Microchip Partners - Clientes</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilo_basico.css">
    <script src="resources/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
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
    
    <div class="container_form">
        <h1>Dados do cliente</h1>
        <form action="/cliente" method="POST">
            @csrf 
            <div class="form_grupo">
                <label for="cnpj_cpf" class="form_label">Cnpj/Cpf</label>
                <input type="text" name="cnpj_cpf" class="form_input" id="cnpj_cpf" placeholder="Cnpj/Cpf" required>
            </div>

            <div class="form_grupo">
                <label for="rg" class="form_label">Rg</label>
                <input type="text" name="rg" class="form_input" id="rg" placeholder="Rg" required>
            </div>

            
            <div class="form_grupo">
                <label for="nome" class="form_label">Nome</label>
                <input type="nome" name="nome" class="form_input" id="nome" placeholder="Nome" required>
            </div>
            
        
            <div class="form_grupo">
                <label for="sexo" class="form_label">Sexo</label>
                <input type="text" name="sexo" class="form_input" id="sexo" placeholder="Sexo" required>
            </div>

            <div class="form_grupo">
                <label for="email" class="form_label">Email</label>
                <input type="text" name="email" class="form_input" id="email" placeholder="Email" required>
            </div>


            <div class="form_grupo">
                <label for="data_de_nascimento" class="form_label">Data de Nascimento</label>
                <input type="date" name="data_de_nascimento" class="form_input" id="data_de_nascimento" placeholder="Data de Nascimento" required>
            </div>        
            <div class="form_grupo">
                
            <div class="form_grupo">
                <label for="telefone1" class="form_label">Telefone 1</label>
                <input type="text" name="telefone1" class="form_input" id="telefone1" placeholder="Telefone" required>
            </div>

            <div class="form_grupo">
                <label for="telefone2" class="form_label">Telefone 2</label>
                <input type="text" name="telefone2" class="form_input" id="telefone2" placeholder="Telefone" required>
            </div>
        
            
            
            <h1>Endereço</h1>
            
            <div class="form_grupo">
                <label for="cep" class="form_label">Cep</label>
                <input type="text" name="cep" class="form_input" id="cep" placeholder="Cep" required>
            </div>

            <div class="form_grupo">
                <label for="logradouro" class="form_label">Logradouro</label>
                <input type="text" name="logradouro" class="form_input" id="logradouro" placeholder="Logradouro" required>
            </div>

            <div class="form_grupo">
                <label for="numero" class="form_label">Número</label>
                <input type="text" name="numero" class="form_input" id="numero" placeholder="Número" required>
            </div>

            <div class="form_grupo">
                <label for="bairro" class="form_label">Bairro</label>
                <input type="text" name="bairro" class="form_input" id="bairro" placeholder="Bairro" required>
            </div>
            
            <div class="form_grupo">
                @livewire('cliente-cadastro')
            </div>

            <button type="submit">Salvar</button>
        
        </form>
        
    </div>
    
</body>
</html>

    
    
