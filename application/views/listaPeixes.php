
<div class="container-fluid">
	<div class="row col-md-9" id="resultado"></div>
</div>

<script>
	var resultadoBanco = document.getElementById('resultado');
	console.log(resultadoBanco);
	resultado.innerHTML = `
	
	<?php foreach ($peixes as $peixe) {		?>
	
		<div class="card col-md-3 col-3" style="margin:5px; 
		 border-width:3px; border-top-color:#4682B4;  border-right-color:#4682B4">
	
			<!--aquitem que colocar o resultado do banco que futuramente vai trazer as img-->
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

<?php } ?>

	`;

</script>



