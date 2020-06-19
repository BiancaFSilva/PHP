<?php
    session_start();

    if (
        (!isset($_SESSION['id'])==true) &&
        (!isset($_SESSION['id'])==true) &&
        (!isset($_SESSION['id'])==true)) {
            //Session_destroy();
            unset($_SESSION['id']);
            unset($_SESSION['nome']);
            unset($_SESSION['email']);

            header('Location: index.html');
        }

    echo "Página restrita <br>";
    echo "(Mas nemtão restrita assim)";
?>

<a href="sair.php"> Sair </a>