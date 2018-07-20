<?php  
if (!isset($_SESSION)) {session_start();}
include ('verifica_session.php');
$nome=$_SESSION['usuario'];

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
			<div  class="geral">
				    <center>
				    	<div class="titulo">
							<h1>A Nossa História</h1>
						</div>
					</center>
						<div  class="texto_receita">
							<p>A Pudim Kawaii surgiu em 2018 numa cidade do interior de Minas Gerais chamada Ipatinga, fundada por Ernane Lana e Jao Negro, expandiu para o interior do estado, chegando na capital mineira em meiados de 2018, que foi um grande sucesso, que com um pouco mais de 6 meses de existência, já estava entre as 5 maiores empresas do Páis dedicadas aos Pudim Kawaii.</br>

							A primeira expansão para fora de Minas Gerais vai acontecer até 2019, com a abertura de lojas no Espírito Santo. Na sequência, expansão para o nordeste, com a entrada na Bahia. O sucesso vai ser garantido e a aceitação da marca pelo povo já foi aceita. E a META é que até o final de 2019, a Pudim Kawaii já vai ser a líder neste mercado.</p>
						</div>
						<center>
						<div>
							<span id="foto01"><img src="CSS/Img/pudimsobre.jpg"/></span>
							<span id="foto02"><img src="CSS/Img/pudimsobre2.jpg"/></span>
						</div>
						</center>
					<footer>
					   	<center>
					   	   	<div><font size="4">Copyright&copy Janisson Carlos</font> 
					   	   	</div>
					    </center>
		    		</footer>
			</div>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</body>
</html>