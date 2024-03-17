<!-- Calcular o desconto de acordo com a forma de pagamento (boleto, cartão, a vista). -->

<?php

$formaPgto = [
    "Cartão de Crédito" => 0.05,
    "Cartão de Débito" => 0.1,
    "PIX" => 0.15,
    "Dinheiro" => 0.15,
];

$valorPedido = 119.9;
$desconto = 0;
$total = $valorPedido;

$formaEsc = isset($_POST['formaPg']) ? $_POST['formaPg'] : null;

if (isset($formaEsc) && isset($formaPgto[$formaEsc])) {
    $desconto = $valorPedido * $formaPgto[$formaEsc];
    $total = $valorPedido - $desconto;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <title>Forma de Pagamento</title>
</head>

<body>
    <h2>Selecione sua forma de pagamento</h2>

    <div class="pedido">
        <p><b>Pedido</b> 16:</p>
        <ul>
            <li>Kit Teclado e Mouse - Logitech</li>
        </ul>
        <p><b>Valor:</b> R$119,90</p>
        <p><b>Desconto</b>:
            <? echo number_format($desconto, 2); ?>
        </p>
        <p><b>Total</b>:
            <? echo number_format($total, 2) ?>
        </p>
    </div>

    <form action="" method="POST">
        <div class="form-group">

            <label for="formaPg">Forma de Pagamento:</label>

            <select name="formaPg" id="formaPg">
                <option value="">Selecione</option>
                <option value="Cartão de Crédito" <?= $_POST['formaPg'] == "Cartão de Crédito" ? 'selected' : '' ?>>
                    Cartão de Crédito</option>
                <option value="Cartão de Débito" <?= $_POST['formaPg'] == "Cartão de Débito" ? 'selected' : '' ?>>Cartão
                    de Débito</option>
                <option value="PIX" <?= $_POST['formaPg'] == "PIX" ? 'selected' : '' ?>>PIX</option>
                <option value="Dinheiro" <?= $_POST['formaPg'] == "Dinheiro" ? 'selected' : '' ?>>Dinheiro</option>
            </select>

            <button type="submit">Calcular</button>
        </div>
    </form>

    <p><b>Descontos</b></p>
    <p>Cartão de Crédito: 5%, Cartão de Débito: 10%, PIX e Dinheiro: 15%</p>
</body>

</html>