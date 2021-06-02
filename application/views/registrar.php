<!--
	<div class="coluna-a">		 
		<center>
			<?php //echo form_open('inicial/receber','id="sign"')?>
			<form class="form_cadasrto_usuario" action='<?= base_url()?>index.php/inicial/receber' method='Post'>

			 <br>			
				<input class="campo_a" type="text" name="nome" id="name"placeholder="nome:">
			 <br>
				<input class="campo_a" type="text" name="email" id="email" placeholder="email:">
			 <br>
				<input class="campo_a" type="password" name="senha" id="senha" placeholder="senha:">
			 <br>
				<input type="submit" class="boton" name="btn_enviar" id="cadastrar" value="Registrar" >
				<a href="<?php echo base_url()?>index.php/usuario/login" class="boton" id="voltar" style="color:black">Voltar</a>	
		    <?php //echo form_close();?>		
			</form>		
		</center>	
	</div>

-->


	<h1>
		<?php 
			if (isset($email)!==TRUE) {
				$email = "";
				?><center><?php
				echo "Formulário de Cadastro";?>
				</center><?php
			}else{
				echo "EDITAR";
			}

		?>
	

	</h1>

<center>
<form action='<?php echo base_url()?>index.php/inicial/receber' method='post' style="max-width:300px;">
	<div class="form-group">
		<label for="nome_registro"><strong>Nome</strong></label>
		<input id="nome_registro" class="form-control" type="text" name="nome" placeholder="Nome"      value="<?= isset($nome) ? $nome : "" ?>" required>
	</div>
			
	<div class="form-group">
		<label for="email_registro"><strong>Email</strong></label>
		<input id="email_registro" class="form-control" type="text" name="email" placeholder="Email" value="<?= $email?>">
	</div>
			
	<div class="form-group">
		<label for="senha_registro"><strong>Senha</strong></label>
		<input id="senha_registro" class="form-control" type="password" name="senha" placeholder="Senha" value="<?= isset($senha) ? $senha : "" ?>">
	</div>
	<br>	
			
	<input type="submit" class="btn btn-primary" name="btn_enviar" value="<?= isset($nome) ? "ok" : "Cadastrar" ?>">
</form>
	

</center>








	


