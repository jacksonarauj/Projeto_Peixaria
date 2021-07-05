
	<tr>
		<td>
			<?php if(isset($voltar)) 
					if ($voltar) {
						echo "<a href='index.php/usuario/listar'>
								<input type='button' name='voltar' value='voltar'>
							</a>";
					}



 
			?>
			<a href="<?=base_url()?>usuario/listar">
				<input type="button" name="editar" value="Listar Usuários">
			</a>
			<a href="<?=base_url()?>produto/listar">
				<input type="button" name="Listar Peixes" value="Listar Peixes">
			</a>
			
			<a href="<?=base_url()?>inicial/cadastrarProduto">
				<input type="button" name="cadastrarProduto" value="Cadastrar Produto">
			</a>
		</td>
	</tr>

</table>










	