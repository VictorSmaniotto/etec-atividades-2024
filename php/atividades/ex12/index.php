<?php
// 2)Classificar um triângulo como equilátero, isósceles ou escaleno, com base nos valores dos seus lados.

$lado1 = isset($_POST["lado1"]) ? is_numeric($_POST["lado1"]) : null;
$lado2 = isset($_POST["lado2"]) ? is_numeric($_POST["lado2"]) : null;
$lado3 = isset($_POST["lado3"]) ? is_numeric($_POST["lado3"]) : null;

function classificarTriangulo($lado1, $lado2, $lado3)
{

    if (isset($lado1, $lado2, $lado3) && !empty($lado1) && !empty($lado2) && !empty($lado3)) {

        if ($lado1 === $lado2 && $lado2 === $lado3) {
            return 'Equilátero';
        } else if ($lado1 !== $lado2 && $lado1 !== $lado3 && $lado2 !== $lado3) {
            return 'Escaleno';
        } else {
            return 'Isósceles';
        }
    } else {
        return 'Todos os campos devem ser preenchidos!';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <title>Triângulo</title>
</head>

<body>

    <h2>Defina o triângulo</h2>

    <form action="#" method="post">
        <div class="form-group-row">
            <label for="lado1">Lado A</label>
            <input type="text" name="lado1" id="lado1">

            <label for="lado2">Lado B</label>
            <input type="text" name="lado2" id="lado2">

            <label for="lado3">Lado C</label>
            <input type="text" name="lado3" id="lado3">

            <button type="submit">Enviar</button>
        </div>
    </form>

    <h2 class="resultado mt-3">
        <?= classificarTriangulo($lado1, $lado2, $lado3) ?>
    </h2>

</body>

</html>