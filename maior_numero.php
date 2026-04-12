<?php
$notas = [
    10, 5, 8, 6, 9
];

echo "<h3>Notas:</h3>";

foreach($notas as $nota){
    echo $nota . "<br>";
}

$maiorNota = 0;

foreach($notas as $nota){
    if($nota > $maiorNota){
        $maiorNota = $notas[0];
    }
}

echo "<h3>Maior nota: $maiorNota </h3>";
?>
