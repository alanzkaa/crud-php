<?php
require_once 'conexao.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = $_POST['nome'];

    if (!empty($nome) && !empty($email) && !empty($senha))

        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuarios(nome,email,senha) VALUES
        (:nome,:email,:senha)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(":nome",$nome);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":senha",$senhaHash);

        if ($stmt->execute()){
            echo "usuario cadastrado";
        }else{
            echo "erro ao cadastrar";
        }
}else{
    echo"preencha todos os campos.";
}