<?php

/*4)Leia o código de um determinado produto e mostre sua classificação. Utilize a seguinte tabela como referência:
    Código Classificação
    1 Alimento não-perecível
    2,3 ou 4 Alimento perecível
    5 ou 6 Vestuário
    7 Higiene Pessoal
    8 até 15 Limpeza e Utensílios Domésticos
    Qualquer outro código inválido.
*/


$produtos = array(
    1 => "Sal",
    2 => "Carne bovina",
    3 => "Carne suína",
    4 => "Peixe",
    5 => "Camiseta",
    6 => "Camisola",
    7 => "Shampoo",
    8 => "Condicionador",
    9 => "Detergente",
    10 => "Sabão em pó",
    11 => "Esponja",
    12 => "Água Sanitária",
    13 => "Desinfetante",
    14 => "Pano",
    15 => "Vassoura"
);

$produto = isset($_GET['produto']) ? (int) $_GET['produto'] : null;

function retornaCategoriaProduto($produtos, $produto)
{
    if (!empty($produtos[$produto])) {

        switch ($produto) {
            case 1:
                return 'Alimento não-perecível';
                break;

            case ($produto >= 2 && $produto <= 4):
                return 'Alimento perecível';
                break;

            case ($produto <= 6):
                return 'Vestuário';
                break;

            case 7:
                return 'Higiene Pessoal';
                break;

            case ($produto >= 8 && $produto <= 15):
                return 'Limpeza e Utensílios Domésticos';
                break;

            default:
                return 'Código Inválido';
                break;
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
    <title>Classificar Produto</title>
</head>

<body>

    <h2>Categorização de Produtos</h2>
    <form action="#" method="get">
        <div class="form-group">
            <label for="produto">Código do Produto</label>
            <input type="text" name="produto" id="produto">
            <button type="submit">Pesquisar</button>
        </div>
    </form>

    <h2 class="resultado">
        <? echo retornaCategoriaProduto($produtos, $produto); ?>
    </h2>


</body>

</html>