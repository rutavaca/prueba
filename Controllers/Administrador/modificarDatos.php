<?php

//IMPORTAMOS LAS DEPENDENCIAS NECESARIAS

use LDAP\Result;

require_once ("../../Models/conexion_db.php");
require_once ("../../Models/consultasAdmin.php");
require_once ("../../Models/consultas-global.php");

//CAPTURAMOS EN VARIABLES LOS DATOS ENVIADOS DESDE EL FORMULARIO+
//A TRAVÉS DEL MÉTODO POST Y LOS NAME DE LOS CAMPOS 

$id=$_POST ['id'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];


//ENCRIPTAMOS LA CLAVE

//CREAMOS EL OBJETO A PARTIR DE LA CLASE CONSULTAS PARA ENVIAR LOS DATOS DE UNA FUNCIÓN EN ESPECÍFICO
$objConsultas= new ConsultasAdmin();
$result = $objConsultas->ModificarDatoS($id,$nombres,$apellidos,$email,$telefono);

?>