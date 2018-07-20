<?php  
if (!isset($_SESSION)) {session_start();}
include ('verifica_session.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>inserir receita</title>
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
                    echo " ".$date." ";  ?>
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
		<div class="login">
		
				<form action="get_video.php" method="Post">
					  <div class="form-group">
					    <label for="enteremail">
					    	Título: 	<input type="text" class="form-control" id="enteremail" aria-describedby="emailHelp" placeholder="Entre com o titulo da receita" name="titulo" size="50%">
					    </label>
					    
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Link do video: 
					    	<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Link do Video" name="video" size="50%">
					    </label>
					    <label>ingredientes
					     
					    	<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ingredientes" name="ingredientes" size="50%">
					    </label>
					  </div>
						<br/>
					   <button type="submit" class="btn btn-primary">Enviar</button>
					   
						<button type="reset" class="btn btn-primary">Cncelar</button>	
					
				</form>
				<footer>
			   	<center>
			   	   	<div><font size="4">Copyright&copy Janisson Carlos</font> 
			   	   	</div>
			    
				</center>
		    </footer>
	</center>
			
		
		</div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>