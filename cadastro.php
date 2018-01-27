<?php
    session_start(); 
    
    if(!isset($_SESSION["auth"])) {
        header("location:../index.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Administração de Dados</title>
</head>
<body>

	<div class="container">
	<h2>Cadastro de Membros</h2>
	<form action="routes/routes.php" method="POST">
		Nome <input type="text" name="nome" placeholder="Nome"/>
		<br>
		PFC Total <input type="text" name="pfc"/>
		<br>Imagem<input type="file" name="imagem" ><br>
		<br>
		<input type="submit" name="registerAttempt" value="Cadastrar"/>
	</form>

	<h2>Cadastro de Projetos</h2>
	<form method="POST">
		Nome do Projeto <input type="text" name="projeto" id="projeto"><br>
		<br>Pontos do Projeto<input type="text" name="pontos" id="pontos">

	</form>	
	<br><input type="submit" name="enviar" value="Cadastrar" id="enviar">
	</div>

	<div>
		<h3>Alterar Membro</h3>
		<p>
			<form action="routes/routes.php" method="POST">

				Informe o ID <input type="text" name="id" value=""/>
				<?php 
					echo"<form method='POST' action='../routes/routes.php'>
							<input type='submit' name='searchMember' value='Buscar'/>
						</form>"
				?>
				<br>
				Nome <input type="text" name="nome" value=""/>
				<br>
				PFC <input type="text" name="pfc"/>
				<br>
				<input type="submit" name="changeMember" value="Alterar"/>
			</form>
		</p>
	</div>

	<br>

	<?php
        if(isset($_SESSION["auth"]) && $_SESSION["auth"] == "true") {
            echo "<h3>Deslogar</h3> <form method='POST' action='../routes/routes.php'>
			<input type='submit' name='logoutAttempt' value='Logout'/>
		</form>";
        }
    ?>
</body>
</html>