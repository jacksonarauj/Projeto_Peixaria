<center>
	<table>
		<th>ID</th>
		<th>Nome</th>
		<th>Email</th>
		<th>&nbsp;</th>
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
				<a href="../usuario/editar/<?= $usuario['id'] ?>">
					<input type="button" name="editar" value="editar">
				</a>
			</td>
		</tr>
	<?php } ?>
	</table>
</center>









