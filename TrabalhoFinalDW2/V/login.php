<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        input,form{
            margin: 5px;
            flex-direction: row;
        }
    </style>
</head>
<body>
    <h1>Login</h1>

    <form action="../C/login.php" method="POST">

        <input type="text" placeholder="Nome" name="nome" required>
        <input type="password" placeholder="Senha" name="senha" required>
        <input type="submit" name="Enviar">

    </form>

</body>
</html>