	<?php

	session_start();
	include_once("conect.php");
	//Verifica se os campos possuem dados 
	if((isset($_POST['usuario'])) && (isset($_POST['senha']))){

		$usuario = mysqli_real_escape_string($con, $_POST['usuario']); 
		$senha = mysqli_real_escape_string($con, $_POST['senha']);

		
		$sql = "SELECT `id`, `nome`,'usuario', `nivel` FROM `usuarios` WHERE (`usuario` = '". $usuario ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1";

		$query = mysqli_query($con, $sql);
		$resultado = mysqli_fetch_assoc($query);
		
		//Encontrando um usuário na tabela usuario com os mesmos dados digitado pelo usuario
		if(isset($resultado)){
			$_SESSION['UsuarioId'] = $resultado['id'];
			$_SESSION['UsuarioNome'] = $resultado['nome'];
			$_SESSION['NomeUsuario'] = $resultado['usuario'];
			$_SESSION['UsuarioNivel'] = $resultado['nivel'];

			if($_SESSION['UsuarioNivel'] == "1"){
				header("Location: cliente.php");
			}elseif($_SESSION['UsuarioNivel'] == "2"){
				header("Location: administracao.php");
			}
		}else{
			$_SESSION['loginerro'] = "Usuário ou senha inválido";
			header("Location: index.php");
		}
	}else{
		$_SESSION['loginerro'] = "Usuário ou senha inválido";
		header("Location: index.php");
	}
?>