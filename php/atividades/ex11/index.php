<?php

// 1) Calcular o IMC (Índice de Massa Corporal) e exibir uma mensagem indicando a faixa de peso correspondente.
$peso = isset($_GET['peso']) ? floatval($_GET['peso']) : null;
$altura = isset($_GET['altura']) ? floatval($_GET['altura']) : null;
$imc = 0;
$mensagem = '';

function calcularIMC($peso, $altura)
{
    if (isset($peso, $altura)) {
        $imc =  number_format($peso / ($altura ^ 2));
    }

    switch ($imc) {
        case $imc < 18.5:
            $mensagem = 'Magreza';
            break;
        case $imc > 18.5 and $imc < 24.9:
            $mensagem = 'Normal';
            break;
        case $imc > 25 and $imc < 29.9:
            $mensagem = 'Sobrepeso';
            break;
        case $imc > 30 and $imc < 39.9:
            $mensagem = 'Obesidade';
            break;
        case $imc > 40:
            $mensagem = 'Obesidade Grave';
            break;
        default:
            $mensagem = 'Algo deu errado! Tente novamente mais tarde';
            break;
    }

    return print(" $imc - $mensagem");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <title>Calcular IMC</title>
</head>

<body>

    <h2>Calcule seu IMC</h2>

    <form action="#" method="get">

        <div class="form-group">
            <label for="altura">Altura (ex.: 1,70)</label>
            <input type="text" id="altura" name="altura" required maxlength="4">
        </div>

        <div class="form-group">
            <label for="peso">Peso (ex.: 70,5)</label>
            <input type="text" id="peso" name="peso" required maxlength="6">
            <button type="submit">Calcular</button>
        </div>

    </form>

    <h2 class="resultado mt-3">
        Seu IMC:
        <? calcularIMC($peso, $altura) ?>
    </h2>

</body>

</html>