<?php

//IMPORTAMOS LAS DEPENDENCIAS NECESARIAS

use LDAP\Result;
require_once ("../../Models/conexion_db.php");
require_once ("../../Models/consultasPro.php");
require_once ("../../Models/consultas-global.php");
session_start();
$id = $_SESSION['id'];
//CAPTURAMOS EN VARIABLES LOS DATOS ENVIADOS DESDE EL FORMULARIO+
//A TRAVÉS DEL MÉTODO POST Y LOS NAME DE LOS CAMPOS 


$nombres=$_POST['nombres'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];


//ENCRIPTAMOS LA CLAVE

//CREAMOS EL OBJETO A PARTIR DE LA CLASE CONSULTAS PARA ENVIAR LOS DATOS DE UNA FUNCIÓN EN ESPECÍFICO
$objConsultas= new ConsultasPro();
$result = $objConsultas->ModificarDatoPro($id,$nombres,$email,$telefono);

?>