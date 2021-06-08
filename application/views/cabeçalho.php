<header>  
<div class="container" id="menu" >   
	<nav  class="navbar navbar-expand-lg navbar-dark  ">
   		<div class=" col-md-2" id="logo">
			<img src="<?=base_url()?>/assets/Imagens/logo2.jpeg" > 
		</div>
				
				<!--<a href="<?= base_url()?>index.php/inicial/registrar"><button id="botao-cadastrar1" type="button" class="btn btn-dark btn-sm">Registrar</button></a>
				<a href="<?=base_url()?>index.php/usuario/removeUsuario"><button id="botao-cadastrar2" class="btn btn-dark btn-sm">excluirUsuario<i class="fas fa-sign-in-alt"></i></button></a>-->
				<?php	
					if(empty($_SESSION['usuario'])){
				?>
				<?php
					}else{
						?>
						<h6>Bem vindo <br><?=$_SESSION['usuario'];?></h6>
						<a href="<?= base_url()?>index.php/usuario/logout"><button id="botao-cadastrar1" type="button" class="btn btn-dark btn-sm">Sair</button></a>
						<?php
					}
				?>
		<ul class="navbar=nav ml-auto">
			<li class="nav-item"> 
				<a lass="nav-link" href="<?= base_url()?>index.php/inicial">Home</a>
			</li>
			<li class="nav-item"> 
				<a lass="nav-link" href="<?= base_url()?>index.php/usuario/login">
					<button id="botao-login" type="button" class="btn btn-dark btn-sm">  
						<img id="image-login" src="<?=base_url()?>/assets/Imagens/iconeentrar.png" > 
					</button>
				</a>
			<li class="nav-item"> 
				<a lass="nav-link"href="<?= base_url()?>index.php/inicial/registrar">
					<button id="botao-cadastrar" type="button" class="btn btn-dark btn-sm">Cadastre-se	</button>
				</a>
			</li>
			<li class="nav-item"> 
				<a lass="nav-link"href="<?= base_url()?>index.php/produto/cadastroProduto">
					<button id="botao-cadastrar" type="button" class="btn btn-dark btn-sm">Cadastrar Produto</button>
				</a>
			</li>
			<li class="nav-item"> 
				<a  href="<?= base_url()?>index.php/usuario/listar">Listar</a>
			</li>
				
		</ul>	
		<form class="form-inline  ml-auto" 	id="form-buscar">
        	<input class="buscar" type="search" placeholder="" aria-label="Search">
       	    <button class="botao-buscar" type="submit">Buscar</button>
    	</form>
   
                

     </div>	

	</nav>
</div>
</header>
<body>
<div class="container">


