
<h1>
LOGIN	

</h1>

<div id="container">
	<center>
		<form action='<?= base_url()?>usuario/login' method='post'>
			<br>
			<input type="text" name="email" placeholder="email">
			<br><br><input type="password" name="senha" placeholder="senha">

			<br><br>
			<input type="submit" name="btn_enviar" value="Enviar">
		</form>
		
	</center>
	
		<a href="<?= base_url()?>/inicial/registrar">Registrar-se</a>
	
</div>




</body>
</html>