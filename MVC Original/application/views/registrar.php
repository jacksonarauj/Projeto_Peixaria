
<h1>
Registrar testando

</h1>

<div id="container">
	<center>
		<form action='<?= base_url()?>inicial/receber' method='post'>
			<br>			
			<input type="text" name="nome" placeholder="nome">
			<br>
			<input type="text" name="email" placeholder="email">
			<br>
			<input type="password" name="senha" placeholder="senha">
			<br>
			<input type="submit" name="btn_enviar" value="Registrar">
			<a href="<?= base_url()?>inicial">Voltar</a>
			
		</form>
		
	</center>	
</div>




</body>
</html>