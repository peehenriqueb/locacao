<!DOCTYPE html>

<html lang = "pt - BR">

   <head>
       

       <meta charset = "UTF-8" />

       <title>Exercico 1</title>

   </head>

   <body>
     
        <?php

            include("menu.php");   

            include("conexao.php");


            $id_cliente =       $_POST["cpf"];
            $nome  =            $_POST["nome"];
            $endereco =         $_POST["endereco"];
            $bairro =           $_POST["bairro"];
            $cidade =           $_POST["cidade"];
            $estado =           $_POST["estado"];
            $cep =              $_POST["cep"];
            $telefone =         $_POST["telefone"];
            $email =            $_POST["email"];
            $data_nascimento =  $_POST["data_nascimento"];


            $insercao = "INSERT INTO cliente(id_cliente, nome, endereco, bairro, cidade, estado, cep, telefone, email, data_nascimento)
                            VALUES('$id_cliente', '$nome', '$endereco', '$bairro', '$cidade', '$estado', '$cep', '$telefone', '$email', '$data_nascimento')";

            //mysqli_error($conexao)
            $resultado = mysqli_query($conexao,$insercao)
                //or die("Erro. Não foi possível inserir o cliente no sitema.");
                or die(mysqli_error($conexao));
            echo "Cliente cadastrado com sucesso.";

        ?>

         

   </body>

</html>