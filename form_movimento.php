<!DOCTYPE html>

<html lang = "pt - BR">

   <head>
       

       <meta charset = "UTF-8" />

       <title>Cadastro Cliente</title>

   </head>

   <body>
     
       <?php

           include("menu.php");       
           include("conexao.php");

           $consulta_cliente = "SELECT * FROM cliente";

           $resultado_cliente = mysqli_query($conexao,$consulta_cliente) or die ("ERRO");
       
       
        ?>

          <fieldset>

               <legend>Inserir nova Movimentação</legend> 

               <form method = "POST" action = "insere_movimento.php">

                    <select name = "cod_cliente">
                        <option>Selecione um cliente:</option>

                        <?php

                            while($linha=mysqli_fetch_assoc($resultado_cliente))
                            {
                                $cod_cliente = $linha["id_cliente"];
                                $nome = $linha ["nome"];
                                
                                echo"<option value = '$cod_cliente'>$nome</option>";

                            }

                        ?>
                    </select>
         
                    <br /><br />

                    <?php

                        $consulta_veiculo = "SELECT * FROM veiculo";

                        $resultado_veiculo = mysqli_query($conexao,$consulta_veiculo) or die ("ERRO");

                    ?>

                    <select name = "cod_veiculo">

                        <option>Selecione um veículo:</option>

                        <?php

                            while($linha=mysqli_fetch_assoc($resultado_veiculo))
                            {
                                $cod_veiculo    = $linha["id_veiculo"];
                                $marca          = $linha ["marca"];
                                $modelo         = $linha ["modelo"];
                                $ano            = $linha ["ano"];
                                $valor          = $linha ["valor_diaria"];
                                
                                echo"<option value = '$cod_cliente'>$marca / $modelo ($ano) - R$ $valor</option>";

                            }

                        ?>
                    </select>
                    
                    <br /><br />

                    Data Retirada: <input type = "date" name = "data_inicio" /> <br/><br />
                    Data Entrega: <input type = "date" name = "data_fim" /> <br/><br />

                <button>Enviar</button>

            </form>

        </fieldset>


   </body>

</html>