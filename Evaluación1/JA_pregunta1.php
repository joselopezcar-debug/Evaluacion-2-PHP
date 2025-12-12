<?php

function generarArray($n) {
    $arr = [];
    for ($i = 0; $i < $n; $i++) {
        $arr[$i] = rand(1, 100);
    }
    return $arr;
}

function invertirArray($arr) {
    $invertido = [];
    $j = 0;
    for ($i = count($arr) - 1; $i >= 0; $i--) {
        $invertido[$j] = $arr[$i];
        $j++;
    }
    return $invertido;
}

function imprimirArray($arr) {
    foreach ($arr as $valor) {
        echo $valor . " ";
    }
}

$cantidad = $_GET["cantidad"];
$arrayGenerado = generarArray($cantidad);
$arrayInvertido = invertirArray($arrayGenerado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">

        <div class="card-header text-center">
            <h3 class="fw-bold">Generar e invertir un array</h3>
            <p class="m-0">Cantidad de números en el array: <?= $cantidad ?></p>
        </div>

        <div class="card-body">

            <div class="row mb-3">
                <div class="col fw-bold">Array generado:</div>
                <div class="col">
                    <?php imprimirArray($arrayGenerado); ?>
                </div>
            </div>

            <hr>

            <div class="row mb-3">
                <div class="col fw-bold">Array invertido:</div>
                <div class="col">
                    <?php imprimirArray($arrayInvertido); ?>
                </div>
            </div>

        </div>

        <div class="card-footer text-end text-secondary">
            Desarrollo de Aplicaciones en Internet
        </div>

    </div>
</div>

</body>
</html>