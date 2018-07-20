<?php
session_start();
include("_db/conecta_db.php");
$id_usuario = $_SESSION['id_usuario'];
$titulo = $_POST['titulo'];
$receita = $_POST['receita'];
$id = substr("$receita", 7);
$ingredientes = $_POST['ingredientes'];
$video = $_POST['video'];
$rest = substr("$video", 32) ;
$newvideo ="https://www.youtube.com/embed/" .$rest;
echo "$id";


if($titulo != ''){
 $sql= "UPDATE `receita` SET `titulo` = '$titulo' WHERE `receita`.`id` = $id;";
 $result = mysqli_query($con,$sql);
if(!$result){
	echo "erro ao cadastar mensagem";

}else{
	echo "<script>location.href = 'receitas.php';</script>";

}
}

if($ingredientes != ''){
 $sql= "UPDATE `receita` SET `ingredientes` = '$ingredientes' WHERE `receita`.`id` = $id;";
 $result = mysqli_query($con,$sql);
if(!$result){
	echo "erro ao cadastar mensagem";

}else{
	echo "<script>location.href = 'receitas.php';</script>";
}
}

if($video != ''){
 $sql= "UPDATE `receita` SET `link_video` = '$newvideo' WHERE `receita`.`id` = $id;";
 $result = mysqli_query($con,$sql);
if(!$result){
	echo "erro ao cadastar mensagem";

}else{
	echo "<script>location.href = 'receitas.php';</script>";
}
}


?>