<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login.css">
    <title>Login</title>
    <link rel="shortcut icon" href="./icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />                    
</head>
<body>

    <form action="../C/login.php" method="POST">
        
        <span class="material-symbols-outlined">lock</span>
        <h1>Login</h1>

        <input type="text" placeholder="Nome" name="nome" required>
        <input type="password" placeholder="Senha" name="senha" required>
        <input type="submit" value="Enviar">

    </form>

</body>
</html>