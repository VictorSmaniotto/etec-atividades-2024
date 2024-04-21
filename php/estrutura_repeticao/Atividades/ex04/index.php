<?php

// Faça um algoritmo que exiba a soma dos números de 1 a 100.
$resultado = 0;
$i = 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <title>Document</title>
</head>

<body>
    <h2 class="intro">Soma dos números entre 1 e 100</h2>

    <div class="container">
        <?
        do {
            $resultado += $i;
            $i++;
        } while ($i <= 100);

        echo $resultado;
        ?>
    </div>


</body>

</html>