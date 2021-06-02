<div id="formulario-login">	
	<center>
		<form action='<?=base_url()?>index.php/usuario/validarlogin' method='post' style="max-width:300px;">
			<div class="form-group">
				<label for="form_email"><strong>Endereço de email</strong></label>
				<input id="form_email" type="text" name="email" placeholder="email"style="border: 2px outset #1E90FF;" class="form-control">
			</div>	
			
			<div class="form-group">
				<label for="form_senha"><strong>Senha</strong></label>
				<input id="form_senha" type="password" name="senha" placeholder="senha"style="border: 2px outset #1E90FF;" class="form-control">
			</div>	
			
			<input type="submit" name="btn_enviar" value="Enviar"style="border: 3px outset #1E90FF;" class="btn btn-primary">
		</form>	
	</center>		
</div>