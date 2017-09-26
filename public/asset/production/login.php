<?php

    //Linha de código para retirar a advertência da depreciação do MySql no PHP.
    error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
    //Conexão com o banco de dados MySql; o or die é para verificar se há erro de conexão.
    mysql_connect('localhost','root','') or die(mysql_error());
    mysql_select_db('easytour') or die(mysql_error());

    //Verifica se há cadastro no login do usuário.
    if(isset($_POST['login']) && isset($_POST['senha'])){
        //Variavel de email.
        $login = $_POST['login'];
        //Variavel de email.
        $senha = $_POST['senha'];
        
        //Verifica o tipo de usuário.
        $get = mysql_query("SELECT * FROM usuarios WHERE email = '$login' AND senha = '$senha'");
        //Conta o número de registro que tem no banco.
        $num = mysql_num_rows($get);
        
        //Se $num for igual a 1, é porque existe o usuário na tabela, se não será 0.
        if($num == 1){
            //O laço percorrerá os campos da tabela para encontrar o usuário.
            while($percorrer = mysql_fetch_array($get)){
                //A pesquisa será pelo campo adm do banco de dados.
                $adm = $percorrer['adm'];
                $nome = $percorrer['nome'];
                
                //Iniciar uma sessão, afirmando que tem um usuário logado.
                session_start();
                
                //Validará se o usuário é parceiro ou não.
                if($adm == 1){
                    $_SESSION['adm'] = $nome;
                }else{
                    $_SESSION['nor'] = $nome;
                }
                
                echo '<script type="text/javascript"> window.location = "index.php"</script>';
            }
        }else{
            echo 'O email ou a senha estão errados.';
        }
    }
    
?>