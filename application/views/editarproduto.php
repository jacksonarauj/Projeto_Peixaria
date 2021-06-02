

        <class="table">
		<th> -</th>
		<th>ID</th>
		
		<th>Nome</th>
		
		<th>Preco por KG</th>
		
		<th>Habitat</th>
		
		<th>&nbsp;</th>
	<!--<?php foreach($peixes as $peixe) {		?>-->

		<tr>
			<td>
				<?= $peixe['id_Peixe'] ?>
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
					<a href="../produto/editar/<?= $peixe['id_Peixe'] ?>">
							<input type="button" name="editar" value="editar">
		          </a>
		      </td>
		</tr>
	<!--<?php } ?>-->
	</table>












