<?php

function generarPascal($n) {
    $triangulo = array();

    for ($i = 0; $i < $n; $i++) {
        $triangulo[$i] = array();

        for ($j = 0; $j <= $i; $j++) {

            if ($j == 0 || $j == $i) {
                $triangulo[$i][$j] = 1;
            } else {
                $triangulo[$i][$j] = $triangulo[$i - 1][$j - 1] + $triangulo[$i - 1][$j];
            }
        }
    }

    return $triangulo;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $filas = intval($_POST['filas']);
    $pascal = generarPascal($filas);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Triángulo de Pascal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header text-center">
            <h2 class="fw-bold">Triángulo de Pascal</h2>
        </div>
        <div class="card-body">

            <h5 class="text-center mb-4">
                Filas del triángulo de Pascal calculadas: <?= $filas ?>
            </h5>

            <div class="text-center" style="font-size: 18px;">
                <?php
                foreach ($pascal as $fila) {
                    foreach ($fila as $num) {
                        echo $num . " ";
                    }
                    echo "<br>";
                }
                ?>
            </div>

        </div>
        <div class="card-footer text-end">
            <small>Desarrollo de Aplicaciones en Internet</small>
        </div>
    </div>
</div>

</body>
</html>