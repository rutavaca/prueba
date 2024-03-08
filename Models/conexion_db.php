<?php

class  Conexion {
    public function get_conexion(){
        $user="root";
        $pass="";
        $host="localhost";
        $dbname="ruta_vacacional";
        $conexion= new PDO("mysql: host=$host; dbname=$dbname;", $user,$pass);
        return $conexion;
    }
}

?>