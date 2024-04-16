<?php

$numProdutos = 3;
$total = 0;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../main.css">
    <title>Soma de Valores</title>
</head>

<body>

    <h2>Soma de Produtos</h2>

    <form action="#" method="post">
        <?

        for ($i = 1; $i <= $numProdutos; $i++) {
            echo "<div>";
            echo "<label for='produto$i'>Valor do Produto $i: </label>";
            echo "<input type='number' name='produto$i' id='produto$i' required style='margin: 0.5rem;'>";
            echo "</div>";
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            for ($i = 1; $i <= $numProdutos; $i++) {
                $valorProduto = $_POST["produto$i"];
                $total += $valorProduto;
            }

            echo "<p> Total da Compra: R$ " . number_format($total, 2, ", ", " . ") . "</p >";
        }
        ?>
        <input type="submit" value="Calcular">
    </form>



</body>

</html>