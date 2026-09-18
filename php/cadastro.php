<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuários</title>
</head>
<body>
    <h2>cadastrar novo usuário</h2>
    <form action="cadastrar.php" method="post">
        <label>Nome: </label>
        <input type="text" name="nome" required><br><br>
        <label>Email: </label>
        <input type="email" name="email" required><br><br>
        <label>Senha: </label>
        <input type="password" name="senha" required><br><br>
        <button type="submit">cadastrar</button>
    </form>
</body>
</html>