<div class="col-md-12">
	<div class="col-md-10 titulo">Usuários</div>
	
	<a href="usuarios/adicionar">

		<div  class="botao clientes col-md-2">
			<div class="icon">
				<i class="ico fa fa-user-plus"></i>
			</div>
			<div class="detalhe">
				<div class="tela">
					Adicionar <br> Usuário
				</div>
			</div>
		</div>
	</a>	
</div>
<div id="lista" class="col-md-12">
	<div class="pesquisa col-md-10">
		<div class="col-md-2 nome_tabela">
			Pesquisar:
		</div>
		<form action="usuarios" method="POST">
			<div class="col-md-12">
				<div class="col-md-1 texto">
					Nome: 
				</div>
				<div class="col-md-4">
					<input type="text" name="nome">
				</div>
				<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
			</form>
		</div>
	</div>
	<table>
		<tr class="titulo">
		
			<td><label>Nome</label></td>
			<td><label>Usuário</label></td>
			
			<td><label>Op&ccedil;&otilde;es</label></td>
		</tr>
		<?php
		if((!empty($_POST))&&(isset($_POST["nome"]))){
			
			$nome_busca = $_POST["nome"];

			$query = "select * from usuarios where `nome` like '%$nome_busca%' order by id desc";
			$result = $mysqli->query($query);
				
		}	
		else{
		
			$query = "select * from usuarios order by id desc";
			$result = $mysqli->query($query);
			
		}
		//mostrar o numero de linhas retornadas
		$num_results = $result->num_rows;
		if($num_results > 0){
			while ($row = $result->fetch_assoc()) {
				$id = $row['id'];
				$nome = $row['nome'];
				$usuario = $row['usuario'];
				
			
		?>
		<tr class="dados">
			<td><?php echo $nome; ?></td>
			<td><?php echo $usuario; ?></td>
			<td>
				<a href="usuarios/editar/<?php echo $id; ?>">
				  	<i class="fa fa-pencil-square-o"></i>	
				</a>
				<a href="<?php raiz ?>servicosbd/deletarusuarios.php?valorid=<?php echo $id; ?>"onClick="return confirm('Tem certeza que deseja deletar?')">
				 	<i class="fa fa-times"></i>
				</a>
			</td>
		</tr>
		<?php
			}
		}
		$result->free();
		$mysqli->close();
		?>
	</table>
	
</div>

