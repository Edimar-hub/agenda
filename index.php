<?php
	session_start();
	include("conexao/bd.php"); 
	define("raiz","/agenda/");
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Titulo" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>&Aacute;rea Restrita</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-dialog.min.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="media/css/style.css">
		<link rel="stylesheet" href="media/css/login.css">
		<link rel="icon" type="image/ico" href="media/imagens/logo.png" /> 
		
	</head>
	<body>
		<script type="text/javascript" src="media/js/jquery-1.11.2.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
  		<script type="text/javascript" src="bootstrap/js/bootstrap-dialog.min.js"></script>
		<article>
				<?php include("login.php"); ?>
				
			
			</article>
					
	</body>
</html>