<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="titulo" >Formulário de Edição</h1>
    <form class="formContainer" action="/prova/controller/formController.php" method="post">
        <input type="hidden" name="_method" value="put"/>
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

        <input class="botao" type="submit" value="Salvar">
    </form>
</body>

</html>