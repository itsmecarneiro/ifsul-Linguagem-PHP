<?php

echo "<h2>Análise dos alunos</h2>";
echo "<br>";

$alunos = [
    ["nome" => "Jessica", "nota1" => 8, "nota2" => 9],
    ["nome" => "Aurora", "nota1" => 10, "nota2" => 9],
    ["nome" => "Kaua", "nota1" => 6, "nota2" => 4]
];

$maiorMedia = 0;

foreach($alunos as $aluno){
    $media = ($aluno["nota1"] + $aluno["nota2"]) / 2;
    echo "<h3>{$aluno["nome"]}  - Média: $media . </h3>";

     if($media >= 7){
        echo "<h4>APROVADO!</h4>";
    }
    else{
        echo "<h4>REPROVADO!</h4>";
    }


    if($media > $maiorMedia){
        $maiorMedia = $media;
        $melhorAluno = $aluno["nome"];
    }
}

echo "<br>";
echo "<h3>O MELHOR ALUNO É: $melhorAluno com $maiorMedia</h3>";









?>