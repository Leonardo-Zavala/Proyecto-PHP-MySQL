<?php
// Conexion
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$basededatos = 'blog_master';
$db = mysqli_connect($servidor, $usuario, $password, $basededatos, 3308);

mysqli_query($db, "SET NAMES 'utf8'");

// Iniciar la sesion
if(!isset($_SESSION)){
	session_start();
}

?>



