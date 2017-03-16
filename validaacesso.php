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
		<div id="borda"></div>
		<?php
			$email = $_POST['txtEmail'];
			$emailfilter = filter_var($email,FILTER_SANITIZE_SPECIAL_CHARS);
			$emailfilter = filter_var($emailfilter,FILTER_SANITIZE_MAGIC_QUOTES);
			
			$password = $_POST['txtPassword'];
			$passfilter = filter_var($password,FILTER_SANITIZE_SPECIAL_CHARS);
			$passfilter = filter_var($passfilter,FILTER_SANITIZE_MAGIC_QUOTES);
			
			function CryptoPass($Cryptopassword){
				return md5($Cryptopassword);
			}
			CryptoPass($passfilter);
			
			#adaptar o Form e os campos para o banco....
			$query =  mysqli_query($conn ,"SELECT * from userlist WHERE ...") or die (mysqli_error());
			
			$rowNumber = mysqli_num_rows($query);
			
			if($rowNumber == 1){
				while($result = mysqli_fetch_array($rowNumber)){
					$_SESSION['login'] = true;
					//nome do usuario que esta logado no momento esta informação esta no BD
					$_SESSION['nome_usuario'] = $result['nome'];
					$_SESSION['lista'] = 0;/*AQUI VEM O RESULTADO DA LISTA DO BANCO*/
					header("Location:conteudoExclusivo.php");
				}
			}else{
				echo "<p>Nome de Usuario/Senha incorretos <a href='javascript:history.back();'>volte</a> e tente novamente</p>";
			}
		?>
    </body>
</html>
    
