<?php
session_start();

require_once __DIR__ . '/../models/UsuarioDAO.php';
require_once __DIR__ . '/../utils/Sanitização.php';
require_once __DIR__ . '/../models/Usuario.php';

if (!isset($_POST['email']) || !isset($_POST['senha'])) {
    echo "Erro: Dados do formulário não enviados.";
    exit;
}

$email = Sanitizacao::sanitizar($_POST['email']);
$senha = Sanitizacao::sanitizar($_POST['senha']);

$usuarioDAO = new UsuarioDAO();
$usuario = $usuarioDAO->buscarPorEmail($email); 

if ($usuario && password_verify($senha, $usuario->getSenha())) {
    if ($usuarioDAO->DeletarPorEmail($email)) {
        echo "Conta deletada com sucesso!";
    } else {
        echo "Erro ao deletar a conta.";
    }
} else {
    echo "Email ou senha incorretos.";
}
?>
