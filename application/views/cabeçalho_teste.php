<header>
	<div  class="container">
		<div class="row">
			<div class="col-md-6">
				<ul class="nav" id="cabecalho">
					<div class="" id="logo">
						<img src="<?=base_url()?>/assets/Imagens/logo2.jpeg" id="logo_img"> 
					</div>
					<li class="nav-item">
						<a class="link_home nav-link" href="<?= base_url()?>index.php/inicial" >Home</a>
					</li>

					<li class="nav-item"> 
						<a class="link_home nav-link" href="<?= base_url()?>index.php/usuario/listar">Listar</a>
					</li>
				</ul>
			</div>
			<!--If para verificar se o usuario está logado ou não -->
			<div class="col-md-6" id="area_usuario">
				<ul class="nav navbar-nav navbar-right" id="cabecalho">
					<?php	
					if(empty($_SESSION['usuario'])){
						?>
						<!--Se o usuário não estiver logado, é mostrado o o login e cadastre-se -->
						<a href="<?= base_url()?>index.php/usuario/login" class="link_home nav-link">
							<button id="botao-login" type="button" class="btn btn-dark btn-sm">  
								<!--<img id="image-login" src="<?=base_url()?>/assets/Imagens/iconeentrar.png" > -->Login
							</button>
						</a>	
						<li class="nav-item"> 
							<a href="<?= base_url()?>index.php/inicial/registrar" class="link_home nav-link">
								<button id="botao-cadastrar" type="button" class="btn btn-dark btn-sm">Cadastre-se </button>
							</a>
						</li>

						<?php
				//Caso o usuário esteja logado, é mostrado o nome dele e o botão sair
					}else{						
						?>						
						<li class="nav-item">	
							<!--<h6>Bem vindo <br><?=$_SESSION['usuario'];?></h6>-->
							<a href="<?= base_url()?>index.php/usuario/logout" class="link_home nav-link"><button type="button" class="btn btn-dark btn-sm">Sair</button></a>
						</li>

						<?php
					}
					?>
					<!--Fim Botões Login e Cadastrar -->
					<!-- -->
				</ul>
			</div>
		</div>
	</div>
</header>
<body>
	<div class="container">


