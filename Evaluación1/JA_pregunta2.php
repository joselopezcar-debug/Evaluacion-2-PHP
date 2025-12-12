<?php

function generarPascal($n) {
    $t = [];

    for ($i = 0; $i < $n; $i++) {
        $t[$i] = [];
        for ($j = 0; $j <= $i; $j++) {
            if ($j == 0 || $j == $i) {
                $t[$i][$j] = 1;
            } else {
                $t[$i][$j] = $t[$i-1][$j-1] + $t[$i-1][$j];
            }
        }
    }
    return $t;
}

function imprimirPascal($t) {
    foreach ($t as $fila) {
        echo "<p class='text-center'>" . implode(" ", $fila) . "</p>";
    }
}

$n = $_POST["n"];
$triangulo = generarPascal($n);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado Pregunta 2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<body class="bg-light">
<div class="container mt-5 bg-white p-4 shadow rounded">
    <h2 class="text-center">Triángulo de Pascal</h2>

    <?php imprimirPascal($triangulo); ?>
</div>
</body>
</html>