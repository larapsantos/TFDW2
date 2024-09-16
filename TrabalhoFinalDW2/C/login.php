<?php
require_once'../M/BD.class.php';

//Conectar ao banco de dados e armazenar conexão em $con
$con = BD::conectar();

//Comando SQL que recebe 2 parâmetros
$comando = $con->prepare('INSERT INTO Usuario(nome,senha) VALUES(:nome,:senha)');

//Conectar os parâmetros recebidos via post às entradas do value no SQL
$comando->bindValue('nome', $_POST['nome']);
$comando->bindValue('senha', $_POST['senha']);


//Executar - retorna se ocorreu tudo bem ou não - 
$deuCerto = $comando->execute();

if ($deuCerto) {
    include("../V/menu.php");
}
else {
    echo'Usuário ou senha incorretos.'; 
}

