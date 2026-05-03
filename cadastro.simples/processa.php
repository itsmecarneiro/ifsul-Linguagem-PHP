<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
   $nome = htmlspecialchars($_POST["nome"]);
    $idade = $_POST["idade"];

    if (!empty($nome) && !empty($idade)){
        echo "<h2>Olá $nome, você tem $idade anos.</h2>";
    } else {
        echo "<h2>Preencha todos os campos!</h2>";
    }
}
echo '<br><a href="index.php">Voltar</a>';
?>