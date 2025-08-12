<?php
require_once 'Usuario.php';
require_once '../config/Database.php';

class UsuarioDAO {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }
    
    public function buscarPorEmail($email) {
        $query = "SELECT * FROM usuario WHERE email = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $usuarioData = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($usuarioData) {
            $usuario = new Usuario();
            $usuario->setId($usuarioData['id']);
            $usuario->setEmail($usuarioData['email']);
            $usuario->setNome($usuarioData['nome']);
            $usuario->setSenha($usuarioData['senha']);
            return $usuario;
        }
    
        return null;
    }
    public function validarLogin($email, $senha) {
        $usuario = $this->buscarPorEmail($email);
        if ($usuario && password_verify($senha, $usuario->getSenha())) {
            return $usuario;
        }
        return null;
    }
    
    public function DeletarPorEmail($email) {
        $query = "DELETE FROM usuario WHERE email = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }
    
    

    public function inserir(Usuario $usuario) {
        $query = "INSERT INTO usuario (email, nome, senha) VALUES (:email, :nome, :senha)";
        $stmt = $this->conn->prepare($query);
        $email = $usuario->getEmail();
        $nome = $usuario->getNome();
        $senha = $usuario->getSenha();

        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':senha', $senha);

        return $stmt->execute();
    }

    public function atualizar(Usuario $usuario) {
        $query = "UPDATE usuario SET email = :email, nome = :nome, senha = :senha WHERE id = :id";
        $stmt = $this->conn->prepare($query);
    
        $id = $usuario->getId();
        $email = $usuario->getEmail();
        $nome = $usuario->getNome();
        $senha = $usuario->getSenha();
    
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':senha', $senha);
    
        return $stmt->execute();
    }
    
    public function buscarPorId($id) {
        $query = "SELECT * FROM usuario WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $usuarioData = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($usuarioData) {
            $usuario = new Usuario();
            $usuario->setId($usuarioData['id']);
            $usuario->setEmail($usuarioData['email']);
            $usuario->setNome($usuarioData['nome']);
            $usuario->setSenha($usuarioData['senha']);
            return $usuario;
        }
    
        return null;
    }
    
    
}