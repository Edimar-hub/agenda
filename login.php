<div class="flex-center">
	<header class="masthead">
		<div id="logreg-forms">
		    <form action="index.php" method="POST">
		    	<div class="estreito">
	    			<!-- <img src="media/imagens/logo.jpg" class="img" alt="logo"> -->
	    			<input type="text" id="inputEmail" class="form-control" name="usuario" placeholder="Usuário" required="" autofocus="">
		        	<input type="password" id="inputPassword" class="form-control" name="senha" placeholder="Senha" required="">		        	
		        </div>
		        <button class="btn btn-primary btn-block" type="submit" name="login"><b>ENTRAR</b></button>
				<?php
					include("conexao/bd.php"); 
					if(isset($_POST['login'])){
						$usuario = mysqli_real_escape_string($mysqli, $_POST['usuario']);
						$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);
						$senha = SHA1($senha);
						$sel_user = "select * from usuarios where usuario='$usuario' AND senha='$senha'";
						$run_user = mysqli_query($mysqli, $sel_user);
						$check_user = mysqli_num_rows($run_user);
						if($check_user>0){
							$_SESSION['usuario']=$usuario;
							header ("location: home.php");
						}else{
							echo '<script type="text/javascript">
							    $(window).load(function() {
							      $("#erro").modal("show");
							    });
							  </script>';
						}
					}
				?>
			</form>
			<div class="modal fade" id="erro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Erro de autenticação, tente novamente!</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-danger" style="padding: 5px;font-size: 20px" data-dismiss="modal">Ok</button>
			      </div>
			    </div>
			  </div>
			</div>	
		</div>
	</header>
</div>