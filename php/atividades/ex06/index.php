<!-- Calcular o valor de uma venda com base no código do produto -->

<?php

$produto =  array(
    array("001", "Teclado Mecanico",  119.90),
    array("002", "Monitor full HD",  259.90),
    array("003", "Headset 7.1",  149.90),
);

$codProduto = isset($_POST['produto']) ? $_POST['produto'] : '';

$produtoEncontrado = null;


foreach ($produto as $prod) {
    if ($prod[0] === $codProduto) {
        $produtoEncontrado = $prod;
        break;
    }
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <title>Venda</title>
</head>

<body>
    <h2>Calcular venda</h2>

    <div class="pedido">
        <p><b>Pedido</b> 16:</p>
        <ul>
            <li>
                <? echo isset($produtoEncontrado) ? $produtoEncontrado[1] : ''; ?>
            </li>
        </ul>
        <p><b>Valor:</b> R$
            <? echo isset($produtoEncontrado) ? number_format($produtoEncontrado[2], 2) : '' ?>
        </p>
        <p><b>Total</b>:
            <? echo isset($produtoEncontrado) ? number_format($produtoEncontrado[2], 2) : '' ?>
        </p>
    </div>

    <form action="" method="POST">
        <div class="form-group">

            <label for="produto">Código do Produto:</label>
            <input type="text" name="produto" id="produto">
            <button type="submit">Calcular</button>
        </div>
    </form>


</body>

</html>