<!-- Verificar se um ano é bissexto ou não -->

<?php

$ano = isset($_GET["ano"]) ? $_GET["ano"] : null;

$resultado = '';

if (isset($ano) && is_numeric($ano) && date('L', strtotime("$ano-01-01")) == 1) {
    $resultado = "$ano é bissexto";
} else {
    $resultado = "$ano não é bissexto";
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <title>Ano Bissexto?</title>
</head>

<body>

    <h2>Esse ano é Bissexto?</h2>

    <form action="" method="get">
        <div class="form-group">
            <label for="ano">Digite um ano</label>
            <input type="text" name="ano" id="ano" maxlength="4">
            <button type="submit">Pesquisar</button>
        </div>
    </form>

    <h2 class="resultado">
        <? echo $resultado; ?>
    </h2>

</body>

</html>