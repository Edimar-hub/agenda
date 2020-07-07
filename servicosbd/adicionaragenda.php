<?php
	
	include("../conexao/bd.php");


	$nome_cliente = $_POST["nome_cliente"];
	$query_clientes = "select * from `clientes` where `nome` like '$nome_cliente' ";
	$resultado_clientes = $mysqli->query($query_clientes);
	$row = $resultado_clientes->fetch_assoc();
	$id_cliente = $row["id"];
	
	$start = $_POST["start"];
	$hr_inicio = $_POST["hr_inicio"];
	$hr_fim = $_POST["hr_fim"];
	$forma_pagamento = $_POST["forma_pagamento"];
	//usa explode pra explodir o que tem na variavel
	$dt_inicio = explode("/", $start);
	//pega as pocicoes e colocam dentro de suas respectiveis variaveis
	$ano = $dt_inicio[2];
	$mes = $dt_inicio[1];
	$dia = $dt_inicio[0];
	//acrescenta :00 (segundos) no valor de horas
	$hr_inicio = "$hr_inicio".":00";
	//concatena a data no novo estilo com traços mais a hora virando datetime
	$start = "$ano"."-"."$mes"."-"."$dia"." "."$hr_inicio";

	$hr_fim = "$hr_fim".":00";
	$end = "$ano"."-"."$mes"."-"."$dia"." "."$hr_fim";	
	
	$valor = $_POST["valor"];

	$status = $_POST["status"];
	if($status == "Aguardando Início"){
		$color = "blue";
	}
	if($status == "Em Produção"){
		$color = "#b3ce08";
	}
	if($status == "Finalizado/Pronto"){
		$color = "green";
	}
	if($status == "Cancelado"){
		$color = "red";
	}
	if($status == "Orçamento"){
		$color = "brown";
	}

	$nome_cliente = $nome_cliente." - Status: ".$status;


	$procedimento = $_POST["procedimento"];
    $query = "insert into `agenda` (`title`,`start`,`end`,`url`,`allDay`,`status`,`id_cliente`,`tipo_evento`,`procedimento`,`color`,`forma_pagamento`,`valor`) 
    VALUES ('$nome_cliente','$start','$end','','','$status','$id_cliente','$tipo_evento','$procedimento','$color','$forma_pagamento','$valor')";
	if($mysqli->query($query)){

		$ultimo_id = mysqli_insert_id($mysqli);
		$url = "agenda/editar/"."$ultimo_id";
		$query2 = "update `agenda` set `url`='$url' where `id`='$ultimo_id'";
		$mysqli->query($query2);
		
		echo '<script type="text/javascript">
			window.location.href="../agenda";
			</script>';
	
	}else{
		echo '<script type="text/javascript">
			alert("Não foi possível adicionar a consulta! Tente novamente!");
			window.location.href="../agenda/adicionar";
			</script>';
	}
	
?>