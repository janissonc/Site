<?php 
if (!isset($_SESSION)) {session_start();}
include ('verifica_session.php');
$nome = $_SESSION['usuario'];
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
	<div class="geral">
		<div id="novidades" class="novidades">
				<center><h1>A origem do Pudim</h1><br><h3>Bem Vindo <?php echo"$nome"; ?><h3></center>
				<div id="pudim" class="pudimtexto">
				<p> </br>Essa sobremesa surgiu no século XVI dentro dos conventos portugueses. E foi ensinada para nós brasileiros, já que eles eram nossos colonizadores, pegamos o gosto pelo doce bem rápido. Nessa época o pudim era feito de leite ainda, não de leite condensado.
				Pudim por aqui e em Portugal quer dizer preparação de consistência cremosa e doce.</br></br>

			    O pudim recebeu o nome de pudim marfim, por conta da sua cor. Ele era preparado com ovos, farinha, açúcar, leite e favas de baunilha.</br></br>

				Essa receita era muito apreciada por todos e famosa nas cidades portuguesas. Com o tempo as receitas foram evoluindo e com o surgimento do leite condensado veio a ideia de acrescentar essa novidade doce na receita tradicional. E aí, foi só sucesso.</br></br>

				O pudim não era mais o mesmo, ganhou um sabor bem mais adocicado que o primeiro feito em Portugal. Hoje, você encontra pudim de tudo quanto é coisa, de coco, de chocolate, de maracujá, enfim, o pudim se revolucionou e ganhou versões e não param de conquistar gerações.</br></br>

				Aproveite e saboreie o nosso pudim da casa, servimos até com chantilly. Feito com muito carinho para você pedir sempre.</br></p>
			    </div>
			<center>
				<div>
				  <img id="img_pudim" src="Img/pudimorigem1.png" class="img-responsive" alt="Imagem Responsiva" >
				</div>
			</center>
		</div>
	<footer>
	   	<center>
	   	   	<div><font size="">Copyright&copy Ernani Lana</font> </div>
	    </center>
    </footer>
	</div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
