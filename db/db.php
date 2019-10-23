<?php
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("remotemysql.com", "5fS1UQixcu", "5fS1UQixcu", "wB20kREFJA");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>
