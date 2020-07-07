<?php
	
	include("../conexao/bd.php");
	$id = $_GET['valorid'];
	
	$query = "delete from `usuarios` where `id`='$id'";

	if($mysqli->query($query)){
		echo "Atualizou";
	}else{
		echo "Erro";
	}
	echo '<script type="text/javascript">
	window.location.href="../usuarios";
	</script>';
?>