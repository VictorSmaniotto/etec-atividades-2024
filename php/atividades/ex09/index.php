<!-- Verificar se um caractere é uma vogal ou consoante -->

<?php

$letra = isset($_GET["car"]) ? $_GET["car"] : "";

function vogalOuConsoante($caractere)
{
    $vogais = array('a', 'e', 'i', 'o', 'u');
    $caractere = strtolower($caractere);

    if (in_array($caractere, $vogais)) {
        return "Vogal";
    } else if (ctype_alpha($caractere)) {
        return "Consoante";
    } else {
        return "Não é uma letra";
    }
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <title>Vogal ou Consoante?</title>
</head>

<body>

    <h2>Verifique se a letra digitada é uma vogal ou consoante</h2>

    <form action="" method="get">
        <div class="form-group">
            <label for="car">Digite uma letra</label>
            <input type="text" name="car" id="car" maxlength="1">
            <button type="submit">Pesquisar</button>
        </div>
    </form>

    <h2 class="resultado">
        <? echo vogalOuConsoante($letra);  ?>
    </h2>

</body>

</html>