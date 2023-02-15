<?php 

if (!isset($_POST['nome'])) {
	header("location: cadastro.php");exit;
}

require("conect.php");
date_default_timezone_set('America/Sao_Paulo');
//PUXANDO OS DADOS INSERIDOS
$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = sha1($_POST['senha']);
$email = $_POST['email'];
$data = date('Y/m/d \à\s H:i:s');

//echo "$nome<p> $email<p> $usuario<p> $senha<p> $data";

$sql = "INSERT INTO `usuarios` (`nome`,`usuario`,`senha`,`email`, `cadastro`) VALUES ('$nome','$usuario','$senha','$email','$data')";

$result = mysqli_query($con, $sql);
if(mysqli_affected_rows($con) != 0){
                echo '
                    <META HTTP-EQUIV=REFRESH CONTENT = "0;URL=http://localhost:8082/plug/index.php">
                    <script type="text/javascript">
                        alert("Usuario cadastrado com Sucesso.");
                    </script>
 
                ';    
            }else{
                echo '
                    <META HTTP-EQUIV=REFRESH CONTENT = "0;URL=http://localhost:8082/plug/cadastro.php">
                    <script type="text/javascript">
                        alert("O Usuario não foi cadastrado com Sucesso.");
                    </script>
                ';    
            }
 ?>