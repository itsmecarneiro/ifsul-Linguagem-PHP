<?php
echo "<h2>Loja de Informática</h2>";

$produtos = [
    ["nome" => "Notebook", "preco" => 3500, "estoque" => 24],
    ["nome" => "Mouse", "preco" => 120, "estoque" => 45],
    ["nome" => "Tablet", "preco" => 1200, "estoque" => 0]
];

echo "<h4>Todos os produtos:</h4>";

foreach ($produtos as $produto){
    echo $produto["nome"] . " - R$" . $produto ['preco'] . " - Estoque: " . $produto['estoque'] . "<br>";
}

echo "<h4>Produtos em estoque:</h4>";

foreach ($produtos as $produto){
    if ($produto['estoque'] > 0) {
        echo $produto ['nome'] . " - Estoque: " . $produto['estoque'] . "<br>";
    }
}

$total = 0;

foreach ($produtos as $produto){
    $total += $produto["preco"];
}

echo "<h3>TOTAL: R$ $total</h3>";
?>