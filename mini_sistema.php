<?php
echo "<h2>Mini Sistema de Alunos</h2>";

$alunos = [
    ["nome" => "Dário", "nota1" => 10, "nota2" => 9],
    ["nome" => "Jessica", "nota1" => 9, "nota2" => 9],
    ["nome" => "Elisa", "nota1" => 3, "nota2" => 2]
];

echo "<h3>Média dos alunos:</h3>";
echo "<h4>Resultado:</h4>";

foreach($alunos as $aluno){
    $media = ($aluno["nota1"] + $aluno["nota2"]) / 2;    

    if($media >= 7){
        echo $aluno['nome'] . " - Média: " . $media . ": APROVADO!" . "<br>";
    }else{
        echo $aluno['nome'] . " - Média: " . $media . ": REPROVADO!" . "<br>";
    }
}

echo "<h3>Melhor Aluno:</h3>";

$maiorMedia = 0;
$melhorAluno = "";

foreach($alunos as $aluno){
    $media = ($aluno["nota1"] + $aluno["nota2"])/2;

    if($media > $maiorMedia){
        $maiorMedia = $media;
        $melhorAluno = $aluno['nome'];
    }
}

echo "<h3> É o ".$melhorAluno.", com a media de ".$maiorMedia;

?>