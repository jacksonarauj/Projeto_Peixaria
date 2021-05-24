
<h1>
Cadastrar Produto

</h1>

<div id="container">
	<center>
		<form action='<?= base_url()?>produto/cadastroProduto' method='post'>
			<br>			
			<input type="text" name="nome" placeholder="Nome">
			<br>
			<input type="text" name="precokg" placeholder="Preco por KG">
			<br>
			<input type="text" name="habitat" placeholder="Habitat">
			<br>
			<input type="submit" name="btn_enviar" value="Registrar">
			<a href="<?= base_url()?>inicial">Voltar</a>
			
		</form>
		
	</center>	
</div>




</body>
</html>