<!DOCTYPE html>

<html lang = "pt - BR">

   <head>
       

       <meta charset = "UTF-8" />

       <title>Insere Movimento1</title>

   </head>

   <body>
     
        <?php

            include("menu.php");   

            include("conexao.php");


            $cod_cliente =      $_POST["cod_cliente"];
            $cod_veiculo =      $_POST["cod_veiculo"];
            $data_inicio =      $_POST["data_inicio"];
            $data_fim =         $_POST["data_fim"];
                       
            $consulta = "SELECT valor_diaria FROM veiculo WHERE id_veiculo = $cod_veiculo";
            $resultado = mysqli_query($conexao,$consulta) or die ("ERRO");

            $linha = mysqli_fetch_assoc($resultado);
            
            $valor_diaria = $linha["valor_diaria"];

            $insercao = "INSERT INTO movimento
                            VALUES('$cod_cliente', '$cod_veiculo', '$data_inicio', '$data_fim', '$valor_diaria')";

            //mysqli_error($conexao)
            mysqli_query($conexao,$insercao)
                //or die("Erro. Não foi possível inserir a movimentação no sitema.");
                or die(mysqli_error($conexao));
            echo "Cliente cadastrado com sucesso.";

        ?>

         

   </body>

</html>