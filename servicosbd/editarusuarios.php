<?php
	
	include("../conexao/bd.php");
	$id = $_POST['idaltera'];
	$nome = $_POST["nome"];
	$usuario = $_POST["usuario"];
	$senha = SHA1($_POST["senha"]);
	$nova_senha = SHA1($_POST["senha"]);
	if($nova_senha != "da39a3ee5e6b4b0d3255bfef95601890afd80709"){
		$senha = $nova_senha;
	}
	
	$query = "update `usuarios` set `nome` = '$nome',`usuario` = '$usuario',`senha` = '$senha' where `id`='$id'";
	if($mysqli->query($query)){
		echo '<script type="text/javascript">
			window.location.href="../usuarios";
			</script>';
	}else{
		echo '<script type="text/javascript">
			alert("Não foi possível editar o cliente!");
			window.location.href="../usuarios";
			</script>';

		
	}
?>