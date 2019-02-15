 <!DOCTYPE html>

 <html lang = "pt - BR">

    <head>

        <meta charset = "UTF-8" />

        <title>Exercico 1</title>

    </head>

    <body>
        <?php

            include("conexao.php");

            $consulta = "SELECT * FROM veiculo";


            // mysqli_error($conexao) - Para debug

            $resultado = mysqli_query($conexao,$consulta) or die("Erro. Não foi possível consultar a lista de carros");


        /* while($linha = mysqli_fetch_assoc($resultado))
            {
                print_r($linha);
                echo "<br /><br />";
            }*/


            echo "<table border = '1'>";

            echo "<tr>
                    <th>Placa</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Ano</th>
                    <th>Valor diária</th>
                    <th>Kilometragem</th>
                </tr>";

            while($linha = mysqli_fetch_assoc($resultado))
            {
                echo "
                    <tr>
                        <td>" .$linha["id_veiculo"]. "</td>
                        <td>" .$linha["marca"]. "</td>
                        <td>" .$linha["modelo"]. "</td>
                        <td>" .$linha["ano"]. "</td>
                        <td>R$" .$linha["valor_diaria"]. ",00</td>
                        <td>" .$linha["km"]. "</td>
                    </tr>
                    ";
            }     
            
        ?>
    </body>

</html>