<?php

    //local no qual o banco de dados esta instalado
    $local = "localhost:3307";
    $usuario = "root";
    $senha = "usbw";
    $bd = "locacao";

    $conexao = mysqli_connect($local,$usuario,$senha,$bd) or die("Erro");
?>