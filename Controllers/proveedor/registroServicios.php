<?php

//IMPORTAMOS LAS DEPENDENCIAS NECESARIAS


require_once ("../../Models/conexion_db.php");
require_once ("../../Models/consultasPro.php");
//CAPTURAMOS EN VARIABLES LOS DATOS ENVIADOS DESDE EL FORMULARIO
//A TRAVÉS DEL MÉTODO POST Y LOS NAME DE LOS CAMPOS 

$nit=$_POST ['nit'];
$nombre_pro=$_POST['nombre_pro'];
$direccion=$_POST['direccion'];
$email_pro=$_POST['email_pro'];
$telefono_pro=$_POST['telefono_pro'];
$categoria=$_POST ['categoria'];
$estado_pro=$_POST['estado_pro'];
$foto_pro="../UploadsPro/proveedor/".$_FILES['foto_pro']['name'];
   $mover = move_uploaded_file($_FILES['foto_pro']['tmp_name'], $foto_pro);


//ENCRIPTAMOS LA CLAVE


//CREAMOS EL OBJETO A PARTIR DE LA CLASE CONSULTAS PARA ENVIAR LOS DATOS DE UNA FUNCIÓN EN ESPECÍFICO
$objConsultasPro= new ConsultasPro();
$result = $objConsultasPro->registrarServicios($nit,$nombre_pro,$direccion,$email_pro,$telefono_pro, $categoria,$estado_pro, $foto_pro);

?>