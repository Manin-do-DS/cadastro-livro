<?php
session_start();

require_once '../models/UsuarioDAO.php';
require_once '../utils/Sanitização.php';

if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    echo "Acesso negado.";
    exit;
}

if (!isset($_POST['nome'], $_POST['email'])) {
    echo "Dados incompletos.";
    exit;
}

$usuarioDAO = new UsuarioDAO();

$id = $_SESSION['usuario_id'];
$usuario = $usuarioDAO->buscarPorId($id);

if (!$usuario) {
    echo "Usuário não encontrado.";
    exit;
}

$novoEmail = Sanitizacao::sanitizar($_POST['email']);
$novoNome = Sanitizacao::sanitizar($_POST['nome']);
$usuario->setEmail($novoEmail);
$usuario->setNome($novoNome);

if (!empty($_POST['nova_senha'])) {
    $novaSenha = Sanitizacao::sanitizar($_POST['nova_senha']);
    $usuario->setSenha(password_hash($novaSenha, PASSWORD_DEFAULT));
}

$usuarioExistente = $usuarioDAO->buscarPorEmail($novoEmail);
if ($usuarioExistente && $usuarioExistente->getId() != $id) {
    echo "Este email já está sendo usado por outro usuário.";
    exit;
}

if ($usuarioDAO->atualizar($usuario)) {
    echo "Informações atualizadas com sucesso!";
    $_SESSION['usuario_email'] = $novoEmail;
} else {
    echo "Erro ao atualizar as informações.";
}
