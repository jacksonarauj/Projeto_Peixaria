


   <div class="center">
					  
      <nav>
	    <ul>
		     <div class="logo">
		           <img src="image/logo2.jpeg" >
		     </div> 
			 <div id="bodyAll">
				<div class="bem-vindo">
					<h3>BEM VINDO A PEXARIA LAMBARI</h3>
					
				</div>
			 </div>
			 <div class="menu">
			     <li><a href="caminho">
				<h6>HOME</h6>
			     </li></a>
			     <li><a href="caminho">
				<h6>PEIXES</h6>
			     </li></a>
			     <li><a href="caminho">
				<h6>FRUTOS DO MAR</h6>
			     </li></a>
			 </div>
        </ul>
	  </nav>
	                  
   </div>
					 <div class="icone-entrar2" style="width:100px;height:80px;position:absolute; top:130px;left:1250px;">
						 <image src="image/iconeentrar.png">
						 <b style="position:relative;top:20px;left:-30px;">Bem Vindo!</b>
							   <tr>
							     <td><b style="position:relative;top:20px;left:-30px;">ADM</b></td>
							   </tr>
					  </div>
</header>


<div class="coluna-b">



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

	
</div>











