<?php

require_once('BD.class.php');

class Usuario{
    public static function buscar(){
        $con = BD::conectar();

        $sqls = $con->prepare('SELECT * FROM Usuario');

    }

}