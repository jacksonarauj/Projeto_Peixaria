<div id="formulario-cadastro-produto"><center>
<<<<<<< HEAD
         <form action='<?php echo base_url()?>index.php/usuario/alterarDados' method='post'>
=======
         <form action="<?= base_url()?>index.php/usuario/alterarDados" method="post">
>>>>>>> 25bcd98251db76152292ac4c8c046a044140985b
                  <br>        
                  <input type="text" name="nome" placeholder="Nome" value="<?php echo $nome;?>" style="border: 2px outset #1E90FF;">
                  <br></br>
                  <input type="text" name="email"  value="<?php echo $email;?>" style="border: 2px outset #1E90FF;">
                  <br></br>
                  <input type="password" name="senha"  value="<?php echo $senha;?>" style="border: 2px outset #1E90FF;">
                  <br></br>
                  <input type="hidden" name="id"  value="<?php echo $id;?>" style="border: 2px outset #1E90FF;">
                  <br></br>
                  
                  
<<<<<<< HEAD
                  </br><input  type="submit" name="btn_enviar" value="<?= isset($nome) ? "mudar" : "salvar" ?>">
=======
                  </br> <button type="submit" class="btn btn-primary">Enviar</button>
>>>>>>> 25bcd98251db76152292ac4c8c046a044140985b

                  
         </form>  