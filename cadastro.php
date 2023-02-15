<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
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
<body>

<div>
	<form action="cadastrar.php" method="POST">
		<fieldset>
			<div class="box">
				<div class="site">
				<p><h1>PLUGx</h1></p>
			</div><!--site-->
			<p><h1><legend>Dados de Cadastro</legend></h1></p>
            <div class="txt">
			<h5><label for="txNome">Nome Completo </label><br></h5>
			<h5><input type="text" name="nome" id="txNome" maxlength="30" placeholder="Seu nome REAL!!" required/><br></br></h5>
		</div><!---txt--->
		<div class="txt">
				<h5><label for="txEmail">Email </label><br></h5>
				<h5><input type="email" name="email" id="txEmail" maxlength="25" placeholder="exemplo31@gmail.com" required/><br></br></h5>
			</div><!---txt--->
			<div class="txt">
					<h5><label for="txUsuario">Nome de Usuário</label><br></h5>
					<h5><input type="text" name="usuario" id="txUsuario" maxlength="25" placeholder="Seu nome de usuario" required/><br></br></h5>
				</div><!---txt--->
				<div class="txt">
						<h5><label for="txSenha">Senha </label><br></h5>
						<h5><input type="password" name="senha" id="txSenha" maxlength="25" placeholder="batatinhafrita" required/></br></h5>
					</div><!---txt--->
						<h6><input type="submit" value="Cadastrar"/></h6>
						<div class="link">
						<h6>Já tem cadastro ?<a href="index.php">Login</a></h6>
					</div><!---link--->
					</div><!---box--->
		</fieldset>

</form>
</div>
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
    .box{
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      position: absolute;
      width: 360px;
      height: 580px;
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
    .txt input{
      width: 100%;
      height: 30px;
      border: 1px solid #ccc;
      border-radius: 10px;
    }
    input[type="submit"]{
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
      color: black;
    }
  </style>
</body>
</html>