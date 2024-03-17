<?php
// Exibir o nome do dia da semana com base em um número (1 a 7).

$dia = [
    1 => "Domingo",
    2 => "Segunda-feira",
    3 => "Terça-feira",
    4 => "Quarta-feira",
    5 => "Quinta-feira",
    6 => "Sexta-feira",
    7 => "Sábado"
];

$num = isset($_GET['num']) ? $_GET['num'] : null;

$resultado = '';

if (isset($num) && isset($dia[$num]) && is_numeric($num)) {
    $resultado = "O número $num é $dia[$num]";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <title>Semana</title>
</head>

<body>

    <h2>Digite um número de 1 a 7 e veja a qual dia da semana ele pertence</h2>

    <form action="" method="get">
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