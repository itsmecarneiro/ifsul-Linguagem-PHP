<?php

$conn = mysqli_connect("localhost", "root", "", "sistemafic");

if (!$conn) {
    die("Erro de conexão: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $areaInteresse = $_POST["area_interesse"];

    if(empty($nome) || empty($idade) || empty($areaInteresse)){
        echo "Preencha todos os campos!";
        exit;
    }
    if (!is_numeric($idade)){
        echo "Idade inválida!";
        exit;
    }

    $sql = "INSERT INTO usuarios (nome, idade, area_interesse)
    VALUES ('$nome', '$idade', '$areaInteresse')";

    if(mysqli_query($conn, $sql)){
        echo "Cadastro realizado com sucesso!";
    } else{
        echo "Erro: " . mysqli_error($conn);
    }
}


?>