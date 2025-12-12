<?php

$alumnos = $_POST['alumnos'];
$grado = $_POST['grado'];

if ($alumnos >= 100) {
    $costoAlumno = 65;
} elseif ($alumnos >= 50) {
    $costoAlumno = 70;
} elseif ($alumnos >= 30) {
    $costoAlumno = 95;
} else {
    $costoRenta = 400;
    $costoAlumno = 0;
}

if ($grado == "Primaria" && $alumnos >= 30) {
    $costoAlumno += 5;
}

if ($alumnos >= 30) {
    $costoRenta = $alumnos * $costoAlumno;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Viaje de Estudios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center fw-bold">
            Pregunta 3 - Viaje de Estudios
        </div>

        <div class="card-body text-center">

            <div class="row mb-3">
                <div class="col fw-bold">Cantidad de alumnos: <?= $alumnos ?></div>
                <div class="col fw-bold">Grado de instrucción: <?= $grado ?></div>
            </div>

            <p class="fs-5">Costo de renta del autobús: S/<?= $costoRenta ?></p>

            <?php if ($alumnos >= 30): ?>
                <p class="fs-5">Precio por alumno: S/<?= $costoAlumno ?></p>
            <?php else: ?>
                <p class="text-muted">(Costo por alumno no aplica: menos de 30 estudiantes)</p>
            <?php endif; ?>

        </div>

        <div class="card-footer text-end small">
            Desarrollo de Aplicaciones en Internet
        </div>

    </div>
</div>

</body>
</html>