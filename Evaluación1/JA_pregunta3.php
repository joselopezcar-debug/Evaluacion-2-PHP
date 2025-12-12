<?php

$alumnos = $_POST["alumnos"];
$grado = $_POST["grado"];

if ($alumnos >= 100) {
    $precioAlumno = 65;
} elseif ($alumnos >= 50) {
    $precioAlumno = 70;
} elseif ($alumnos >= 30) {
    $precioAlumno = 95;
} else {
    $precioBus = 400;
    $precioAlumno = round($precioBus / $alumnos, 2);
}

if ($grado == "primaria" && $alumnos >= 30) {
    $precioAlumno += 5;
}

$costoTotal = $precioAlumno * $alumnos;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado Viaje</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<body class="bg-light">
<div class="container mt-5 bg-white p-4 shadow rounded" style="max-width: 600px;">
    <h2 class="text-center mb-4">Resultado del Viaje</h2>

    <p><strong>Número de alumnos:</strong> <?= $alumnos ?></p>
    <p><strong>Grado:</strong> <?= ucfirst($grado) ?></p>
    <p><strong>Precio por alumno:</strong> S/ <?= number_format($precioAlumno, 2) ?></p>
    <p><strong>Costo total del viaje:</strong> S/ <?= number_format($costoTotal, 2) ?></p>
</div>
</body>
</html>