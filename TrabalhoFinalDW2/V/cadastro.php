<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />                    
</head>
<body>

<form action="../C/trabalho.php" method="POST">
    
    <span class="material-symbols-outlined">add_task</span>
    <h2>Cadastro de trabalhos</h2>

    <input type="text" class="titulo" placeholder="Título" name="titulo" required maxlength="128">
    <textarea class="desc" placeholder="Descreva aqui o seu trabalho:" required maxlength="1000"></textarea><br>
    <select name="categorias">Categoria:
        <option value="select">Selecionar categoria</option>
        <option value="exatas">Ciências Exatas</option>
        <option value="humanas">Ciências Humanas</option>
        <option value="biologicas">Ciências Biológicas</option>
    </select><br>
    <input type="submit" value="Cadastrar Trabalho" class="enviar">
    
</form>

</body>
</html>
