<?php
    include 'conexao.php';
    /*$recebeEmail = $email
     * filtraEmail = emailfilter
     * 
    */
    
    $email = $_POST['txtEmail'];
    $emailfilter = filter_var($email,FILTER_SANITIZE_SPECIAL_CHARS);
    $emailfilter = filter_var($emailfilter,FILTER_SANITIZE_MAGIC_QUOTES);
    #Cria a query de select baseada no banco de dados que aida nao temos :D
    $sql_pesq = mysqli_query($conn, "");
    $verifica = mysqli_num_rows($sql_pesq);
?>

<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sistema de Login Criptografado</title>
    
    </head>
    <body>
    <div id="conteudo">
        <?php if($verifica==0){ ?>
        <h1>Email invalido!</h1>
        <p>Seu email esta incorreto</p>
        <p>Entre em contato com o Admin do sistema<br>
            Se quiser tentar novamente,<a href="../">clique aqui</a>.</p>
        <?php }
    else{
        $result = mysqli_fetch_array($sql_pesq);
        $id_usuario = $result['']; #<-nome da coluna com o id do usuario no banco que ainda nao existe
        $nome = $linha['']; #<- nome da coluna com o nome do usuario no banco ....
        $email = $linha['txtEmail'];
        
      function geraSenha($tamanho=8,$maiusculas=true,$numeros=true,$simbolos=true){
          $lmai="";
          $lmin="";
          $num="";
          $simb="";
          $retorno =";
          $caracteres = ";
          $caracteres.=$lmin;
          if($maiusculas) $caracteres.=$lmai;
          if($numeros) $caracteres.=$num;
          if($simbolos) $caracteres.=$simb;
          
          $len = $strlen($caracteres);
          for($n=1;$n<=$tamanho;$n++){
              $rand = mt_rand(1, $len);
              $retorno .= $caracteres[$rand-1];
          }
          return $retorno;
    }
    $novasenha = geraSenha(9,true,false);
    $senhamds = md5($novasenha);
    
    $query = ""; #<- Query que faz Update da senha do usuario com ID definido no Form...
    $rs = mysqli_query($conn, $query);
    $formato = "\nContent-type: text/html";
    $msg = "Olá, $nome. Recebemos uma solicitação para renovar sua senha.<br><br>";
    $msg .= "Seu usuario: <strong>$usuario</strong><br>";
    $msg .= "Sua <strong>nova</strong> senha: <strong>$novasenha</strong><br><br>";
    $msg .= "Caso não tenha solicitado esta ação. Acesse a sua conta e altere sua senha novamente.<br>";
    $msg .= "<br>";	
    $msg .= "Obrigado.<br>";
    mail("$email","Nova Senha","$msg", "From: Sistema <sistema@sistema.com> ".$formato);
    }
    ?>
    <H2>Senha enviada!</H2> 
               <p>Parabéns. Sua senha foi enviada para o e-mail solicitado.</p>
               <p>Após verificar seu e-mail, retorne à página de login.</p>
               <p>Se preferir, <a href="index.php">clique aqui</a>.</p>
               <p>Obrigado!</p>
               
          </div>
    </body>
</html>
    