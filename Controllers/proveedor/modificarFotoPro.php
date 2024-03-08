<?php

//IMPORTAMOS LAS DEPENDENCIAS NECESARIAS

require_once ("../../Models/conexion_db.php");
require_once ("../../Models/consultasPro.php");
require_once ("../../Models/consultas-global.php");
session_start();
$id = $_SESSION['id'];


$foto="../../Uploads/users/".$_FILES['foto']['name'];
   $mover = move_uploaded_file($_FILES['foto']['tmp_name'], $foto);

$objConsultas= new ConsultasPro();
$result = $objConsultas->modificarFotoPro($id,$foto);

?>