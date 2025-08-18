<?php
session_start();

require_once __DIR__ . '/../models/UsuarioDAO.php';
require_once __DIR__ . '/../utils/Sanitização.php';


if (!isset($_POST['email']) || !isset($_POST['senha'])) {
    echo "Erro: Dados do formulário não enviados.";
    exit;
}

$email = Sanitizacao::sanitizar($_POST['email']);
$senha = Sanitizacao::sanitizar($_POST['senha']);

$usuarioDAO = new UsuarioDAO();
$usuario = $usuarioDAO->validarLogin($email, $senha);

if ($usuario) {
    $_SESSION['logado'] = true;
    $_SESSION['usuario_id'] = $usuario->getId();
    header('Location: ./../../../');
} else {
    echo "Email ou senha incorretos.";
}
?>