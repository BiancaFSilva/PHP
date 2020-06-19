<?php
    //SESSION -> pseudovariável
    session_start();

    include 'conecta.php';

    $email = $_POST['username'];
    $senha = $_POST['pass'];

    $consulta = "SELECT * FROM cliente WHERE email = '$email' AND senha = '$senha' ";

    $resultado = $conexao->query($consulta);
    $registros = $resultado->num_rows;                  //quantidade de registros
    
    $resultado_user = mysqli_fetch_assoc($resultado);   //trabalhar a sessão do php

    if ($registros == 1) {
        $_SESSION['id'] = $resultado_user['id'];
        $_SESSION['nome'] = $resultado_user['nome'];
        $_SESSION['email'] = $resultado_user['email'];

        header('Location: restrita.php');
    } else {
        header('Location: index.html');
    }
?>