<?php

session_start();


include('_db/conecta_db.php');
	$usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']);
$sql = "SELECT * FROM usuarios where email ='$usuario' or nome ='$usuario' and senha = '$senha'  ";

$resultado_id = mysqli_query($con,$sql);
$linha = mysqli_num_rows($resultado_id);

if($linha >0){
	

	$dados_usuario = mysqli_fetch_array($resultado_id);
	$tempolimite = 120;
	$_SESSION['registro'] = time();
	$_SESSION['limite'] = $tempolimite;
 	$_SESSION['id_usuario'] = $dados_usuario['id'];
 	$_SESSION['permissao_usuario'] = $dados_usuario['permissao'];
	$_SESSION['usuario'] = $dados_usuario['nome'];
	$_SESSION['email'] = $dados_usuario['email'];
 	echo "<script>location.href = 'home.php';</script>";
	
}else{

	echo "<script>location.href = 'index.php?erro=1';</script>";

}







?>