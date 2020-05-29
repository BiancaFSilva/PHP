<?php
    include 'conecta.php'; //inclui os dados de conexão ao bd

    $id = 4;
    $nome_novo = "You";
    
    $consulta = $conexao -> prepare("UPDATE cliente SET nome = '$nome_novo' WHERE idCliente = '$id'"); 

    $consulta -> execute();
?>