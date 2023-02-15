<?php 
session_start();
include_once('conect.php');
include_once('adm/seguranca.php');
seguranca();

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro Produto</title>
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
</head>
<body>
	<div class="page-header">
	 <h2>Cadastro Produto</h2>
	</div>

	<div class="container-fluid">
		<form method="POST" action="proces_cadastro_prod.php" enctype="multipart/form-data">
			<fieldset>
				<label>Nome produto:</label><br>
				<input type="txt" name="prod_nome" placeholder="Banana nanica"><p></p>

				<label>Valor</label><br>
				<input type="number" name="prod_valor" placeholder="100"><p></p>

				<label>Descrição:</label><br>
				<textarea cols="40" rows="5" type="txt" name="prod_desc" placeholder="Pequena desc"></textarea>></p>

				<label>Token</label><br>
				<input type="txt" name="token" value="#" required><p></p>

				<label for="imagem">Imagem:</label><br>
		        <input type="file" name="prod_imagem"/><p></p>

       			<input type="submit" value="Cadastrar"/><p>
		    </fieldset>
		</form>
		<a href="administracao.php"><button type= "button" class="btn btn-xs btn-primary">Voltar</button></a>
	</div>

</body>
</html>
<style type="text/css">
	input, button, textarea{
		border-radius: 10px;
		border:1px solid black;
	}
</style>