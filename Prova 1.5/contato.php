<?php  
if (!isset($_SESSION)) {session_start();}
include ('verifica_session.php');
include('_db/conecta_db.php');
$id = $_SESSION['id_usuario'];
$nome = $_SESSION['usuario'];
if (!isset($_SESSION['permissao_usuario'])) {
$permissao = 0;	
}else {
	$permissao = $_SESSION['permissao_usuario'];
}
?>

<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">

        <title>Twitter clone</title>

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

        <!-- Static navbar -->
        <nav class="navbar navbar-default navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <img id="logo" src="Img/logo.png" />
              	<span><?php
              		date_default_timezone_set('America/Sao_Paulo');
					$date = date('Y-m-d');
					echo $nome." ".$date." ";  ?>
				</span>
				<span id="demo" ></span>
            </div>
            
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="home.php">Home</a></li>
                <li><a href="receitas.php">Receitas</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="sair.php">Sair</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
         	<div class="social">
					<ul>
						
							<li><a href="https://www.facebook.com/janisson.carlos"  target="_blank" class="icon-facebook2"></a></li>
						
							<li><a href="https://twitter.com/janisso26243814" class="icon-twitter" target="_blank" ></a></li>
						
							<li><a href="https://www.instagram.com/janisson.bass/" class="icon-instagram" target="_blank" ></a></li>
						
					</ul>
			</div>
		<center>
			<div class="contato">
				<div >
				    <?php
				     if ($permissao==1) {
				     	$query = "SELECT * FROM contato";
				     	    // executa a query e 'grava' o resultado em $res
						$res = mysqli_query($con, $query) or die(mysql_error());
						    // pega o número de linhas que a query retornou
						$num_reg = mysqli_num_rows($res);
						          // faz um loop de 0 até o numero de linhas encontradas
						echo'<table width="60%" cellspacing="10">';
					    for($i=0;$i<=$num_reg;$i++) {
						       // busca os campos da query
						       $campo = mysqli_fetch_array($res);
						       // armazena cada campo do banco em uma variável
						       $id_usuario = $campo['id_usuario'];
						       $msg= $campo["mensagem"];
						       $nome= $campo["nome"];
						       // exibe o resultado.  
						       if ($id_usuario == $id) {
						       	echo '<tr bgcolor="#D3D3D3">';
						       	echo '<td>'.$msg.'</td></tr>';
						       }else{
						       	echo '<tr align="right"><td>'.$nome.'</td>';
						       	echo "<td>"  .$msg."</td></tr>";
						       }
						       
					   }
	   				   echo"</table>";
				     }else{
				     	$query = "SELECT * FROM contato where id_usuario='$id' or id_usuario ='1'";
				     	    // executa a query e 'grava' o resultado em $res
						$res = mysqli_query($con, $query) or die(mysql_error());
						    // pega o número de linhas que a query retornou
						$num_reg = mysqli_num_rows($res);
						          // faz um loop de 0 até o numero de linhas encontradas
						echo'<table width="60%" cellspacing="10" >';
					    for($i=0;$i<=$num_reg;$i++) {
						       // busca os campos da query
						       $campo = mysqli_fetch_array($res);
						       // armazena cada campo do banco em uma variável
						       $id_usuario = $campo['id_usuario'];
						       $msg= $campo["mensagem"];
						       $nome= $campo["nome"];
						       // exibe o resultado.  
						       if ($id_usuario == $id) {
						       	echo '<tr align="right" bgcolor="#D3D3D3">';
						       	echo '<td>'.$msg.'</td></tr>';
						       }else{
						       	echo '<tr align="left">';
						       	echo "<td>" .$nome. " " .$msg."</td></tr>";
						       }
						       
					   }
	   				   echo"</table>";
				     }
						
						

      				 ?>		
      			</div>
			
				<div id="escrever_msg" >
		

					<form action="get_mensagem.php" method="post">
						<textarea name="msg" placeholder="Escreva aqui a sua Mensagem..." class="form-control" rows="3" ></textarea><br/>
						<input type="submit" value="Enviar" class="btn btn-primary">
					</form>
				</div>
			</div>
		</center>


        </div>
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>



