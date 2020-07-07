<div class="col-md-12">
	<div class="col-md-10 titulo">Adicionar Usuários
</div>
<div id="adicionar">
	<form action="<?php echo raiz?>servicosbd/adicionarusuarios.php" method="POST">
		<div class="col-md-4 item">
			<div class="texto">
				Nome*:
			</div>
			<input type="text" required name="nome">
		</div>
		<div class="col-md-4 item">
			<div class="texto">
				Usuário:
			</div>
			<input type="text" name="usuario" placeholder="" required>
		</div>
		
		<div class="col-md-4 item">
			<div class="texto">
				Senha:
			</div>
			<input type="password" class="" name="senha" placeholder="***">
		</div>
		<div class="col-md-12" style="margin-top: 20px; text-align: center">
			<button type="submit" class="botao_adicionar">Adicionar</i></button>
		</div>
	</form>


</div>