<!DOCTYPE html>
<html>
<head>
    <title>Inscrição</title>
</head>
<body>
    <h1>Banco de Talentos - Estágio em PHP</h1>
<form name="formulario" action="formulario.php" method="POST">
    Nome: <input type="text" name="nome" />
    <br>
    Email: <input type="text" name="email" />
    <br>
    Cidade: <input type="text" name="cidade" />
    <br>
    <button type="submit" >Enviar</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cidade = $_POST["cidade"];

    echo "<h3>Dados recebidos:</h3>";

    if(empty($nome)){
    echo "<p style='color:red;'>Nome é obrigatório!</p>";
    } else{
    echo "<p>Nome: $nome</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Cidade: $cidade</p>";
    }
}
?>
</body>
</html>