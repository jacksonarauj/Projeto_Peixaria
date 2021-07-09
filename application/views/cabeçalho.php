<header>
	<div class="container-fluid d-flex mt-3" id="cabeçalho">
		<div class="row col-12">
			<div class=" d-flex">
				<div class="d-block col-md-2 col-lg-2 position-relative" id="logo">
					<img src="<?= base_url() ?>/assets/Imagens/logo2.jpeg" id="logo_img">
				</div>

				<div class="divNav d-block col-md-8 col-lg-8">
					<nav class="navbar navbar-expand-lg navbar-dark ">
						<!--<a href="<?= base_url() ?>index.php/inicial/registrar"><button id="botao-cadastrar1" type="button" class="btn btn-dark btn-sm">Registrar</button></a>
					<a href="<?= base_url() ?>index.php/usuario/removeUsuario"><button id="botao-cadastrar2" class="btn btn-dark btn-sm">excluirUsuario<i class="fas fa-sign-in-alt"></i></button></a>-->
						<ul class="" id="menu_principal">
							<li class="nav-item">
								<a href="<?= base_url() ?>index.php/inicial" class="link_home">Home</a>
							</li>
							<li class="nav-item">
								<a class="link_home" href="<?= base_url() ?>index.php/usuario/listar">Listar</a>
							</li>
							<li class="nav-item">
								<a href="<?= base_url() ?>index.php/usuario/listar">Listar</a>
								<a class="link_home" href="<?= base_url() ?>index.php/usuario/cabecalho_teste">Cabeçalho Teste </a>

							</li>
						</ul>
					</nav>

					<ul>

					</ul>
				</div>

				<div class="areaUser d-block col-md-2 col-lg-2">
					<div class="fotoUser">

					</div>
					<div class="menuUser d-block">
						<!--If para verificar se o usuario está logado ou não -->
						<?php
						if (empty($_SESSION['usuario'])) {
						?>
							<!--Se o usuário não estiver logado, é mostrado o o login e cadastre-se -->
							<a href="<?= base_url() ?>index.php/usuario/login" class="link_home">
								<button id="botao-login" type="button" class="btn btn-dark btn-sm">
									<img id="image-login" src="<?= base_url() ?>/assets/Imagens/iconeentrar.png">
								</button>
							</a>

							<a href="<?= base_url() ?>index.php/inicial/registrar" class="link_home">
								<button id="botao-cadastrar" type="button" class="btn btn-dark btn-sm mt-2">Cadastre-se </button>
							</a>

						<?php
							//Caso o usuário esteja logado, é mostrado o nome dele e o botão sair
						} else {
						?>

							<!--<h6>Bem vindo <br><?= $_SESSION['usuario']; ?></h6>-->
							<a href="<?= base_url() ?>index.php/usuario/logout" class="link_home"><button id="botao-cadastrar1" type="button" class="btn btn-dark btn-sm">Sair</button></a>


						<?php
						}
						?>
						<!--Fim Botões Login e Cadastrar -->
						<!-- -->

					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<body>
	<div class="container">