<?php
// Faça um algoritmo que exiba os números ímpares de 1 a 50 utilizando a estrutura de repetição for.

$num = 0;




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <title>Ímpares</title>
</head>

<body>

    <h2 class="intro">Números ímpares entre 1 e 50 </h2>


    <div class="container">
        <?
        for ($i = 0; $i < 50; $i++) {
            $num = $i % 2 > 0 ? $i . ' ' : '';
            echo "<span>$num</span>";
        }
        ?>
    </div>


</body>

</html>