<?php

//IMPORTAMOS LAS DEPENDENCIAS NECESARIAS

use LDAP\Result;

require_once ("../../Models/conexion_db.php");
require_once ("../../Models/consultasAdmin.php");
//CAPTURAMOS EN VARIABLES LOS DATOS ENVIADOS DESDE EL FORMULARIO
//A TRAVÉS DEL MÉTODO POST Y LOS NAME DE LOS CAMPOS 

$identificacion=$_POST ['identificacion'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$contrasena=$_POST['identificacion'];
$rol=$_POST ['rol'];
$estado=$_POST['estado'];


$foto="../../Uploads/users/".$_FILES['foto']['name'];
   $mover = move_uploaded_file($_FILES['foto']['tmp_name'], $foto);
//ENCRIPTAMOS LA CLAVE
$contrasenaMD=md5($contrasena);

//CREAMOS EL OBJETO A PARTIR DE LA CLASE CONSULTAS PARA ENVIAR LOS DATOS DE UNA FUNCIÓN EN ESPECÍFICO
$objConsultas= new ConsultasAdmin();
$result = $objConsultas->registrarUser($identificacion,$nombres,$apellidos,$email,$telefono,$contrasenaMD, $rol,$estado, $foto);

?>