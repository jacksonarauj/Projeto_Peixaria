
 <div class="center">					  
     	                  
   </div>
					 <div class="icone-entrar2" style="width:80px;height:800px;position:absolute; top:130px;left:1270px;">
						 <image src="<?=base_url()?>/assets/Imagens//iconeentrar.png">
						  <a href="<?= base_url()?>inicial/registrar"><button id="botao-cadastrar1"><font>Cadastrar-se</font></button></a>
						<a href="login.html""><button id="botao-cadastrar2"><font>Entrar</font></button></a>

					  </div>		
			<div class="coluna-b">
			<div id="formulario-login">
				<center>
					<form action='<?=base_url()?>index.php/usuario/validarlogin' method='post'>
						<br>
						<input type="text" name="email" placeholder="email"style="border: 2px outset #1E90FF;">
						<br><br><input type="password" name="senha" placeholder="senha"style="border: 2px outset #1E90FF;">

						<br><br>
						<input type="submit" name="btn_enviar" value="Enviar"style="border: 3px outset #1E90FF;position:relative;left:63px;">
					</form>
					
				</center>
					<a href="<?= base_url()?>index.php/usuario/validarlogin"><button id="botao-cadastrar5"><font>fffff</font></button></a>
				
			</div>
			
</div>

