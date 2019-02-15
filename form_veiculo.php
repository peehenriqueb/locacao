 <!DOCTYPE html>

 <html lang = "pt - BR">

    <head>
        

        <meta charset = "UTF-8" />

        <title>Exercico 1</title>

    </head>

    <body>
      
        <?php

            include("menu.php");       
        ?>

           <fieldset>

                <legend>Inserir novo Veículo</legend> 

                <form method = "POST" action = "insere_veiculo.php">

                    <input type = "text" name = "placa" placeholder = "insira a placa do veículo" size = "30" /><br/><br />

                    <input type = "text" name = "marca" placeholder = "insira a marca do veículo" size = "30" /><br/><br />

                    <input type = "text" name = "modelo" placeholder = "insira o modelo do veículo" size = "30" /><br/><br />

                    <input type = "number" name = "ano"  placeholder = "insira o ano do veículo" /><br/><br />

                    <input type = "number" name = "valor_diaria" placeholder = "insira o valor da diária do veículo" /><br/><br />

                    <input type = "number" name = "km"placeholder = "insira a kilometragem do veículo" /><br/><br />

                    <button>Enviar</button>

                </form>

            </fieldset>

    </body>

</html>