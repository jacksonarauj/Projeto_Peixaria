<center>
<h1>
	<?php 
		if (!isset($email)) {
			$email = "";
			echo "CADASTRAR";
		}else{
			echo "EDITAR";
		}

	?>
	

</h1>

	<div id="container">
		<?php
			if (!isset($nome)) { 
			echo	"<form action='index.php/inicial/receber' method='post'>";
		}else{

			echo "<form action='../../usuario/editar/".$id."' method='post'>";

		}
	?>
			<input type="text" name="nome" placeholder="nome"      value="<?= isset($nome) ? $nome : "" ?>" required>
			</br>
			
			<input type="text" name="email" placeholder="email" value="<?= $email?>">
			<?php if($erro) {?>
				<br><small>email já utilizado</small>
			<?php	}?>
			</br><input type="password" name="senha" placeholder="senha" value="<?= isset($senha) ? $senha : "" ?>">

			</br><input type="submit" name="btn_enviar" value="<?= isset($nome) ? "ok" : "salvar" ?>">
		</form>
	</div>
</center>









</body>
</html>