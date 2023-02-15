<?php

  session_start();
  include_once("adm/seguranca.php");
  include_once("conect.php");
  seguranca();

  $sql = "SELECT * FROM produtos";
  $query = mysqli_query($con, $sql);
 
?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <title>admin</title>
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
 <h2>Admin</h2><p>
  <a href="cadastrar_produto.php"><button type= "button" class="btn btn-xs btn-primary">Cadastrar Produto</button></a>
  <a href="logout.php"><button type= "button" class="btn btn-xs btn-danger">Sair</button></a>
</div>

<div class="container-fluid"> <h3>Produtos cadastrados</h3></div>

  <!-- exibindo produtos cadastrados -->
  <div class="container-fluid">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Nome Produto</th>
          <th scope="col">Descrição</th>
          <th scope="col">Imagem</th>
          <th scope="col">Valor</th>
          <th scope="col">Token</th>
        </tr>
      </thead>
      <tbody>
            <?php while ($row_produto = mysqli_fetch_assoc($query)) { ?>

          <tr>
            <td><?php echo $row_produto['id']; ?></td>
            <td><?php echo $row_produto['nome_produto']; ?></td>
            <td><?php echo $row_produto['descricao']; ?></td>
            <td><?php echo '<img src="'. $row_produto['caminho'] . $row_produto['foto'] . '" style="width:45px">'?></td>
            <td><?php echo 'R$ ' . $row_produto['valor']; ?></td>
            <td><?php echo $row_produto['token']; ?></td>
            <td>
              <?php echo "<a href='edita_produto.php?id=" . $row_produto['id'] . "'><button type='button' class='btn btn-xs btn-warning'>Editar</button></a>"?>
              <?php echo "<a href='excluir_produto.php?id=" . $row_produto['id'] . "'><button type='button' class='btn btn-xs btn-danger'>Excluir</button></a>"?>
            </td>
          </tr>
         <?php } ?>
      </tbody>
    </table>
  </div>  


</body>
</html>

