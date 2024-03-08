<?php 
//Enlazamos las dependencias

require_once("../../Models/conexion_db.php");
require_once("../../Models/consultasAdmin.php");


// Aterrizamos l Vriable enviada por URL
$identificacion = $_GET['identificacion'];

$objConsultas = new ConsultasAdmin();
$result = $objConsultas->eliminaDatos($identificacion);

?>