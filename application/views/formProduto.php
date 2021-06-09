

			<div id="formulario-cadastro-produto">
					<form action='<?= base_url()?>index.php/produto/validarCadastroProduto' method='post'>
						<br>			
						<input type="text" name="nome" placeholder="Nome" style="border: 2px outset #1E90FF;"value="<?= isset($nome) ? $nome : "" ?>" required>
						<br></br>
						<input type="text" name="precokg" placeholder="Preco por KG" style="border: 2px outset #1E90FF;" value="<?= isset($precokg) ? $precokg : "" ?>" required>
						<br></br>
						<input type="text" name="habitat" placeholder="Habitat" style="border: 2px outset #1E90FF;"value="<?= isset($habitat) ? $habitat : "" ?>" required>
						<br></br>
						<input type="submit" name="btn_enviar" value="Registrar"style="border: 3px outset #1E90FF;position:relative;left:-10px;top:-2px">
						
						<a href="<?= base_url()?>inicial"><button id="botao-cadastrar6"><font>Voltar</font></button></a>
					</form>	
			</div>

