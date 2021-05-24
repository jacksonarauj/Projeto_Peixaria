
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
				<a href="<?php echo base_url('usuario/loguin')?> " class="boton" id="voltar" style="color:black">Voltar</a>	
		    <?php //echo form_close();?>		
			</form>		
		</center>	
	</div>

	


