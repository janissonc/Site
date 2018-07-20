<?php
if (!isset($_SESSION)) {session_start();}
if (!$_SESSION['usuario']) {
	header("Location:index.php");
}
if ($_SESSION['registro']) {
	$segundos = time() - $_SESSION['registro'];
}
if ($segundos > $_SESSION['limite']) {
	unset($_SESSION['registro']);
	unset($_SESSION['limite']);
	unset($_SESSION['id_usuario']);
	unset($_SESSION['permissao_usuario']);
	unset($_SESSION['usuario']);
	unset($_SESSION['email']);
	session_destroy();
	header("Location:index.php");
}else{
	$_SESSION['registro'] = time();
}
?>