<?php

require_once ("../../Models/conexion_db.php");
require_once ("../../Models/consultasAdmin.php");
require_once ("../../Models/consultas-global.php");
session_start();
$id = $_SESSION['id'];


//CAPTURAMOS EN VARIABLES LOS DATOS ENVIADOS DESDE EL FORMULARIO
//A TRAVÉS DEL MÉTODO POST Y LOS NAME DE LOS CAMPOS 


$contrasenaMD=md5($_POST['contrasenaMD']);

$contrasenaN=$_POST['contrasenaN'];
$validarContrasena=$_SESSION['contrasena'];

echo 'alert("'.$validarContrasena.'")';


if ($validarContrasena==$contrasenaMD){
$contrasenaEncriptada=md5($contrasenaN);
$objConsultas= new ConsultasAdmin();
$result = $objConsultas->modificarCon($id, $contrasenaEncriptada);

  
}
else {
  echo "La contraseña antigua es incorrecta.";
  echo '<script>location.href="../../Views/administrador/perfil.php"</script>';


}

 


//CREAMOS EL OBJETO A PARTIR DE LA CLASE CONSULTAS PARA ENVIAR LOS DATOS DE UNA FUNCIÓN EN ESPECÍFICO


?>