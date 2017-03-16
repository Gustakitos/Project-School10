    <?php 
    $banco="aluno";
    $usuario="Admin";
    $senha="password";
    $servidor="localhost";
    $conn= mysqli_connect($servidor,$usuario,$senha,$banco);
    If (!$conn){
        echo 'Failed to connect to MySql';
    }else{
        echo 'Succesfully connected with MySql';
    }

