<!DOCTYPE HTML>
<html>
    <head>
       
	   <title>Sistema de Login e Senha Criptografados</title>
  
  <link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen" /> 

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
				<a href="trabalhe.php" > TRABALHE CONOSCO </a> <!-- link menu -->
                
                </div><!-- Fim menu -->
                
</div><!-- Fim Cabeçalho -->

<div class="conteudo" >
    
        <div id="conteudo">
            <h1>Recuperação de Senha</h1>
    
            <div class="borda"></div>
            <p>Digite seu email para recuperar a senha perdida:</p>
            <form name="frmRecover" action="vsenha.php" method="POST">
                <fieldset>
                    <legend>Recuperar Senha</legend>
                    <label for="email">Email:</label><input type="text" name="txtEmail" id="Email" required />
                    <input type="submit" value="Enviar"/>
                </fieldset>
            </form> 
        </div>
		</div>
		
<div class="rodape" >
 <a href="login.php" > ÁREA RESTRITA </a> 
</div><!-- Fim rodape -->

    </body>
</html>