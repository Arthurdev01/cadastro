<?php


include '../controller/formController.php';

$corretores = showCorretores($connect);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Formulário de Cadastro</h1>
    <form class="formContainer" action="/prova/controller/formController.php" method="post">
        <div class="labelContainer">
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" pattern="[0-9]{11}" required><br>
        </div>
        <div class="labelContainer">
            <label for="creci">CRECI:</label>
            <input type="text" id="creci" name="creci" placeholder="Digite seu CRECI" minlength="2" required><br>
        </div>
        <div class="labelContainer">
            <label for="creci">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome" minlength="2" required><br>
        </div>

        <input class="botao"type="submit" value="Enviar">
    </form>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>CRECI</th>
                <th class="empty-column"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($corretores as $corretor) : ?>
                <tr>
                    <td><?php echo $corretor['id']; ?></td>
                    <td><?php echo $corretor['nome']; ?></td>
                    <td><?php echo $corretor['cpf']; ?></td>
                    <td><?php echo $corretor['creci']; ?></td>
                    <td class="tdbotao" >
                        <a href="index.php?id=<?php echo $corretor['id']; ?>" class="botaoexcluir"  type="submit">Excluir</a>
                        <a href="editar.php?id=<?php echo $corretor['id']; ?>"  class="botaoexcluir" type="submit">Editar</a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</body>


</html>