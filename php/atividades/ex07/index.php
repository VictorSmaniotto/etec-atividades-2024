<!-- Exibir a mensagem correspondente a uma faixa etária (Jovens <= 19 anos, adultos 20 até 59 anos, idoso >= 60) -->

<?php

$idade = isset($_GET['idade']) ? intval($_GET['idade']) : null;


function classificarIdade($idade)
{
    if (!empty($idade) && $idade !== 0) {
        switch (true) {
            case ($idade <= 19):
                return "Jovem";
            case ($idade >= 20 && $idade <= 59):
                return "Adulto";
            case ($idade >= 60):
                return "Idoso";
            default:
                return "Idade inválida";
        }
    } else {
        return "Idade inválida";
    }
}



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <title>Classificação de Idade</title>
</head>

<body>

    <h2>Classificação de Idade</h2>

    <form action="" method="GET">
        <div class="form-group">
            <label for="idade">Informe sua idade</label>
            <input type="text" id="idade" name="idade">
            <button type="submit">Pesquisar</button>
        </div>
    </form>

    <h2 class="resultado">
        <? echo classificarIdade($idade) ?>
    </h2>

</body>

</html>