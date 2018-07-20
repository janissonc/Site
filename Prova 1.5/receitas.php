<?php 
if (!isset($_SESSION)) {session_start();}
include ('verifica_session.php');
include("_db/conecta_db.php");
 $nome = $_SESSION['usuario'];
if (!isset($_SESSION['permissao_usuario'])) {
$permissao = 0;	
}else {
	$permissao = $_SESSION['permissao_usuario'];
}

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
                    echo $nome ." ".$date." ";  ?>
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
		<div id = "receitas" class="titulo">
			<div class="titulo">
				<center><h1></br>Receitas de Pudim</h1></center>
			</div>
			<?php
			
			if ($permissao == 1) {
			echo '<center><span><a href="insert_video.php">';
				echo'<botom type="submit" name="incluir_receita" class="btn btn-primary " value="Incluir receita">Incluir receita</botom>';
			echo"</a></span></center>";
			}
			
			?>
				<div class="texto_receita">
					<p> Além do Pudim Kawaii, especialidade da casa, nós também produzimos pudins de outros sabores e tamanhos.</br> A seguir estão alguns modelos de pudim simples para se fazer em casa.</p>
					<?php
						$query = "SELECT * FROM receita";
						    // executa a query e 'grava' o resultado em $res
						    $res = mysqli_query($con, $query) or die(mysql_error());
						    // pega o número de linhas que a query retornou
						    $num_reg = mysqli_num_rows($res);
						          // faz um loop de 0 até o numero de linhas encontrada	
						    // busca os campos da query
						       
						    for($i=0;$i<$num_reg;$i++) {
						       $campo = mysqli_fetch_array($res);
						       // armazena cada campo do banco em uma variável
						       $link_video= $campo["link_video"];
						       $titulo= $campo["titulo"];
						       $ingredientes= $campo["ingredientes"];

						       
						       // exibe o resultado.  
						       echo "<h2> ".$titulo."</h2>";
						       echo "Ingredientes";
						    echo "<p>".$ingredientes."</p>";
						    echo'<div  class="embed-responsive embed-responsive-16by9">';
				  			echo'<iframe class="embed-responsive-item" src="'.$link_video.'" allowfullscreen></iframe>';
							echo'</div><br>';
								if ($permissao == 1) {
									echo '<center><table width="25%" cellspacing="10"><tr><td><form action="excluir_receita.php" method="post">';
									echo'<input   type="submit" name="excluir_receita" class="btn btn-primary" value="Excluir receita '.$campo['id'].' "> ';
									echo'</form></td><td><form action="editar_receita.php" method="post"><input type="submit" name="editar_receita" class="btn btn-primary " value="Editar receita '.$campo['id'].'"></a>';
									echo"</form></td></tr></table></center>";
								}
						   }
						   

					?>

				<footer>
				<center>
				<div>
					<font size="4">Copyright&copy Ernane Lana</font> 
				</div>
				</center>
		    </footer>
			</div>
			
		</div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</body>
</html>