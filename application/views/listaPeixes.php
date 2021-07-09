
<div class="container">
    
		
		<table>
			<th>ID</th>
			<th>Nome</th>
			<th>Preco por KG</th>
			<th>Habitat</th>
			<th>&nbsp;</th>
			<tbody id="resultado">
				
			</tbody>
			</table>
	
</div>
</div>

<script>
	var resultadoBanco = document.getElementById('resultado')
	console.log(resultadoBanco)

	resultado.innerHTML = `
	
	<?php foreach ($peixes as $peixe) {		?>
		<div class="card">
		<div class="card-body">
		
		<tr>
			<td>
				#<?= $peixe['id_Peixe'] ?>
			</td>
			<td>
				<?= $peixe['nome'] ?>
			</td>
			<td>
				<?= $peixe['precokg'] ?>
			</td>
			<td>
				<?= $peixe['habitat'] ?>
			</td>
			<td>
				
				<a href="produto/editar/<?= $peixe['id_Peixe'] ?>">
					<input type="button" name="editar" value="editar">
				</a>
			</td>
		</tr>
		<br>
		</tr>
		</div>
</div>
<?php } ?>

	`

</script>



