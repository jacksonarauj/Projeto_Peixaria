
<div class="container-fluid">
			<div id="resultado">

		
	</div>

</div>

<script>
	var resultadoBanco = document.getElementById('resultado')
	console.log(resultadoBanco)
	resultado.innerHTML = `
	
	<?php foreach ($peixes as $peixe) {		?>
	    <div class="col-md-3">
		<div class="card">
			<!__aquitem que colocar o resultado do banco que futuramente vai trazer as img__>
				<img src=" " class="card-img-top" ></img>
			<div class="card-body"></div>
			    
				<h4 class="card-title">
					<?= $peixe['nome'] ?>
				</h4>
				<p class="card-text">
				
					<?= $peixe['precokg'] ?>
				
					<?= $peixe['habitat'] ?>
				
					#<?= $peixe['id_Peixe'] ?>
				
				</p>
					<a href="produto/editar/<?= $peixe['id_Peixe'] ?>">
					<input type="button" name="editar" value="editar">
					</a>
				
        </div>
	</div>
</div>
<?php } ?>

	`

</script>



