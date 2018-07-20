<?php
session_start();
include("_db/conecta_db.php");
$excluir = $_POST['excluir_receita'];
$id = substr("$excluir", 15);
echo "$id";
$sql = "DELETE FROM receita where id = '$id'";
$result = mysqli_query($con,$sql);
if ($result) {
	echo"sucesso ao deletar receita";
	echo "<script>location.href = 'receitas.php';</script>";
	die();
}else{
	echo "error ao deletar receita";
}
?>