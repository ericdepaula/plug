<?php

// Informações para conexão
$host = 'localhost';
$usuario = 'root';
$senha = 'usbw';
$banco = 'plug';

// Variavel para se conectar ao banco
$con = mysqli_connect($host, $usuario, $senha, $banco);
mysqli_set_charset($con, "utf8");
;
if (!$con) {
    die("Conexão falhou: " . mysqli_connect_error());
}
?>