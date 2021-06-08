<header>  
<div class="container" id="cabeçalho" >   
	<nav  class="navbar navbar-expand-lg navbar-dark  ">
   		<div class="" id="logo">
			<img src="<?=base_url()?>/assets/Imagens/logo2.jpeg" id="logo_img"> 
		</div>
				
				<!--<a href="<?= base_url()?>index.php/inicial/registrar"><button id="botao-cadastrar1" type="button" class="btn btn-dark btn-sm">Registrar</button></a>
				<a href="<?=base_url()?>index.php/usuario/removeUsuario"><button id="botao-cadastrar2" class="btn btn-dark btn-sm">excluirUsuario<i class="fas fa-sign-in-alt"></i></button></a>-->

		<ul class="" id="menu_principal">
			<li class="nav-item"> 
				<a href="<?= base_url()?>index.php/inicial" class="link_home">Home</a>
			</li>
			<!--Início Botões Login e Cadastrar -->
			


			<li class="nav-item"> 
				<a class="link_home" href="<?= base_url()?>index.php/usuario/listar">Listar</a>
			</li>
			<li class="nav-item"> 
<<<<<<< HEAD
				<a lass="nav-link"href="<?= base_url()?>index.php/produto/cadastroProduto">
					<button id="botao-cadastrar" type="button" class="btn btn-dark btn-sm">Cadastrar Produto</button>
				</a>
			</li>
			<li class="nav-item"> 
				<a  href="<?= base_url()?>index.php/usuario/listar">Listar</a>
=======
				<a class="link_home" href="<?= base_url()?>index.php/usuario/cabecalho_teste">Cabeçalho Teste</a>
>>>>>>> 5bc06cb2490796d1aa8f819ef3e51e744b366afd
			</li>
					<form class="form-inline  ml-auto" 	id="form-buscar">
        	<input class="buscar" type="search" placeholder="" aria-label="Search">
       	    <button class="botao-buscar" type="submit">Buscar</button>
    	</form>
				<li class="nav-item" id="area_usuario"> 
				<!--If para verificar se o usuario está logado ou não -->
					<?php	
						if(empty($_SESSION['usuario'])){
					?>
					<!--Se o usuário não estiver logado, é mostrado o o login e cadastre-se -->
					<a href="<?= base_url()?>index.php/usuario/login" class="link_home">
						<button id="botao-login" type="button" class="btn btn-dark btn-sm">  
							<img id="image-login" src="<?=base_url()?>/assets/Imagens/iconeentrar.png" > 
						</button>
					</a>	
					<li class="nav-item"> 
						<a href="<?= base_url()?>index.php/inicial/registrar" class="link_home">
							<button id="botao-cadastrar" type="button" class="btn btn-dark btn-sm">Cadastre-se	</button>
						</a>
								
				<?php
				//Caso o usuário esteja logado, é mostrado o nome dele e o botão sair
					}else{						
						?>						
						<li class="nav-item">	
							<!--<h6>Bem vindo <br><?=$_SESSION['usuario'];?></h6>-->
							<a href="<?= base_url()?>index.php/usuario/logout" class="link_home"><button id="botao-cadastrar1" type="button" class="btn btn-dark btn-sm">Sair</button></a>
						</li>
					
						<?php
					}
				?>
				<!--Fim Botões Login e Cadastrar -->
				<!-- -->
			</li>

		</ul>	


    	
   
                

     


</div>
</header>
<body>
<div class="container">


