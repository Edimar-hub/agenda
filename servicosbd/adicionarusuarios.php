<?php
	
	include("../conexao/bd.php");

	$nome = $_POST["nome"];
	$usuario = $_POST["usuario"];
	$senha = SHA1($_POST["senha"]);
	
	$query = "insert into `usuarios` (`nome`,`usuario`,`senha`) VALUES ('$nome','$usuario','$senha')";
	if($mysqli->query($query)){
		echo '<script type="text/javascript">
			window.location.href="../usuarios";
			</script>';
	}else{
		echo '<script type="text/javascript">
			alert("Não foi possível adicionar o usuário! Tente novamente!");
			window.location.href="../usuarios";
			</script>';

		
	}
?>