<meta charset="utf-8">
<?php 
	session_start();
	include_once('conect.php');
	include_once('adm/seguranca.php');
	seguranca();

$id = $_POST['id'];
$Prod_nome = filter_input(INPUT_POST, 'Prod_nome' , FILTER_SANITIZE_STRING); 
$Prod_desc = filter_input(INPUT_POST, 'Prod_desc' , FILTER_SANITIZE_STRING);
$Prod_valor = filter_input(INPUT_POST, 'Prod_valor' , FILTER_SANITIZE_STRING);
$Prod_foto = filter_input(INPUT_POST, 'Prod_foto', FILTER_SANITIZE_STRING);
$Prod_token = filter_input(INPUT_POST, 'Prod_token' , FILTER_SANITIZE_STRING);

//echo "nome:" . $Prod_nome. "<br>";
//echo "valor:" . $Prod_valor;

$sql = "UPDATE produtos SET nome_produto='$Prod_nome', descricao='$Prod_desc', valor='$Prod_valor', foto='$Prod_foto', token='$Prod_token' WHERE id='$id' ";
$row = mysqli_query($con, $sql);

// echo $sql;

if (mysqli_affected_rows($con)) {
	echo '
                    <META HTTP-EQUIV=REFRESH CONTENT = "0;URL=http://localhost:8082/plug/administracao.php">
                    <script type="text/javascript">
                        alert("Produto editado com Sucesso.");
                    </script>
 
                '; 
}else{
	echo '
                    <META HTTP-EQUIV=REFRESH CONTENT = "0;URL=http://localhost:8082/plug/edita_produto.php">
                    <script type="text/javascript">
                        alert("Produto não editado.");
                    </script>
 
                '; 
}
	
?>