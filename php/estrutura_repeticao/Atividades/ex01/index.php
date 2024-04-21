<?php

// Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado.

$num = isset($_POST['numero']) ? $_POST['numero'] : null;
$tabuada = '';

function calculaTabuada($numero, $tabuada)
{
    if (is_numeric($numero)) {
        $i = 1;
        while ($i <= 10) {
            $tabuada .= "<tr><td>" . $numero . " x " . $i . " = " . ($numero * $i) . "</td></tr>";
            $i++;
        }
        return $tabuada;
    } else {
        return "<tr><td>Digite um número válido</td></tr>";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="../main.css">
</head>

<body>

    <h2 class="intro">Digite um número e veja sua tabuada </h2>

    <form action="#" method="POST">
        <div class="form-group">
            <label for="numero">Número: </label>
            <input type="text" name="numero" id="numero">
            <button type="submit">Enviar</button>
        </div>
    </form>



    <div class="tabela">
        <table>
            <thead>
                <th scope="1">Tabuada do
                    <? echo $num ?>
                </th>

            </thead>
            <tbody>
                <? echo calculaTabuada($num, $tabuada); ?>
            </tbody>
        </table>
    </div>

</body>

</html>