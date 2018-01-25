<?php 
	
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);
	$enviar = $_POST['enviar'];

	$connect = mysql_connect("localhost", "root","");
	$db = mysql_select_db("pfc_db");

	if(isset($entrar)){

		$verifica = mysql_query("SELECT * FROM tabelaPFC WHERE email = '$email' AND senha = '$senha'");
		if (mysql_num_rows($verifica) <= 0) {
			
			echo "<script language = 'javascript' type = 'text/javascript'> alert ('Email e/ou senha incorretos');window.location.href = 'index.html';</script> ";
			die();

		}else{
			setcookie("email",$email);
			header("Location:index.php");
		}
	
 ?>