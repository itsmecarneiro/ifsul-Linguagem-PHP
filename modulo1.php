<?php
echo "<h3>Exercício 1</h3>";

$valor1 = 10;
$valor2 = -15;

echo "<p>O oposto de valor1 é " . -$valor1 . "</p>";
echo "<p>O oposto de valor2 é " . -$valor2 . "</p>";


echo "<h3>Exercício 2</h3>";

$valor3 = 25;
$valor4 = 10;

$soma = $valor3 + $valor4;
$dif = $valor3 - $valor4;
$mult = $valor3 * $valor4;
$div = $valor3 / $valor4;
$rst = $valor3 % $valor4;

echo "<p>A soma dos valores é igual a " . $soma . "</p>";
echo "<p>A diferença dos valores é igual a " . $dif . "</p>";
echo "<p>O produto dos valores é igual a " . $mult . "</p>";
echo "<p>A divisão dos valores é igual a " . $div . "</p>";
echo "<p>O resto dos valores é igual a " . $rst . "</p>";


echo "<h3>Exercício 3</h3>";

$valor5 = 8;

if ($valor5 == 8) {
    echo "<p>Valor é 8</p>";
}


echo "<h3>Exercício 4</h3>";

$nota6 = 7;

if ($nota6 >= 6){
    echo "<p>Você passou e é fera!</p>";
}
else{
    echo "<p>Você é fera, mas é preguiçoso!</p>";
}


echo "<h3>Exercício 5</h3>";

$a = 12;
$b = 6;

if ($a/$b == 2){
    echo "<p>O resultado da divisão é 2!</p>";
}
else {
    echo "<p>O resultado da divisão não é 2, é " . $a/$b . "</p>";
}


echo "<h3>Exercício 6</h3>";

$disposicao = 10;

if ($disposicao == 10){
    echo "<p>Vamos praticar!</p>";
}
else {
    echo "<p>Vamos praticar mesmo assim!</p>";
}


echo "<h3>Exercício 7</h3>";

$prova1 = 10;
$prova2 = 10;
$media = ($prova1 + $prova2) / 2;

if ($media <3){
    echo "<p>Precisa dar mais gás!</p>";
}
elseif ($media <6){
    echo "<p>Só mais um pouco!</p>";
}
elseif ($media <9){
    echo "<p>Mais atenção e seria 10!</p>";
}
else {
    echo "<p>O máximo!</p>";
}


echo "<h3>Exercício 8</h3>";

$idade = 17;

if ($idade >= 18){
    echo "<p>É maior de idade!</p>";
}
else {
    echo "<p>É menor de idade!</p>";
}


echo "<h3>Exercício 9</h3>";

$opcao = 'n';

switch ($opcao){
    case 's':
        echo "<p>Você escolheu SIM!</p>";
        break;
    case 'n':
        echo "<p>Você escolheu NÃO!</p>";
        break;
    default:
        echo "<p>Opção inválida!</p>";
        break;
}
?>