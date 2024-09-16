<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
    input,form{
        margin: 5px;
        flex-direction: row;
    }
    </style>
</head>
<body>

<h2>Cadastro de trabalhos</h2>

<form action="../C/trabalho.php" method="POST">

    <input type="text" placeholder="Título" name="titulo" required maxlength="128">
    <input type="text" placeholder="Descreva aqui o seu trabalho:" required maxlength="1000">
    <select name="categorias">
        <option value=" "> </option>
        <option value="exatas">Ciências Exatas</option>
        <option value="humanas">Ciências Humanas</option>
        <option value="biologicas">Ciências Biológicas</option>
    </select>
    <input type="submit" value="Enviar">
    
</form>

</body>
</html>
