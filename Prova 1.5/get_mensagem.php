<?php
session_start();
include("_db/conecta_db.php");

$msg = $_POST['msg'];
$nome = $_SESSION['usuario'];
$email = $_SESSION['email'];
$id = $_SESSION['id_usuario'] ;     

$sql = "INSERT INTO contato (id_usuario, mensagem, nome, email) values ('$id','$msg','$nome','$email')";

$result = mysqli_query($con,$sql);
if(!$result){
	echo "erro ao cadastar mensagem";

}else{
	echo "<script>location.href = 'contato.php';</script>";
}


?>