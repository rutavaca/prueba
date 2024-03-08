<?php

require_once ("../../Models/conexion_db.php");
require_once ("../../Models/consultacliente.php");
require_once ("../../Models/consultas-global.php");


$id = $_SESSION['id'];


//CAPTURAMOS EN VARIABLES LOS DATOS ENVIADOS DESDE EL FORMULARIO
//A TRAVÉS DEL MÉTODO POST Y LOS NAME DE LOS CAMPOS 


$contrasenaMD=md5($_POST['contrasenaMD']);

$contrasenaN=$_POST['contrasenaN'];
$validarContrasena=$_SESSION['contrasena'];

echo 'alert("'.$validarContrasena.'")';


if ($validarContrasena==$contrasenaMD){
$contrasenaEncriptada=md5($contrasenaN);
$objConsultas= new consultasC();
$result = $objConsultas->modificaCon($id, $contrasenaEncriptada);

  
}
else {
  echo "La contraseña antigua es incorrecta.";
  echo '<script>location.href="../../Views/cliente/perfilC.php"</script>';


}

 


//CREAMOS EL OBJETO A PARTIR DE LA CLASE CONSULTAS PARA ENVIAR LOS DATOS DE UNA FUNCIÓN EN ESPECÍFICO


?>