<?php
session_start();
unset($_SESSION['usuario']);
unset($_SESSION['email']);
echo "Esperamos você de volta em breve!!!";
echo "<script>";
echo "setTimeout(function(){
	location.href = 'index.php'},1000);";
echo "</script>";

?>