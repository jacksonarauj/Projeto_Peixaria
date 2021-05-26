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

<center>
	<h1>
		<?php 
			if (isset($email)!==TRUE) {
				$email = "";
				echo "CADASTRAR";
			}else{
				echo "EDITAR";
			}

		?>
	

	</h1>

	<div id="container">
		<form action='inicial/receber' method='post'>
			<input type="text" name="nome" placeholder="nome"      value="<?= isset($nome) ? $nome : "" ?>" required>
			</br>
			
			<input type="text" name="email" placeholder="email" value="<?= $email?>">
			
			</br><input type="password" name="senha" placeholder="senha" value="<?= isset($senha) ? $senha : "" ?>">
			
			</br><input type="int" name="status" placeholder="Status"      value="<?= isset($Status) ? $Status : "" ?>" required>

			</br><input type="submit" name="btn_enviar" value="<?= isset($nome) ? "ok" : "salvar" ?>">
		</form>
	</div>
</center>









	


