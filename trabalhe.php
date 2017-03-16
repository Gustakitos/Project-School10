<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Leões FC</title>
		<link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen" /> <!-- Aqui chamamos o arquivo estilo.css da pasta "CSS"   -->
	</head>
	<body>
		<!-- a Tag DIV , provavelmente é novidade para você que é iniciante, as DIVs são caixas que recebem a formatação do arquivo CSS, escrevemos "<div ></div>" assim ela fica sem formatação, para chamarmos a formatação do arquivo CSS, escrevemos "<div class="cabecalho" ></div>" com as "class" chamamos a class que foi criada no css, no caso a class "cabelhalho"  -->
		<!-- A "class" pode ser usada em outros elementos alem da "DIV" -->
		<div class="cabecalho" >
			<div class="logo" >                
				<img src="img/logo.jpg" width="410" height="220"><!-- Insere a imagem do logo da pasta IMG -->
			</div><!-- Fim Logo -->
			<div class="banner" >
				<img src="img/banner.jpg" width="570" height="220"><!-- Insere a imagem do banner da pasta IMG -->
			</div><!-- Fim Banner -->
			<div class="menu" >
				<a href="index.php" > HOME </a> <!-- link menu -->
				<a href="novidades.php" > NOVIDADES </a> <!-- link menu -->
				<a href="flc.php" > FALE CONOSCO </a> <!-- link menu -->
				<a href="trabalhe.php" > TRABALHE CONOSCO </a> <!-- link menu -->
			</div><!-- Fim menu -->
		</div><!-- Fim Cabeçalho -->
		<div class="conteudo" >
			<div class="texto" >
				<h1>Trabalhe Conosco</h1>
				<p>A escola leões de futebol sempre visando em melhorar, está sempre em busca de novos colaboradores para que possamos alcançar esse objetivo, então se você tem vontade em fazer parte de nossa equipe, entre em contato conosco pelo nosso e-mail <strong><u>lfc@gmail.com</u></strong>.</p>
			</div><!-- Fim Texto -->
			<div class="foto" >
				<img src="img/foto3.png" width="300" height="200" /><!-- Insere a foto da pasta IMG -->
			</div><!-- Fim foto -->
		</div><!-- Fim conteudo -->
		<div class="rodape" >
		 <a href="login.php" > ÁREA RESTRITA </a> 
		</div><!-- Fim rodape -->
	</body>
</html>