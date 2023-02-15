<meta charset="utf-8">
<?php  
	session_start();
	include_once('conect.php');
	include_once('adm/seguranca.php');
	seguranca();

	$nome = $_POST['prod_nome'];
	$valor = $_POST['prod_valor'];
	$desc = $_POST['prod_desc'];
	$token = $_POST["token"];
	$img = $_FILES['prod_imagem']['name'];

// echo $nome .'<p>', $valor .'<p>', $desc .'<p>', $token .'<p>', $img;

	// Pasta onde irá salvar as fts.
	$_UP['pasta'] = 'images/';

	// Tamanho máximo do arquivo
	$_UP['tamanho'] = 1024*1024*100;// 5mb

	// Formato permitido
	$_UP['extensao'] = array('png', 'jpg', 'jpeg');

	// 
	$_UP['rename'] = false;

		// arrays com todos os erros de upload
		$_UP['erros'] [0] = 'Não houve erro.';
		$_UP['erros'] [1] = 'O arquivo no upload é maior que o limite do PHP.';
		$_UP['erros'] [2] = 'O arquivo excede o tamanho expecificado do HTML.';//5mb
		$_UP['erros'] [3] = 'O upload foi feito parcialmente.';
		$_UP['erros'] [4] = 'Não foi feito o upload do arquivo.';

		// Verifica se ouve algum erro 
		if ($_FILES['prod_imagem']['error'] != 0) {
			die("Não foi possivel fazer o upload, erro: <br/>" . $_UP['erros'][$_FILES['prod_imagem']['error']]);
			exit;
		}

		$extensao = strtolower(end(explode('.', $_FILES['prod_imagem']['name'])));
		if (array_search($extensao, $_UP['extensao']) === false) {
			echo '
                    <META HTTP-EQUIV=REFRESH CONTENT = "0;URL=http://localhost:8082/plug/cadastrar_produto.php">
                    <script type="text/javascript">
                        alert("Imagem não cadastrada, extensão inválida.");
                    </script>
 
                ';
		}
			else if ($_UP['tamanho'] < $_FILES['prod_imagem']['size']) {
				echo '
                    <META HTTP-EQUIV=REFRESH CONTENT = "0;URL=http://localhost:8082/plug/cadastrar_produto.php">
                    <script type="text/javascript">
                        alert("Imagem muito grande");
                    </script>
 
                ';
			}

			else{
				if ($_UP['rename'] == true ) {
					$nome_final = time() . '.jpg';
				}else{
					$nome_final = $_FILES['prod_imagem']['name'];
				}
				if (move_uploaded_file($_FILES['prod_imagem']['tmp_name'], $_UP['pasta'] . $nome_final)) {
					//Inserindo o nome da foto no banco.
					$query = mysqli_query($con , "INSERT INTO produtos (nome_produto, descricao, valor, foto, token) VALUES ('$nome','$desc','$valor','$nome_final','$token')");
						echo '
	                    <META HTTP-EQUIV=REFRESH CONTENT = "0;URL=http://localhost:8082/plug/cadastrar_produto.php">
	                    <script type="text/javascript">
	                        alert("Produto/Imagem cadastrada com sucesso.");
	                    </script>
 
                ';
				}else{
					echo '
                    <META HTTP-EQUIV=REFRESH CONTENT = "0;URL=http://localhost:8082/plug/cadastrar_produto.php">
                    <script type="text/javascript">
                        alert("Produto/Imagem não foi cadastrada com sucesso.");
                    </script>
 
                ';
				}
			}
?>