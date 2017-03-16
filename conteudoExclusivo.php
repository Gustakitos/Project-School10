<?php
    session_start();
    include 'conexao.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta>charset=utf-8
        <title>Sistema Restrito ainda sem nome</title>
    </head>
    
    <body>
        <div id="conteudo">
            <?php if($_SESSION['login']): ?>
				<h1><span class="destaca"><?php echo $_SESSION['nome_usuario']; ?></span>Seja bem vindo ao conteudo exclusivo</h1>
				<div class="borda"></div>
				<div class="logout">
					<p class="sairSistema"><a href="logout.php">Clique Aqui para</a>,sair do Sistema</p>
				</div>
				<div class="clear"></div>
				<h3>Conteudo Exclusivo</h3>
				<p>GUI MANO ESCREVE O Q PRECISA AQUI VÉI FLW É NOIS!!!! :D</p>
				<div class="borda"></div>
			<?php else: ?>
				<h1>Sistema de Login e Senha Criptografados</h1>
				<p>Proibido o acesso desta forma primeiro faça o login para em seguida visualizar o conteudo exclusivo.</p>
				<div class="borda"></div>
				<p><a href="login.php">Home</a></p>
			<?php endif ?>
        </div>
    </body>
</html>  
    

