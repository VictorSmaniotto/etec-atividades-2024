<!-- Verificar se um número é positivo, negativo ou zero -->


<?php

$num = isset($_GET['num']) ? intval($_GET['num']) : null;

$resultado = '';

function sign($num)
{
    return ($num > 0) ? 1 : (($num < 0) ? -1 : 0);
}

if (isset($num) && $num !== null) {
    if (sign($num) == -1) {
        $resultado = 'Negativo';
    } else if (sign($num) == 1) {
        $resultado = 'Positivo';
    } else if (sign($num) == 0) {
        $resultado = 'Zero';
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <title>Positivo, Negativo ou Zero</title>
</head>

<body>

    <h2>Verificando se um número é Positivo, Negativo ou Zero utilizando <u>Signum</u></h2>

    <form action="" method="get">
        <div class="form-group">
            <label for="num">Número:</label>
            <input type="text" id="num" name="num">
            <button type="submit">Verificar</button>
        </div>
    </form>

    <h2 class="resultado">
        <? echo $resultado; ?>
    </h2>

</body>

</html>