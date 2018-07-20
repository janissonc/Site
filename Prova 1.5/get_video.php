<?php
session_start();
include("_db/conecta_db.php");
$id_usuario = $_SESSION['id_usuario'];
$titulo = $_POST['titulo'];
$ingredientes = $_POST['ingredientes'];
$video = $_POST['video'];
$rest = substr("$video", 32) ;
$newvideo ="https://www.youtube.com/embed/" .$rest;
$sql= "INSERT INTO receita (id_usuario,ingredientes,link_video,titulo) values ('$id_usuario' ,'$ingredientes','$newvideo','$titulo')";
$result = mysqli_query($con,$sql);
if(!$result){
	echo "erro ao cadastar mensagem";

}else{
	echo "<script>location.href = 'receitas.php';</script>";
}
?>
