
   <div class="center">
					  
      <nav>
	    <ul>
		     <div class="logo">
		           <img src="image/logo2.jpeg" >
		     </div> 
			 <div id="bodyAll">
				<div class="bem-vindo">
					<h3>BEM VINDO A PEXARIA LAMBARI</h3>
					<h4> </h4>
					
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
					 <div class="icone-entrar" style="width:100px;height:100px;position:absolute; top:130px;left:1270px;">
						 <image src="image/iconeentrar.png">
						        <a href="registrar.html""><button id="botao-cadastrar1"><font>Cadastrar-se</font></button></a>
						<a href="login.html""><button id="botao-cadastrar2"><font>Entrar</font></button></a>
					 </div>
</header>

<div class="conteudo"> 
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












