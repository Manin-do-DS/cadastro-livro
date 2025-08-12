<?php

session_start();

require_once '../models/UsuarioDAO.php';
require_once '../utils/Sanitização.php';

if (!isset($_POST['email'], $_POST['senha'])) {
    echo "Dados incompletos.";
    exit;
}

$email = Sanitizacao::sanitizar($_POST['email']);
$senha = Sanitizacao::sanitizar($_POST['senha']);

$usuarioDAO = new UsuarioDAO();
$usuario = $usuarioDAO->validarLogin($email, $senha);

if ($usuario) {
    $_SESSION['logado'] = true;
    $_SESSION['usuario_id'] = $usuario->getId();  // guardar o id do usuário
    header("Location: atualizar.php");
    exit;
} else {
    echo "Email ou senha incorretos.";
}

?>