<?php
    include 'conecta.php'; //inclui os dados de conexão ao bd

    $nome = "Você";
    $email = "voce.you@email.com";
    $cpf = "xxx.xxx.xxx-xx";
    $senha = "a1b2c3";
    
    $consulta = $conexao -> prepare("INSERT INTO cliente ( nome,  cpf,  email, senha ) VALUES 
    ('$nome', '$cpf', '$email', '$senha')");

    $consulta -> execute();
?>