<?php
// Faça um algoritmo que receba dois números e exiba todos os números entre eles.

$num = isset($_POST['numero']) ? $_POST['numero'] : null;
$num2 = isset($_POST['numero2']) ? $_POST['numero2'] : null;




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

    <h2 class="intro">Digite dois números</h2>

    <form action="#" method="POST">
        <div class="form-group">
            <label for="numero">Primeiro Número: </label>
            <input type="text" name="numero" id="numero">
        </div>
        <div class="form-group">
            <label for="numero2">Segundo Número: </label>
            <input type="text" name="numero2" id="numero2">
        </div>
        <button type="submit" class="btn">Enviar</button>
    </form>

    <div class="container">
        <?
        if (!empty($num) && !empty($num2) && is_numeric($num) && is_numeric($num2)) {
            echo  "<span> " . $num . " - </span>";
            for ($i = $num + 1; $i < $num2; $i++) {
                echo  "<span>" . $i . " - </span>";
            }
            echo  "<span>" . $num2 . "</span>";
        } else {
            echo "Digite valores válidos";
        }
        ?>

    </div>


</body>

</html>