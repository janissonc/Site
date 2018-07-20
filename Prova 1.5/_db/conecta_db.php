<?php 

$host="localhost";
$user="root";
$password="";
$base="sitePudim";

$con=mysqli_connect($host,$user,$password,$base);
mysqli_select_db($con, $base);

if(!$con){

		echo "Error: Falha ao conectar o banco de dados.".PHP_EOL;
		echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
   		exit;
}else{

 


	           
    
    //echo "conectado";

}
 



 ?>