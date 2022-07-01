<?php

    $dbHost = "Localhost";
    $dbUsarname = 'root';
    $dbPassword = '';
    $dbName = 'formulario-luiz';

    $conexao = new mysqli($dbHost,$dbUsarname,$dbPassword,$dbName);

    // if($conexao->connect_errno)
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }
?>