<?php
$notas = [
    10, 5, 8, 6, 9
];

echo "<h3>Notas:</h3>";

foreach($notas as $nota){
    echo $nota . "<br>";
}

$total = 0;

foreach($notas as $nota){
    $total += $nota;
}

echo "<h3>Total: $total </h3>";
?>