<?php
echo "<h3>Exercício 1</h3>";

$valor1Exercicio1 = 10;
$valor2Exercicio1 = -15;

echo "<p>O oposto de valor1 é " . -$valor1Exercicio1 . "</p>";
echo "<p>O oposto de valor2 é " . -$valor2Exercicio1 . "</p>";


echo "<h3>Exercício 2</h3>";

$valor1Exercicio2 = 25;
$valor2Exercicio2 = 10;

$soma = $valor1Exercicio2 + $valor2Exercicio2;
$dif = $valor1Exercicio2 - $valor2Exercicio2;
$mult = $valor1Exercicio2 * $valor2Exercicio2;
$div = $valor1Exercicio2 / $valor2Exercicio2;
$rst = $valor1Exercicio2 % $valor2Exercicio2;

echo "<p>A soma dos valores é igual a " . $soma . "</p>";
echo "<p>A diferença dos valores é igual a " . $dif . "</p>";
echo "<p>O produto dos valores é igual a " . $mult . "</p>";
echo "<p>A divisão dos valores é igual a " . $div . "</p>";
echo "<p>O resto dos valores é igual a " . $rst . "</p>";


echo "<h3>Exercício 3</h3>";

$valor1Exercicio3 = 8;

if ($valor1Exercicio3 == 8) {
    echo "<p>Valor é 8</p>";
}


echo "<h3>Exercício 4</h3>";

$notaProva = 7;

if ($notaProva >= 6){
    echo "<p>Você passou e é fera!</p>";
}
else{
    echo "<p>Você é fera, mas é preguiçoso!</p>";
}


echo "<h3>Exercício 5</h3>";

$valor1Exercicio5 = 60;
$valor2Exercicio5 = 6;
$resultadoExercicio5 = $valor1Exercicio5/$valor2Exercicio5;

if ($resultadoExercicio5 == 2){
    echo "<p>O resultado da divisão é 2!</p>";
}
else {
    echo "<p>O resultado da divisão não é 2, é " . $valor1Exercicio5/$valor2Exercicio5 . "</p>";
}


echo "<h3>Exercício 6</h3>";

$disposicaoExercicio6 = 10;

if ($disposicaoExercicio6 == 10){
    echo "<p>Vamos praticar!</p>";
}
else {
    echo "<p>Vamos praticar mesmo assim!</p>";
}


echo "<h3>Exercício 7</h3>";

$prova1Exercicio7 = 10;
$prova2Exercicio7 = 10;
$mediaExercicio7 = ($prova1Exercicio7 + $prova2Exercicio7) / 2;

if ($mediaExercicio7 <3){
    echo "<p>Precisa dar mais gás!</p>";
}
elseif ($mediaExercicio7 <6){
    echo "<p>Só mais um pouco!</p>";
}
elseif ($mediaExercicio7 <9){
    echo "<p>Mais atenção e seria 10!</p>";
}
else {
    echo "<p>O máximo!</p>";
}


echo "<h3>Exercício 8</h3>";

$idadeExercicio8 = 17;

if ($idadeExercicio8 >= 18){
    echo "<p>É maior de idade!</p>";
}
else {
    echo "<p>É menor de idade!</p>";
}


echo "<h3>Exercício 9</h3>";

$opcaoExercicio9 = 'n';

switch ($opcaoExercicio9){
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