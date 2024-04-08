<?php
/*
5. O cardápio de uma casa de lanches é dado pela tabela abaixo:
Código - Produto Preço Unitário (R$)
100 - Cachorro quente R$ 1,70
101 - Bauru Simples R$ 2,30
102 - Bauru com ovo R$ 2,60
103 - Hamburguer R$ 2,40
104 - Cheeseburguer R$ 2,50
105 - Refrigerante R$ 1,00
O usuário ira digitar o código do lanche e a quantidade comprada, será mostrado ao final o valor total da compra.
*/

$produtos = array(
    array(100, "Cachorro quente", 1.7),
    array(101, "Bauru Simples", 2.3),
    array(102, "Bauru com ovo", 2.6),
    array(103, "Hamburguer", 2.4),
    array(104, "Cheeseburguer", 2.5),
    array(105, "Refrigerante", 1),

);

$codigo = isset($_GET['codigo']) ? $_GET['codigo'] : null;
$quantidade = isset($_GET['qtd']) ? $_GET['qtd'] : null;
$resultado = 0;

function retornaProduto($codigo, $quantidade, $produtos)
{
    if (!empty($codigo) && !empty($quantidade)) {
        foreach ($produtos as $produto) {
            if ($produto[0] == $codigo) {
                $resultado = number_format($produto[2] * $quantidade, 2);
                return "$quantidade X - $produto[1] - R$ $resultado";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <title>Lanchonete</title>
</head>

<body>

    <h2>Calcula Comanda</h2>

    <form action="#" method="get">
        <div class="form-group">
            <label for="codigo">Código:</label>
            <input type="text" name="codigo" id="codigo">
        </div>

        <div class="form-group">
            <label for="qtd">Quantidade</label>
            <input type="text" name="qtd" id="qtd">
            <button type="submit">Calcular</button>
        </div>
    </form>

    <h2 class="resultado mt-3">
        <? echo retornaProduto($codigo, $quantidade, $produtos) ?>
    </h2>

</body>

</html>