<?php
require_once __DIR__ . '/../models/Usuario.php';
require_once __DIR__ . '/../models/UsuarioDAO.php';
require_once __DIR__ . '/../utils/Sanitização.php';

$email = Sanitizacao::sanitizar($_POST['email']);
$senha = Sanitizacao::sanitizar($_POST['senha']);
$nome = Sanitizacao::sanitizar($_POST['nome']);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Erro: Formato de e-mail inválido.";
    exit;
}

$dominio = substr(strrchr($email, "@"), 1);
if (!checkdnsrr($dominio, "MX")) {
    echo "Erro: O domínio do e-mail não existe ou não possui servidor de e-mail válido.";
    exit;
}

$usuarioDAO = new UsuarioDAO();

$usuarioExistente = $usuarioDAO->buscarPorEmail($email);
if ($usuarioExistente) {
    echo "Erro: Já existe um usuário com esse email.";
    exit;
}

$usuario = new Usuario();
$usuario->setEmail($email);
$usuario->setNome($nome);
$usuario->setSenha(password_hash($senha, PASSWORD_DEFAULT));

if ($usuarioDAO->inserir($usuario)) {
    echo "Cadastro realizado com sucesso! Faça login agora.";
} else {
    echo "Erro ao cadastrar o usuário.";
}
?>                                                   
