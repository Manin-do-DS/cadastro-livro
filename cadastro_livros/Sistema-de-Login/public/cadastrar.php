<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta</title>
</head>
<body>
    <form method="post" action="process-cadastro.php">
        <label for="email">Email: </label>
        <input type="text" id="email" name="email" required>
        <br>
        <label for="senha">Senha: </label>
        <input type="password" id="senha" name="senha" required>
        <br>
        <label for="nome">Nome:</nome>
        <input type="text" id="nome" name= "nome" required>
        <br>
        <button type="submit" name="criar">Criar</button>
    </form>
</body>
</html>
