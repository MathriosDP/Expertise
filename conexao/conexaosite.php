<?php
    //conexão com o banco de dados do site
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nome_banco = "site";
    $conexao_banco = mysqli_connect($servidor, $usuario, $senha, $nome_banco);

    //testar conexão:
    if (mysqli_connect_errno() ) {
        die("FALHA AO CONECTAR COM O BANCO DE DADOS." . "Falha: " . mysqli_connect_errno());
    }
?>