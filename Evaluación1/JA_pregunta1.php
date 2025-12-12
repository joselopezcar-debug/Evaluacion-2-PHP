<?php

function generarArray($n) {
    $arr = [];
    for ($i = 0; $i < $n; $i++) {
        $arr[$i] = rand(1, 100);
    }
    return $arr;
}

function invertirArray($arr) {
    $inv = [];
    $j = 0;
    for ($i = count($arr) - 1; $i >= 0; $i--) {
        $inv[$j] = $arr[$i];
        $j++;
    }
    return $inv;
}

function imprimirArray($titulo, $arr) {
    echo "<h3>$titulo</h3>";
    echo "<p>[ " . implode(", ", $arr) . " ]</p>";
}

$n = $_GET["n"];
$original = generarArray($n);
$invertido = invertirArray($original);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado Pregunta 1</title>
    <style>
        body { font-family: Arial; background-color: #eef2f3; padding: 20px; }
        .box { background: white; padding: 20px; width: 600px; margin: auto; border-radius: 10px; box-shadow: 0 0 10px gray; }
        h2 { text-align: center; }
    </style>
</head>
<body>
<div class="box">
    <h2>Resultado del Array</h2>
    <?php
        imprimirArray("Array Original", $original);
        imprimirArray("Array Invertido", $invertido);
    ?>
</div>
</body>
</html>