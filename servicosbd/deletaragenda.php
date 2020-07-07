<?php
	
	include("../conexao/bd.php");
	$id = $_GET['valorid'];
	
	$query = "delete from `agenda` where `id`='$id'";

	if($mysqli->query($query)){
		echo "Atualizou";
	}else{
		echo "Erro";
	}
	echo '<script type="text/javascript">
	window.location.href="../agenda";
	</script>';
?>