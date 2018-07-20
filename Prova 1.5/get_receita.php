<?php

	session_start();
	if(!isset($_SESSION['usuario'])){
		header("location:index.php?erro=1");
	}
	include('_db/conecta_db.php');
	include('verifica_session.php');
	
	$id_usuario = $_SESSION['id_usuario'];
	$nome_usuario = $_POST['procurar_pessoas'];
	//
 	
 	$sql = "SELECT * FROM usuarios where usuario like '%$nome_usuario%' and id <> $id_usuario";
 	$resultado_id  = mysqli_query($link,$sql);
 	if ($resultado_id) {
 		while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
 			echo '<a href="#" class="list-group-item">';
 				echo '<strong> '.$registro['usuario'].' </strong> <small> - '.$registro['email'].'</small>';
 				echo '<p class="list-group-item-text pull-right">';
 					echo '<button type="button" id="btn_seguir_'.$registro['id'].'" class="btn btn-default btn_seguir" data-id_usuario="'.$registro['id'].'">Seguir</button>';
 					echo '<button type="button" id="btn_deixar_seguir_'.$registro['id'].'" style="display:none" class="btn btn-primary btn_deixar_seguir" data-id_usuario="'.$registro['id'].'">Deixar de Seguir</button>';
 				echo '</p>';
 				echo '<div class="clearfix"></div>';
 			echo '</a>';
 			# code...
 		}
 		
 	}else{
 		echo " Erro ao efetuar consulta !!"; 
 	}


?>