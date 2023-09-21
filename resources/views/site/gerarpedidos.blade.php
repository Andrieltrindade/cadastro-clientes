<html lang="pt-br">
	<head>
		<meta charset="utf8">
		<title>Controle de Estoque</title>
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link rel="stylesheet" href="css/estilo_basico2.css">
	</head>
	
	<body>
		<div class="result"></div>
		<main>
           <div class="topo">
                <div class="logo">
                    <img src="img/logo2012.png" alt="some text" width=150 height=60>
                </div>
                
                <ul class="menuLink">
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
                </ul>
            
            
            </div>
        
            </div>
			
		</main>
		

	</body>
</html>
