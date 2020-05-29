<?php
    include 'conecta.php'; //inclui os dados de conexão ao bd

    $id =4; // Dados a seres removidos
    
    $consulta = $conexao -> prepare("DELETE FROM cliente WHERE idCliente = '$id'"); 

    $consulta -> execute();
?>