<?php  
	$erro_email = isset($_GET['erro_email']) ? $_GET['erro_email'] : 0 ;
	$erro_usuario = isset($_GET['erro_usuario']) ? $_GET['erro_usuario'] : 0 ;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Pudim</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
        <link rel="stylesheet" type="text/css" href="CSS/fonts.css">

        <!-- jquery - link cdn -->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

        <!-- bootstrap - link cdn -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script type="text/javascript">
        	 var myVar = setInterval(myTimer ,1000);
			    function myTimer() {
			        var d = new Date(), displayDate;
			       if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
			          displayDate = d.toLocaleTimeString('pt-BR');
			       } else {
			          displayDate = d.toLocaleTimeString('pt-BR', {timeZone: 'America/Belem'});
			       }
			          document.getElementById("demo").innerHTML = displayDate;
			    }
        </script>   
</head>
<body>
	

		<div id="login" class="login">
		<h1><center> Cadastro </h1></center>
		<form action="registra_usuario.php" method="post">
			  <div class="form-group">
			    <label for="nome"> Nome: 
			    <input type="text" class="form-control" id="enteremail"  placeholder="Digite o Nome" name="nome" size="70" required>
			    </label>
			    <?php

					if($erro_usuario == 1){
							echo '<font color=#ff0000 >usuario já registrado</font>';
					}

				?><br/>
			  </div>
			  <div class="form-group">
			    <label for="enteremail"> Email: 
			    <input type="email" class="form-control" id="enteremail" aria-describedby="emailHelp" placeholder="Entre com o  email" name="email" size="70" required>
			    </label>
			    <?php

					if($erro_email == 1){
							echo '<font color=#ff0000 >E-mail já registrado</font>';
					}

				?>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password: 
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="senha" size="70" required>
			    </label>
			  </div>
			   <button type="submit" class="btn btn-primary">Cadastrar</button>
			<input type="reset" class="btn btn-primary" value="Cancelar">	
		</form>
		</div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>