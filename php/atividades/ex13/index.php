<?php

/*3)Um determinado clube de futebol pretende classificar seus atletas em categorias e para isto ele contratou um programador para criar um programa que executasse esta tarefa. Para isso o clube criou uma tabela que continha a faixa etária do atleta e sua categoria. A tabela está demonstrada abaixo:
    IDADE CATEGORIA
    De 05 a 10 Infantil
    De 11 a 15 Juvenil
    De 16 a 20 Junior
    De 21 a 25 Profissional
*/

$idade = isset($_GET["idade"]) ? (int) $_GET["idade"] : null;

function classificaAtleta($idade)
{
    if (!empty($idade)) {
        switch (true) {
            case $idade >= 5 && $idade <= 10:
                return "Infantil";
            case $idade > 10 && $idade <= 15:
                return "Juvenil";
            case $idade > 15 && $idade <= 20:
                return "Junior";
            case $idade > 20 && $idade <= 25:
                return "Profissional";
            default:
                return "Não determinado  -> Indefinido";
        };
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <title>Futebol</title>
</head>

<body>

    <h2>Classificação de Atletas</h2>

    <form action="#" method="get">
        <div class="form-group">
            <label for="idade">Informe a Idade</label>
            <input type="text" name="idade" id="idade" maxlength="2">
            <button type="submit">Classificar</button>
        </div>
    </form>

    <h2 class="resultado mt-3">
        <? echo classificaAtleta($idade) ?>
    </h2>

</body>

</html>