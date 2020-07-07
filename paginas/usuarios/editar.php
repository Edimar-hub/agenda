<div class="col-md-12">
	<div class="col-md-10 titulo">Editar Usuários
</div>
<?php

	$id = $atual[2];

	$query = "select * from usuarios where `id` = '$id'";
	
	$result = $mysqli->query($query);
	$row = $result->fetch_assoc();
	$nome = $row["nome"];
	$usuario = $row["usuario"];
	
?>
<div id="editar">
	<form action="<?php echo raiz?>servicosbd/editarusuarios.php" method="POST">
		<input type="hidden" name="idaltera" value="<?php echo $id; ?>">
		<div class="col-md-4 item">
			<div class="texto">
				Nome*:
			</div>
			<input type="text" required name="nome" value="<?php echo $nome ?>">
		</div>
		<div class="col-md-4 item">
			<div class="texto">
				Usuário:
			</div>
			<input type="text" name="usuario" placeholder="" required value="<?php echo $usuario ?>">
		</div>
		
		<div class="col-md-4 item">
			<div class="texto">
				Senha:
			</div>
			<input type="password" class="" name="senha" placeholder="***">
		</div>
		<div class="col-md-12" style="margin-top: 20px; text-align: center">
			<button type="submit" class="botao_adicionar">Editar</i></button>
		</div>
	</form>
</div>