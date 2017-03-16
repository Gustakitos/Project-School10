<!DOCTYPE html>
<html>

<head>



<meta charset="UTF-8">

<title>Leões FC</title>

<link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen" /> <!-- Aqui chamamos o arquivo estilo.css da pasta "CSS"   -->

</head>

<body>




<div class="cabecalho" >

  				<div class="logo" >                
                <img src="img/logo.jpg" width="410" height="220"><!-- Insere a imagem do logo da pasta IMG -->
                </div><!-- Fim Logo -->
                
                
                <div class="banner" >
                 <img src="img/banner.jpg" width="570" height="220"><!-- Insere a imagem do banner da pasta IMG -->
                </div><!-- Fim Banner -->
                              
                <div class="menu" >
                
                <a href="index.php" > HOME </a> <!-- link menu -->
                <a href="novidades.php" > NOVIDADES</a> <!-- link menu -->
                <a href="flc.php" > FALE CONOSCO </a> <!-- link menu -->
				<a href="trabalhe.php" > TRABALHE CONOSCO  </a> <!-- link menu -->
                
                </div><!-- Fim menu -->
                
</div><!-- Fim Cabeçalho -->

<div class="conteudo" >

	
	  <div id="conteudo">  
  
    
    <form name="frmLogin" action="validaacesso.php" id="validate" method="POST">
        <fieldset>
            <legend>Login</legend>
            <label>User:</label>
            <input type="email" name="txtEmail" required/>
            <div class="clear"></div>
			<br> 
			<label>Senha</label>
            <input type="password" name="txtPassword" required />
            <div class="clear"></div>
			<br>
            <input type="submit" value="Acessar o sistema"/>
        </fieldset>
    </form>
    <p><small>Esqueceu a senha?<a href="fsenha.php">Clique Aqui!</a></small></p>
    </div>
	
	
</div><!-- Fim conteudo -->


<div class="rodape" >
 <a href="login.php" > ÁREA RESTRITA </a> 
</div><!-- Fim rodape -->



</body>
</html>
