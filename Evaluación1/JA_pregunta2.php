<?php
$rows = array(
    
);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function pascal ($filas){
        for ($i = 0; $i < $rows; $i++){
            $number = 1;
            for ($j = 0; $j <= $i; $j++){
                echo $number . " ";
                $number = $number * ($i - $j) / ($j + 1);
            }
        }
        echo "\n";
    }
    ?>
</body>
</html>