<!-- Calcular o número de dias em um determinado mês -->

<?php



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



if (!empty($num) && $num > 0 && isset($mes[$num]) && is_numeric($num)) {
    if ($num == 2) {
        $anoAtual = date('Y');
        $numeroDias = (date('L', strtotime("$anoAtual-01-01")) == 1) ? 29 : 28; // Verifica se o ano é bissexto
        $resultado = "O mês de $mes[$num] tem $numeroDias dias em $anoAtual.";
    } else {
        $numeroDias = cal_days_in_month(CAL_GREGORIAN, $num, date('Y'));
        $resultado = "O mês de $mes[$num] tem $numeroDias dias.";
    }
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
            <input type="text" id="num" name="num" maxlength="2">
            <button type="submit">Pesquisar</button>
        </div>
    </form>

    <h2 class="resultado">
        <? echo $resultado; ?>
    </h2>

</body>

</html>