<?php

//IMPORTAMOS LAS DEPENDENCIAS NECESARIAS

use LDAP\Result;

require_once ("../Models/conexion_db.php");
require_once ("../Models/consultas-global.php");
//CAPTURAMOS EN VARIABLES LOS DATOS ENVIADOS DESDE EL FORMULARIO
//A TRAVÉS DEL MÉTODO POST Y LOS NAME DE LOS CAMPOS 

$identificacion=$_POST ['identificacion'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$contrasena=$_POST['contrasena'];
$rol=$_POST ['rol'];
$ccontrasena=$_POST ['ccontrasena'];
$estado="Activo";
$fecha_creacion= date('y-m-d');
$foto="../Uploads/users/".$_FILES['foto']['name'];
   $mover = move_uploaded_file($_FILES['foto']['tmp_name'], $foto);

//VERIFICAR QUE LAS CONTRASEnAS SEAN IGUALES

if($contrasena==$ccontrasena){
//ENCRIPTAMOS LA CLAVE
$contrasenaMD=md5($contrasena);

//CREAMOS EL OBJETO A PARTIR DE LA CLASE CONSULTAS PARA ENVIAR LOS DATOS DE UNA FUNCIÓN EN ESPECÍFICO
$objConsultas= new Consultas();
$result = $objConsultas->registrarUserExterno($identificacion,$nombres,$apellidos,$email,$telefono,$contrasenaMD, $rol,$estado,$fecha_creacion,$foto);
}
else {
    echo'<script> alert("Las contrasenas ingresadas no coinciden")</script>';
    echo "<script>
    location.href='../Views/extras/page-register.html'</script>";
}

?>