<?php

class Conexion{

    public static function conectar(){

        $cn= new PDO("mysql:host=localhost;dbname=neptuno;charset=utf8",'root','');
        $cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $cn;
    }
}
?>