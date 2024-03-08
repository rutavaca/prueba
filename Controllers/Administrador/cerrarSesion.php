<?php 
require_once("../../Models/conexion_db.php");
require_once("../../Models/consultas-global.php");


$objConsultas=new Consultas();
$result= $objConsultas->cerrarSesion();

?>