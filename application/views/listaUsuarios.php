<div class="container">
	<center>
		<table class="table" style="margin-left: 30px;max-width: 700px">
			<th>ID</th>
			<th>Nome</th>
			<th>Email</th>
			<th>Editar</th>
			<th>Excluir</th>
		<?php foreach ($usuarios as $usuario) {		?>

			<tr>
				<td>
				#<?= $usuario['id'] ?>
				</td>
				<td>
					<?= $usuario['nome'] ?>
				</td>
				<td>
					<?= $usuario['email'] ?>
				</td>
				<td>
					<a href="<?=base_url()?>usuario/editar/<?= $usuario['id'] ?>">
						<input class="btn btn-primary btn-sm" type="button" name="editar" value="Editar">
					</a>
				</td>
				
				<td>
					<a href="<?=base_url()?>index.php/usuario/removeUsuario/<?= $usuario['id'] ?>">
						<input class="btn btn-danger btn-sm" type="button" name="excluir" value="Excluir">
					</a>
				</td>
			</tr>
		<?php } ?>
		</table>
	</center>

</div>







