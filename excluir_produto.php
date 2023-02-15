<meta charset="utf-8">
<?php

	session_start();
	include_once('conect.php');
	include_once('adm/seguranca.php');
	seguranca();


	$id = $_GET['id'];
	$sql = "DELETE FROM produtos WHERE id='$id' ";
	$row = mysqli_query($con, $sql);

	if (mysqli_affected_rows($con)) {
	echo '
                    <META HTTP-EQUIV=REFRESH CONTENT = "0;URL=http://localhost:8082/plug/administracao.php">
                    <script type="text/javascript">
                        alert("Produto excluido com Sucesso.");
                    </script>
 
                '; 
}else{
	echo '
                    <META HTTP-EQUIV=REFRESH CONTENT = "0;URL=http://localhost:8082/plug/administracao.php">
                    <script type="text/javascript">
                        alert("Produto não excluido.");
                    </script>
 
                '; 
}
?>