<?php
$usuario = [
    "nome" => "Jess",
    "idade" => 23,
    "email" => "eujeca@hotmail.com",
    "cidade" => "Porto Alegre",
];

echo "Olá, meu nome é " . $usuario["nome"] . ", tenho " . $usuario["idade"] . " anos e moro em " . $usuario["cidade"] . ".<br>";

if ($usuario["idade"] > 18){
    echo "<p>Maior de idade!</p>";
}
else{
    echo "<p>Menor de idade!</p>";
}
?>