<?php
  session_start();
  include_once('conect.php');
?> 
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <title>Plugx</title>
  
       <!--BOOTSTRAP/CSS -->
      <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="css/style.css">

     
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link rel="icon" href="images/favicon.png">
    
      <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/indi.js">

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

    <!--NOTIFICAÇÃO/ALERTA -->
    <div class="alert alert-info text-center" role="alert" id="alerta">
      Seja muito bem vindo a PLUGX, melhores produtos com os melhores preços você só encontra aqui!!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <!--BARRA DE NAVEGAÇÃO -->

  <nav id="nav" class="navbar navbar-expand-lg ">
        <span class="navbar-toggler-icon"></span>
          <?php echo "Welcome <br>".$_SESSION['UsuarioNome'];?>
      <div class="collapse navbar-collapse" id="nav">
        <ul class="nav nav-tabs justify-content-center">
          <li>
            <a class="nav-link active" href="#">Inicio</a>
          </li>
          <li>
            <a class="nav-link" href="produtos.php">Produtos</a>
          </li>
          <li>
            <a class="nav-link" href="sobre.php">Sobre Nós</a>
          </li>
            <form action="buscar.php" class="form-inline" method="GET">
            <input class="form-control mr-sm-2" type="text" name="buscar" placeholder="corda de alpinista" required="Escreva primeiro o produto que deseja">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="btpesquisar">Pesquisar</button>
            </form>
            <li class="nav-item"><a class="nav-link" href="logout.php">Sair</a></li>
        </ul>
      </div>
    </nav>


</head>
<body>

    <!--CARROSEL -->
<div class="container-fluid">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <div class="carousel-inner">

      <div class="item active">
        <img src="images/foto2.jpg"  style="width:100%;">
        <div class="carousel-caption">

        </div>
      </div>

      <div class="item">
        <img src="images/foto1.png"  style="width:100%;">
        <div class="carousel-caption">

        </div>
      </div>
    </div>


    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<br>

    <!--INCIO-->
<div class="container">
  <div class="post">
<?php  

  $sql = "SELECT * FROM produtos";
  $result = mysqli_query($con, $sql);


  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      echo '
      <div id="conteudo" class="col-md-4">
      <div class="thumbnail">
        <a href="https://wa.me/5513981216330?text=Olá%20me%20chamo%20'.$_SESSION['UsuarioNome'].'%20e%20tenho%20interesse%20neste%20produto:%20'. $row['nome_produto'].'%20" target="_blank">
          <img src="'. $row['caminho'] . $row['foto'] .'" style="width:55%">
          <div class="caption">
            <h4 class="text-center">'. $row['nome_produto'] .'</h4>
            <p class="text-center">' .$row['descricao']. '</p>
            <h5 class="text-center">R$' .$row['valor']. '</h5>
          </div>
        </a>
      <!--BOTÃO COMPRAR--> 
        <div class="text-center">
          <a href="https://wa.me/5513981216330?text=Olá%20me%20chamo%20'.$_SESSION['UsuarioNome'].'%20e%20tenho%20interesse%20neste%20produto:%20'. $row['nome_produto'].'%20" target="_blank">
          <input type="button" value="Comprar" id="but">
        </a>
      </div>
      </div>
      </div>';
    }
   ?>
   </div>   
</div>  

  </div>
</div>
<div class="container">
  <div class="row">
<!--CARD ENVIO-->
    <div class="col-md-3">
      <div class="rounded-circle">
        <a href="politicaenvio.php" target="_blank">
          <img src="images/envio.png" alt="3" style="width:100%">
          
          <h5 class="text-center">Política de Envios</h5>
          
        </a><p class="text-center">Envios para todo Brasil.</p>
      </div>
    </div>

<!--CARD METODO PAG-->
    <div class="col-md-3">
      <div class="rounded-circle">
        <a href="https://wa.me/5513981216330?text=Olá%20gostaria%20de%20saber%20sobre%20as%20formas%20de%20pagamento%20" target="_blank">
          <img src="images/card.png" alt="3" style="width:100%">
          
          <h5 class="text-center">PAGAMENTOS</h5>
          
        </a><p class="text-center">Parcele em até 6x sem juros no cartão.</p>
      </div>
    </div>

    <!--CARD ENVIO-->
    <div class="col-md-3">
      <div class="rounded-circle">
        <a href="https://www.instagram.com/plugx_conectado/" target="_blank">
          <img src="images/insta.png" alt="3" style="width:100%">
          
          <h5 class="text-center">REDES</h5>
          
        </a><p class="text-center">Siga-nos nas redes sociais para ter as novidade de primeira mão.</p>
      </div>
    </div>

    <!--CARD ENVIO-->
    <div class="col-md-3">
      <div class="rounded-circle">
        <a href="politicapriv.php" target="_blank">
          <img src="images/forte.png" alt="3" style="width:100%">
          
          <h5 class="text-center">POLITICA DE PRIVACIDADE</h5>
          
        </a><p class="text-center">Leia nossos termos de privacidade caso esteja em dúvida.</p>
      </div>
    </div>
    </div>
</div>
<div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</div>
</body>
</html>