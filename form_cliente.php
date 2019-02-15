<!DOCTYPE html>

<html lang = "pt - BR">

   <head>
       

       <meta charset = "UTF-8" />

       <title>Cadastro Cliente</title>

   </head>

   <body>
     
       <?php

           include("menu.php");       
       ?>

          <fieldset>

               <legend>Inserir novo Cliente</legend> 

               <form method = "POST" action = "insere_cliente.php">

                   <input type = "text" name = "cpf" placeholder = "insira o CPF do cliente" size = "30" /><br/><br />
                   <input type = "text" name = "nome" placeholder = "insira o nome do cliente" size = "30" /><br/><br />
                   <input type = "text" name = "endereco" placeholder = "insira o endereço do cliente" size = "50" /><br/><br />
                   <input type = "text" name = "bairro"  placeholder = "insira o bairro do cliente" /><br/><br />
                   <input type = "text" name = "cidade" placeholder = "insira a cidade do cliente" /><br/><br />
                   <input type = "text" name = "estado" placeholder = "SP" size = "2" /><br/><br />
                   <input type = "text" name = "cep" placeholder = "cep" /><br/><br />
                   <input type = "text" name = "telefone" placeholder = "telefone" /><br/><br />
                   <input type = "email" name = "email" placeholder = "email" /><br/><br />
                   <input type = "date" name = "data_nascimento" placeholder = "data de nascimento" /><br/><br />


                   <button>Enviar</button>

               </form>

           </fieldset>

   </body>

</html>