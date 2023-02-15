<?php

  session_start();
  include_once("adm/seguranca.php");
  include_once("conect.php");
  seguranca();

  $id = $_GET['id'];
  $sql = "SELECT * FROM produtos WHERE id = $id";
  $query = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Editar Produto</title>
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
		<h3>Editar produto</h3>
	</div>
	
<div class="container-fluid">
	<form method="POST" action="process_produto.php">
		<fieldset>
			<input type="hidden" name="id" value="<?php echo $row['id'] ?>">

			<label>Nome Produto:</label><br>
			<input type="text" name="Prod_nome" value="<?php echo $row['nome_produto'] ?>">
			</p>

      <label>Descrição:</label><br>
      <textarea cols="40" rows="5" type="txt" name="prod_desc" placeholder="<?php echo $row['descricao'] ?>"></textarea>></p>
      </p>

			<label>Valor do Produto:</label><br>
			<input type="number" name="Prod_valor" value="<?php echo $row['valor'] ?>">
      </p>

      <label>Foto:</label><br>
      <input type="text" name="Prod_foto" value="<?php echo $row['foto'] ?>">
      </p>

      <label>Token:</label><br>
      <input type="text" name="Prod_token" value="<?php echo $row['token'] ?>">
      </p>

			<button class="btn btn-md" type="submit">Salvar</button><p>
		</fieldset>
	</form>
  <a href="administracao.php"><button class="btn btn-xs">Voltar</button></a>
</div>
</body>
</html>