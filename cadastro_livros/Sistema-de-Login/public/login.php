<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../assets/login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="process-login.php" method="POST">
        <label for="email">Email: </label>
        <input type="text" id="email" name="email" required>
        <br>
        <label for="senha">Senha: </label>
        <input type="password" id="senha" name="senha" required>
        <br>
        <button type="submit" name="entrar">entrar</button>
    </form>
</body>
</html>