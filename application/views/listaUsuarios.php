<center>
	<table>
		<th>ID</th>
		<th>Nome</th>
		<th>Email</th>
		<th>&nbsp;</th>
	<?php foreach ($usuarios as $usuario) {		?>

		<tr>
			<td>
			#<?= $usuario['id_Usuario'] ?>
			</td>
			<td>
				<?= $usuario['nome'] ?>
			</td>
			<td>
				<?= $usuario['email'] ?>
			</td>
			<td>
				<a href="<?=base_url()?>usuario/editar/<?= $usuario['id_Usuario'] ?>">
					<input type="button" name="editar" value="Editar">
				</a>
			</td>
			
			<td>
				<a href="<?=base_url()?>usuario/removeUsuario/<?= $usuario['id_Usuario'] ?>">
					<input type="button" name="editar" value="Excluir">
				</a>
			</td>
		</tr>
	<?php } ?>
	</table>
</center>




<?= base_url()?>




