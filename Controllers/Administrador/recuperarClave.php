<?php 
require_once("../../Models/conexion_db.php");
require_once("../../Models/generarClaveEmail.php");



$identificacion=$_POST['identificacion'];
$email=$_POST['email'];

$objClave=new GenerarClave();
$result =$objClave->enviarNuevaClave($identificacion, $email);


?> 