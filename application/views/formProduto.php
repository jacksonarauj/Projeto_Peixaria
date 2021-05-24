

<body>
<header>
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
				<h6>HOME</h6>s
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

<div class="coluna-b">
			<div id="formulario-cadastro-produto"><center>
					<form action='<?= base_url()?>produto/cadastroProduto' method='post'>
						<br>			
						<input type="text" name="nome" placeholder="Nome" style="border: 2px outset #1E90FF;">
						<br></br>
						<input type="text" name="precokg" placeholder="Preco por KG" style="border: 2px outset #1E90FF;">
						<br></br>
						<input type="text" name="habitat" placeholder="Habitat" style="border: 2px outset #1E90FF;">
						<br></br>
						<input type="submit" name="btn_enviar" value="Registrar"style="border: 3px outset #1E90FF;position:relative;left:-10px;top:-2px">
						
						<a href="<?= base_url()?>inicial"><button id="botao-cadastrar6"><font>Voltar</font></button></a>
					</form>	
			</div>
    
</div>

