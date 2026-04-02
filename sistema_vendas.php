<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Vendas</title>
</head>
<body>
    <h2>Sistema de Vendas</h2>

<?php
$vendas = [
    ["cliente" => "Jessica", "produto" => "Monitor", "preco" => 1100, "quantidade" => 2],
    ["cliente" => "Ana", "produto" => "Notebook", "preco" => 3400, "quantidade" => 1],
    ["cliente" => "Joana", "produto" => "Mouse", "preco" => 249, "quantidade" => 5]
];

echo "<h3>Faturamento de Vendas - Total</h3>";

$totalGeral = 0;

foreach($vendas as $venda){
    $total = $venda["preco"] * $venda["quantidade"];
    $totalGeral += $total;

    echo "<p>
        Cliente: {$venda['cliente']} |
        Produto: {$venda['produto']} |
        Total: R$ " . number_format($total, 2, ',', '.') . 
        "</p>";
}
        echo "<h3>Faturamento Total: R$ " . number_format($totalGeral, 2, ',', '.') . "</h3>";
?>
</body>
</html>