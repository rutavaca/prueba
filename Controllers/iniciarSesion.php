<?php
//IMPORTAMOS LAS DEPENDENCIAS NECESARIAS
require_once ("../Models/conexion_db.php");
require_once ("../Models/consultas-global.php");

//CAPTURAMOS EN VARIABLES LOS DATOS ENVIADOS DESDE EL FORMULARIO
//A TRAVÉS DEL MÉTODO POST Y LOS NAME DE LOS CAMPOS 
$user = $_POST['email'];
$pass = md5($_POST['contrasena']);



//CREAMOS EL OBJETO A PARTIR DE LA CLASE CONSULTAS PARA ENVIAR LOS DATOS DE UNA FUNCIÓN EN ESPECÍFICO
$objConsultas = new Consultas();
$result = $objConsultas->validarSesion($user, $pass);


?>