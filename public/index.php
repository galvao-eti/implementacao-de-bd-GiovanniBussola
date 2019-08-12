<?php
    include "../vendor/autoload.php";
    use PosAlfa\BancoDeDados;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trabalho Galvão</title>
</head>

<body>
    <h3 class="text-center">Listagem de funcionários</h3>
    <div class="container">
        <?php
        
        $findFuncionarios = new \PosAlfa\BancoDeDados();

        foreach ($findFuncionarios as $funcionario):
        ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data Nascimento</th>
                    <th>Função</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $funcionario->id ?></td>
                    <td><?= $funcionario->nome ?></td>
                    <td><?= $funcionario->data_nascimento ?></td>
                    <td><?= $funcionario->funcao ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>