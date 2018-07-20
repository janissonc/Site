<?php
    session_start();
    include('_db/conecta_db.php');// requerindo a pagina de conexão com banco de dados 
    $usuario = $_POST['nome'];//recupera o dado digitado
    $email = $_POST['email'];//recupera o valor digitado 
    $senha = md5($_POST['senha']);// md5 criptografa a senha digitada pelo usuario


    $usuario_existe = false;//variavel para teste de autenticação
    $email_existe = false;//variavel para teste de autenticação

    //verificar se o usuario ja existe 
    $sql = "SELECT * FROM usuarios WHERE nome = '$usuario' ";//seleção da tabela usuario do banco recuperando o usuario digitado
    //executando a quotemeta(str)uery do mysql com uma condição
    if($resultado_id = mysqli_query($con, $sql)){// se retornar 1 == true / 0 == false
        $dados_usuario = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);//recuperando os dados do usuario pelo parametro associativo
        if(isset($dados_usuario['nome'])){// se usuario ja existe
            $usuario_existe = true;// altera o valor da variavel para true
        }
    }else{
        echo "Erro ao localizar o cadastro";//mensagem de erro 
    }

    //verificar se o email já existe 
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";//seleção da tabela usuario do banco recuperando o email digitado
    if($resultado_id = mysqli_query($con, $sql)){// se retornar 1 == true / 0 == false
        $dados_usuario = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);//recuperando os dados do usuario por um array pelo parametro associativo
        if(isset($dados_usuario['email'])){// se uo email ja existe
            $email_existe = true;// altera o valor da variavel para true
        }

    }else{
        echo "Erro ao localizar o email";
    }
    // verificação 

    if($usuario_existe || $email_existe){
        $retorno_get = '';//variavel de retorno recebe vazio
        if ($usuario_existe) {//se true entra na condição
            $retorno_get .= 'erro_usuario=1&';//concatena e atribui o valor a variavel 
            
        }
        if ($email_existe) {//se true entra na condição
            $retorno_get .= 'erro_email=1&';//concatena e atribui o valor a variavel 
        }
        header("Location: cadastrar.php?".$retorno_get);//envia para a tela inscrevase com os erros de email e/ou usuario existe 
        die();//para o fluxo ecerra o processo 
    }
    /*caso não entre na condição de verificação dos usuarios existentes vai para a parte de cadastro do usuario */

    
    $sql = "insert into usuarios(nome,email,senha) values ('$usuario','$email','$senha')";
    //executar a query
    if(mysqli_query($con,$sql)){// se true entra na condição cadastrando o usuario e mandando para a pagina home 
        $_SESSION['usuario'] = $usuario;
        $_SESSION['permissao_usuario'] = 0;
        header("Location:home.php");
        /*echo "<script>";
        echo "setTimeout(function(){location.href = 'index.php'},1000);";
        echo "</script>";
        */
        echo 'Usuario cadastrado com sucesso';
    }else{

        echo 'Erro ao registrar o usuario';

    }


?>