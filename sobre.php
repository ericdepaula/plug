<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <title>Sobre Nós</title>

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
</head>
<body>

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
            <a class="nav-link" href="produtos.php">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Sobre Nós</a>
          </li>
             <form action="buscar.php" class="form-inline" method="GET">
            <input class="form-control mr-sm-2" type="text" name="buscar" placeholder="Pesquisar" required="Escreva primeiro o produto que deseja">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
            <li><a href="logout.php">Sair</a></li>
        </ul>
      </div>
    </nav>
</div>
<br>
      <!--DISPLAY SOBRE NÓS-->
  <div class="container-fluid">
    <div class="cold-sm-1 ">
      <h2 class="text-center">SOBRE NÓS</h2>
      <div class="thumbnail">
        <h4 class="text-alingh-center">Somos uma empresa comprometida em trazer os melhores acessórios e equipamentos eletrônicos para os nossos clientes. </p>
        <p> PLUGx, uma empresa criada em 2020, uma das melhores plataforma de vendas de acessórios e equipamentos eletrônicos, viemos para mudar sua vida.</p>
        Em caso de dúvidas entre em contato conosco via <a href="https://web.whatsapp.com/send?phone=5513981216330?text=Olá" target="_blank">WhatsApp</a>
      </div>
    </div>
  </div>
  <div class="col-md-3 text-align">
      <div class="  ">
        <a href="https://www.instagram.com/depaulin_eric/" target="_blank">
          <img src="images/ericredondo.png" alt="1" style="width:70%">
          
          <h5 class="text-alingh-center">Eric de Paula</h5>
          
        </a><p class="text-align">Desenvolvedor e Programador full-stack</p>
      </div>
    </div>  
</body>
</html>