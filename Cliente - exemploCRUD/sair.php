<?php
    session_start();

     //Session_destroy();
    unset(
        $_SESSION['id']),
        $_SESSION['nome'],
        $_SESSION['email']
    );

    header('Location: index.html');
?>