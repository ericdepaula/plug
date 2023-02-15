<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
</head>

</head>
<body>
<div class="container">
  <form action="validacao.php" method="post">
    <fieldset class="col-md-3 text text-align">
      <div class="box">
          <!---site = CSS--->
        	<div class="site"><h1>PLUGx</h1></div>
          <legend>Dados de Login</legend>
          	<div class="txt">
              <h5><label for="txUsuario">Usuário</label></h5>
              <h5><input type="text" name="usuario" id="txUsuario" maxlength="25" placeholder="Seu nome de usuario" required autofocus/></h5>
            </div>
            <!---txt = CSS--->
            <div class="txt">
            		<h5><label for="txSenha">Senha</label></h5>
            		<h5><input type="password" name="senha" id="txSenha" placeholder="batatinhafrita" required/></h5>
            </div>
                <button class="btn btn-md" type="submit">Acessar</button>
                
                <!--LINK cadastro-->
                <div class="link"><h6>Não tem cadastro?<a href="cadastro.php">Cadastre-se</a></h6></div>
                  <!--Redefinir senha-->
                 <div class="link"><h6><a href="#">Esqueci a senha<a></h6></div>

                <!---Mensagem--->
        				<p class="text-center text-danger">
        					<?php 
        					if(isset($_SESSION['loginerro'])){
        						echo $_SESSION['loginerro'];
        						unset ($_SESSION['loginerro']);
        					}?>
        				</p>
            		<p class="text-center text-success">
            			<?php if(isset($_SESSION['loginDeslogado'])){
            				echo $_SESSION['loginDeslogado'];
            				unset ($_SESSION['loginDeslogado']);
            			}?>
            		</p>
                
            
      </div>
    </fieldset>
  </form>
</div>
<!--box-->
<style type="text/css">
  *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      text-decoration: none;
    }
    html, body{
      height: 100%;
    }
    body{
     background-size:cover;
     background: linear-gradient(-45deg, #001d55,  #bf2c87);   
    }
    h1 {
      text-align: center;
      margin-bottom: 10px;

    }

    .container{
      padding-top: 35px;
      /*padding-left: auto;*/
      /*position:relative;*/
      padding-left: 380px;
    }

    .box{
      position: center;
      width: 400px;
      height: relative;
      background: rgba(255, 255, 255, 0.85);
      padding: 50px 40px;
      border-radius: 25px;
    }

    .site{
      color: #bf2c87;
    }

    .txt{
      margin-bottom: 5px;
    }

    .txt button{
      width: 90%;
      height: 20px;
      border: 1px solid #ccc;
    }

    .txt input{
      width: 100%;
      height: 30px;
      border: 1px solid #ccc;
      border-radius: 10px;
    }

    button[type="submit"]{
      display: block;
      text-decoration: none;
      text-decoration: uppercase;
      width: 100%;
      height: 40px;
      overflow: hidden;
      border: 2px solid #bf2c87;
      border-radius: 10px;
      position: relative;
      margin-bottom: 20px;
      font-size: 13px;
      font-weight: bold;     
    }

    .link {
      text-align: center; 
    }
</style>
</body>
</html>