<?php
session_start();
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header("Location: verificar-atu.php");
    exit;
}
?>

<form method="post" action="process-atualizar.php">
    <label for="nome">Novo nome: </label>
    <input type="text" id="nome" name="nome" required>
    <br>
    <label for="nome">Novo email: </label>
    <input type="text" id="email" name="email" required>
    <br>
    <label for="nova_senha">Nova senha (deixe vazio para deixar a mesma): </label>
    <input type="password" id="nova_senha" name="nova_senha">
    <br>
    <button type="submit">Atualizar</button>
</form>
