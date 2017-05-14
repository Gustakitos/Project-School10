<?php
session_start();
include 'conexao.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Validação de dados.</title>
    </head>
    <body>
        <div id="conteudo"></div>
        <h1>Verificando Dados para acesso.</h1>
        <div id="borda">
            <?php
            $email = $_POST['txtEmail'];
            $password = $_POST['txtPassword'];
           
            $query = mysqli_query($conn, "SELECT * from userlist");

            $rowNumber = mysqli_num_rows($query);

            if ($rowNumber >= 1) {
                while ($result = mysqli_fetch_array($query)) {
                    $_SESSION['login'] = true;
                    //nome do usuario que esta logado no momento esta informação esta no BD
                    $_SESSION['nome_usuario'] = $result['nome'];
                    $_SESSION['lista'] = 0; /* AQUI VEM O RESULTADO DA LISTA DO BANCO */
                    header("Location:conteudoExclusivo.php");
                }
            } else {
                echo "<p>Nome de Usuario/Senha incorretos <a href='javascript:history.back();'>volte</a> e tente novamente</p>";
            }
            ?>
        </div>
    </body>
</html>