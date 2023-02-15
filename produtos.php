<?php
 session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Produtos</title>
  <meta charset="utf-8">
 
       <!--BOOTSTRAP/CSS -->
      <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="css/style.css">
     
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link rel="icon" href="images/favicon.png">
    
      <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!--Ajax-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

      <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

      <!--BOTÂO WHATS -->
    <div class="container">
    <a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=5513981216330" target="_blank">
        <i class="fa fa-whatsapp"></i>
    </a>
    </div>
    <!--BARRA DE NAVEGAÇÃO -->

<div class="container-fluid">
  <nav id="nav" class="navbar navbar-expand-lg ">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="nav">
        <ul class="nav nav-tabs justify-content-center">
          <li class="nav-item">
            <a class="nav-link" href="cliente.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sobre.php">Sobre Nós</a>
          </li>
            <form action="buscar.php" class="form-inline" method="GET">
            <input class="form-control mr-sm-2" type="text" name="buscar" placeholder="corda de alpinista" required="Escreva primeiro o produto que deseja">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
            <li><a href="logout.php">Sair</a></li>
        </ul>
      </div>
    </nav>
</div>

</head>
<body>
<div id="conteudo" class="container-fluid">
	<div class="row">
	<?php 

  require("conect.php");
	
	$sql = "SELECT * FROM produtos";
	$result = mysqli_query($con, $sql);


	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			echo '
			<div id="conteudo" class="col-sm-3">
			<div class="thumbnail">
        <a href="https://wa.me/5513981215205?text=Olá%20me%20chamo%20'.$_SESSION['UsuarioNome'].'%20e%20tenho%20interesse%20neste%20produto:%20'. $row['nome_produto'].'%20" target="_blank">
          <img src="'. $row['caminho'] . $row['foto'] .'" style="width:65%">
          <div class="caption">
            <h4 class="text-center">'. $row['nome_produto'] .'</h4>
            <p class="text-center">' .$row['descricao']. '</p>
            <h5 class="text-center">R$' .$row['valor']. '</h5>
          </div>
        </a>
      <!--BOTÃO COMPRAR--> 
        <div class="text-center">
        	<a href="https://wa.me/5513981215205?text=Olá%20me%20chamo%20'.$_SESSION['UsuarioNome'].'%20e%20tenho%20interesse%20neste%20produto:%20'. $row['nome_produto'].'%20" target="_blank">
        	<input type="button" value="Comprar" id="but">
    		</a>
    	</div>
      </div>
      </div>';
		}

	 ?>
	 </div>
</div>



</body>
</html>