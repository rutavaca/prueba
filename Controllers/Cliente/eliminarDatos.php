<?php 
//Enlazamos las dependencias

require_once("../../Models/conexion_db.php");
require_once("../../Models/consultaCliente.php");

// Aterrizamos l Vriable enviada por URL
$identificacion = $_GET['identificacion'];

$objConsultas = new consultasC();
$result = $objConsultas->eliminaC($identificacion);

?>