<?php  
	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0 ;
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
    
        <script>
            // código javascript    
            $(document).ready(function(){
                    var campo_vazio = false;


                $('#btn_login').click(function(){

                    if($('#campo_usuario').val() == ''){
                        $('#campo_usuario').css({'border-color':'#A94442'});
                        campo_vazio = true;
                    }else{
                        $('#campo_usuario').css({'border-color':'#CCC'})
                    }
                    if($('#campo_senha').val() == ''){
                        $('#campo_senha').css({'border-color':'#A94442'});
                        campo_vazio = true;
                    }else{
                        $('#campo_senha').css({'border-color':'#CCC'})
                    }
                    if (campo_vazio)return false;


                    
                });

            });                 
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
                <li><a href="cadastrar.php">Inscrever-se</a></li>
                <li class="<?= $erro == 1? 'open' : ''?>">
                    <a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Entrar</a>
                    <ul class="dropdown-menu" aria-labelledby="entrar">
                        <div class="col-md-12">
                            <p>Você possui uma conta?</h3>
                            <br />
                            <form method="post" action="valida_acesso.php" id="formLogin">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" />
                                </div>
                                
                                <div class="form-group">
                                    <input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
                                </div>
                                
                                <button type="buttom" class="btn btn-primary" id="btn_login">Entrar</button>

                                <br /><br />
                                
                            </form>
                        <?php

									if($erro == 1){

										echo '<font color=#ff0000 >usuario e ou senha invalidos</font>';
									}

						?>
                    </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>


        <div class="container">

          <!-- Main component for a primary marketing message or call to action -->
          <div class="jumbotron">
            <h1>Bem vindo ao site do Pudim kawaii</h1>
          </div>

          <div class="clearfix"></div>
        </div>


        </div>
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>