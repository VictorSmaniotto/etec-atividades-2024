<?php

// Exercício 01 - Exibir o nome do mês com base em um número (1 a 12).

$mes = [
    1 => "Janeiro",
    2 => "Fevereiro",
    3 => "Março",
    4 => "Abril",
    5 => "Maio",
    6 => "Junho",
    7 => "Julho",
    8 => "Agosto",
    9 => "Setembro",
    10 => "Outubro",
    11 => "Novembro",
    12 => "Dezembro"
];

$num = isset($_GET["num"]) ? $_GET["num"] : null;

$resultado = '';

if (isset($num) && $num > 0 && isset($mes[$num]) && is_numeric($num)) {
    $resultado = "O número $num é referente ao mês de $mes[$num]";
} else {
    $resultado = "Digite um número válido de 1 a 12";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <title>Mês</title>
</head>

<body>

    <h2>Digite o número de 1 a 12 e veja a qual mês ele pertence</h2>

    <form action="#" method="GET">
        <div class="form-group">
            <input type="text" id="num" name="num">
            <button type="submit">Pesquisar</button>
        </div>
    </form>

    <h2 class="resultado">
        <? echo $resultado; ?>
    </h2>

</body>

</html>