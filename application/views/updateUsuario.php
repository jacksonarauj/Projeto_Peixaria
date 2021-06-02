<div id="formulario-cadastro-produto"><center>
         <form action='<?php echo base_url()?>index.php/usuario/alterarDados' method='post'>
                  <br>        
                  <input type="text" name="nome" placeholder="Nome" value="<?php echo $nome;?>" style="border: 2px outset #1E90FF;">
                  <br></br>
                  <input type="text" name="email"  value="<?php echo $email;?>" style="border: 2px outset #1E90FF;">
                  <br></br>
                  <input type="password" name="senha"  value="<?php echo $senha;?>" style="border: 2px outset #1E90FF;">
                  <br></br>
                  <input type="hidden" name="id"  value="<?php echo $id;?>" style="border: 2px outset #1E90FF;">
                  <br></br>
                  
                  
                  </br><input  type="submit" name="btn_enviar" value="<?= isset($nome) ? "mudar" : "salvar" ?>">

                  
         </form>  