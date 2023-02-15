<?php
	function seguranca(){
		if((empty($_SESSION['UsuarioId'])) || (empty($_SESSION['UsuarioNome'])) || (empty($_SESSION['UsuarioNivel']))){		
			$_SESSION['loginErro'] = "Apenas Administradores!<p>SAI FEDIDO SEM ACESSO!!";
			header("Location: index.php");
		}else{
			if($_SESSION['UsuarioNivel'] != "2"){
				$_SESSION['loginErro'] = "SAI FEDIDO SEM ACESSO";
				header("Location: index.php");
			}
		}
	}
?>