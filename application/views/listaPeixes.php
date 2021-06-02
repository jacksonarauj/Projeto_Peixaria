
							<!--JACKSON-->
            <div class="menulateral">
		      <h6>-Especie</h6>
		       <form>
 			    <div class="search">
    			<label for=""  ></label>
    			<div class="col-sm-4">
      			<input placeholder="Especie">
    			</div>
    		    </div>
			   </form>
			    <br></br>
		      <h6>-Valor</h6>
		    	<br></br>
 			   <form>
 			    <div class="search2">
    			<label for=""  ></label>
    			<div class="col-sm-4">
      			<input placeholder="Valor">
    		    </div>
                </div>
			   </form></h6>
			  <h6>-Água Doce ou Salgada</h6>
			   <form>
 			    <div class="search3">
    			<label for=""  ></label>
    			<div class="col-sm-4">
      			<input placeholder="Água Doce ou Salgada">
    			</div>
    		    </div>
			   </form>
			    <br></br>
            </div>
        </div>
<div class="coluna-a">
    <<center>
	<table>
		<th>ID</th>
		<th>Nome</th>
		<th>Preco por KG</th>
		<th>Habitat</th>
		<th>&nbsp;</th>
	<?php foreach ($peixes as $peixe) {		?>

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
				<a href="../produto/editar/<?= $peixe['id_Peixe'] ?>">
					<input type="button" name="editar" value="editar">
				</a>
			</td>
		</tr>
	<?php } ?>
	</table>
</center>
</div>
</div>












