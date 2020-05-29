<?php
    include 'conecta.php'; //inclui os dados de conexão ao bd

    $consulta = "SELECT * FROM  clientes";

    foreach ($conexao -> query($consulta) as $linha) {
        echo "Identificação: " + $linha['idCliente'] . "<br>";
        echo "Nome: " + $linha['nome'] . "<br>";
        echo "Email: " + $linha['email'] . "<br>";
        echo "CPF: " + $linha['cpf'] . "<br>";
        // echo "Senha: " + $linha['senha'] . "<br>";
        echo "<hr><br>";
    }

    echo "Como a variável ficou: ";
    echo "<pre>";
        var_dump($linha);
    echo "</pre>";
?>