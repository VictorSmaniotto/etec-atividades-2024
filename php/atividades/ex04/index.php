<!-- Exibir a categoria de um produto com base em seu código. -->

<?php

$categoria = [
    3231 => "Educação",
    2125 =>  "Saúde",
    5542 => "Bem estar",
    2182 =>  "Finanças"
];

$categoriaSelecionada = isset($_POST['categoria']) ? $_POST['categoria'] : '';
$resultado = '';

if (isset($categoriaSelecionada) && isset($categoria[$categoriaSelecionada])) {
    $resultado = $categoria[$categoriaSelecionada];
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <title>Categorias</title>
</head>

<body>

    <h2>Cadastro de Revista</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo">
        </div>

        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" id="autor" name="autor">
        </div>

        <div class="form-group-button">
            <label for="categoria">Categoria</label>
            <input type="text" id="categoria" name="categoria" placeholder="<? echo $resultado; ?>">
            <button type="submit">🔍</button>
        </div>
    </form>

</body>

</html>