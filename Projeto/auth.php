<?php
session_start();
$connection = ssh2_connect('127.0.0.1', 22);
$_SESSION['connection'] = $connection;
if(ssh2_auth_password($connection, $_POST['login'], $_POST['senha'])){
	$_SESSION['logged'] = true;
	$_SESSION["error_msg"]="";
	$_SESSION["user"] = $_POST['login'];
	header('Location: manager');
}else{
	session_start();
	$_SESSION["error_msg"]="Usuário ou senha inválida!";
	header('Location: .');
}
?>
