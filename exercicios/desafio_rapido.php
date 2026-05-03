<!DOCTYPE html>
<html>

<head>
    <title>Desafio Rápido</title>
</head>
<body>
    Informe seus dados:
    <form method="POST">
       Nome: <input type="text" name="nome" required />
        <br><br>
        Idade: <input type="text" name="idade" required />
        <br><br>

        <button type="submit">ENVIAR </button>
    </form>
    
</body>
<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $nome = $_POST ["nome"];
    $idade = $_POST ["idade"];


if (empty($nome) || empty($idade)){
    echo "Preencha todos os campos!";
    exit;
}

if(!is_numeric($idade)){
        echo "Idade inválida!";
        exit;
}

echo "Olá, " . $nome . ", você tem " . $idade . " anos!";
}
?>
</html>