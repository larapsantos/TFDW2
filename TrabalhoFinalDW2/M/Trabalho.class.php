<?php

require_once('BD.class.php');

class Trabalho{
    public static function buscar(){
        $con = BD::conectar();

        $sqls = $con->prepare('SELECT * FROM Trabalho');
        
    }

}