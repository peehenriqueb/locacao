<!DOCTYPE html>

<html lang = "pt - BR">

   <head>
       

       <meta charset = "UTF-8" />

       <title>Listar Cliente</title>

   </head>

   <body>
       <?php

           include("menu.php");
           include("conexao.php");

           $consulta = "SELECT * FROM cliente";


           // mysqli_error($conexao) - Para debug

           $resultado = mysqli_query($conexao,$consulta) or die("Erro. Não foi possível consultar a lista de carros");


       /* while($linha = mysqli_fetch_assoc($resultado))
           {
               print_r($linha);
               echo "<br /><br />";
           }*/


           echo "<table border = '1'>";

           echo "<tr>
                   <th>CPF</th>
                   <th>Nome</th>
                   <th>Endereço</th>
                   <th>Bairro</th>
                   <th>Cidade</th>
                   <th>Estado</th>
                   <th>CEP</th>
                   <th>Telefone</th>
                   <th>E-mail</th>
                   <th>Data de Nascimento</th>
               </tr>";

           while($linha = mysqli_fetch_assoc($resultado))
           {
               echo "
                   <tr>
                       <td>" .$linha["id_cliente"]. "</td>
                       <td>" .$linha["nome"]. "</td>
                       <td>" .$linha["endereco"]. "</td>
                       <td>" .$linha["bairro"]. "</td>
                       <td>" .$linha["cidade"]. "</td>
                       <td>" .$linha["estado"]. "</td>
                       <td>" .$linha["cep"]. "</td>
                       <td>" .$linha["telefone"]. "</td>
                       <td>" .$linha["email"]. "</td>
                       <td>" .$linha["data_nascimento"]. "</td>
                   </tr>
                   ";
           }     
           
       ?>
   </body>

</html>