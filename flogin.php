<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <!-- fonte usada em algumas partes do site-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap');
    </style>
</head>

<body>
    <?php
        session_start();
        include('verifica_login.php');
    ?>

    <section id="tela">
        <section class="cabecalho">
                <h1 class="titulo">Login</h1>
        </section>

		<h4 id="invalido"></h4>
		
        <section>
			<form name="formulario" action="login.php" method="POST">
                <p>Usuário: <input id="username" class="texto" type="text" name="username" required/></p>
				<p>Senha: <input id="senha" class="texto" type="password" name="senha" required></p>
			    <input class="normal" type="submit" value="LOGIN"/><br>
            </form>
        </section>
        
		<button class="normal" type="button" onclick="window.location.href='cadastro.html'">CADASTRAR</button>
    </section>

</body>
</html>