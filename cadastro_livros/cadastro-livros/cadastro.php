<?php
   $servername = "localhost";
   $username = "root";
   $password = "&tec77@info!";
   $dbname = "livros_usuarios";

   try {
       $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $nome = $_POST['nome'];
       $email = $_POST['email'];
       $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

       $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
       $stmt = $conn->prepare($sql);
       $stmt->bindParam(':nome', $nome);
       $stmt->bindParam(':email', $email);
       $stmt->bindParam(':senha', $senha);
       $stmt->execute();

       echo "Cadastro realizado com sucesso!";
   } catch(PDOException $e) {
       echo "Erro: " . $e->getMessage();
   }
   $conn = null;
   ?>

   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   </head>
   <body>
   <div class="form-container">
    <h2>Cadastro de Usuário</h2>
    <form action="/processar-cadastro" method="POST">
      <label for="nome">Nome completo:</label>
      <input type="text" id="nome" name="nome" required>

      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" required>

      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" required>

      <button type="submit">Cadastrar</button>
    </form>
  </div>
    
   </body>
   </html>