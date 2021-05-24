<center>
	<h1>
		<?php 
			if (isset($email)!==TRUE) {
				$email = "";
				echo "CADASTRAR";
			}else{
				echo "EDITAR";
			}

		?>
	

	</h1>

	<div id="container">
		<form action='index.php/inicial/receber' method='post'>
			<input type="text" name="nome" placeholder="nome"      value="<?= isset($nome) ? $nome : "" ?>" required>
			</br>
			
			<input type="text" name="email" placeholder="email" value="<?= $email?>">
			
			</br><input type="password" name="senha" placeholder="senha" value="<?= isset($senha) ? $senha : "" ?>">
			
			</br><input type="int" name="status" placeholder="Status"      value="<?= isset($Status) ? $Status : "" ?>" required>

			</br><input type="submit" name="btn_enviar" value="<?= isset($nome) ? "ok" : "salvar" ?>">
		</form>
	</div>
</center>








