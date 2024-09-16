<?php
require_once'../M/BD.class.php';

//Conectar ao banco de dados e armazenar conexão em $con
$con = BD::conectar();

//Comando SQL que recebe 2 parâmetros
$comando = $con->prepare('INSERT INTO Trabalho(titulo,descricao,categoria) VALUES(:titulo,:descricao,:categoria)');

//Conectar os parâmetros recebidos via post às entradas do value no SQL
$comando->bindValue('titulo', $_POST['titulo']);
$comando->bindValue('descricao', $_POST['descricao']);
$comando->bindValue('categoria', $_POST['categoria']);

//Executar - retorna se ocorreu tudo bem ou não - 
$deuCerto = $comando->execute();

if ($deuCerto) {
    echo'Trabalho cadastrado com sucesso.';
    include("../V/menu.php");
}
else {
    echo'Usuário ou senha incorretos.'; 
}

