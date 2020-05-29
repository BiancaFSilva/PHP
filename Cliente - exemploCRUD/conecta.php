<?php //Exemplo de conexão com php - 29/05/2020

    $host = "localhost";
    $user = "root";
    $senha = "";
    $banco = "clientes"; //se houver alterações o programa não roda

    $conexao = new MySQLi("$host", "$user", "$senha", "$banco");
    $conexao -> set_charset("utf8");

    if ($conexao -> connect_error) {
        echo "Erro de conexão";
    } else {
        echo "Conexão bem sucedida";
    }
?>