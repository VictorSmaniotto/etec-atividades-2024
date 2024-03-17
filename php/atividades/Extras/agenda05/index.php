<!-- A Diretora da escola ficou encantada com o resultado do trabalho de Joseph e pediu para ele desenvolver uma página
para exibir as notas do oitavo ano A.
Joseph ficou muito feliz e conversou com a equipe de banco de dados da rede municipal referente as informações e dados da turma.
Por sorte, a equipe de banco de dados lhe enviou um array bidimencional com os dados para a realização do trabalho.
Utilizando o que foi visto até agora, crie a página solicitada utilizando vetor.
O resultado deverá ser exibido ao usuário em forma de tabela, conforme demonstra a imagem: -->


<?php

// Definir o array bidimensional com os dados dos alunos
// Básicamente um array dentro de outro, para acessar a primeira dimensão $boletins[0] e para acessar a segunda dimensão $boletins[0][0]

$boletins = array(
    array("Aline", 10, 9.5),
    array("Alfredo", 8, 5),
    array("Carla", 5, 6.5),
    array("César", 9, 9),
    array("Daniel", 10, 7),
    array("Esnar", 8, 6),
    array("Henzo", 6, 8),
    array("Pablo", 7, 5),
    array("Wallace", 8, 7),
    array("Zulmira", 10, 6),
);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Boletins 8º A</title>
</head>

<body>
    <header>
        <h2>8º ANO A</h2>
    </header>

    <table>
        <thead>
            <th>Nome</th>
            <th>Primeiro Semestre</th>
            <th>Segundo Semestre</th>
        </thead>

        <tbody>
            <?
            foreach ($boletins as $boletim) {
                echo "<tr>";
                echo "<td>" . $boletim[0] . "</td>";
                echo "<td>" . $boletim[1] . "</td>";
                echo "<td>" . $boletim[2] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>