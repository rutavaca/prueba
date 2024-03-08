<?php

//IMPORTAMOS LAS DEPENDENCIAS NECESARIAS

require_once ("../../Models/conexion_db.php");
require_once ("../../Models/consultacliente.php");
require_once ("../../Models/consultas-global.php");
session_start();
$id = $_SESSION['id'];
global $id;
$id=$_POST['id'];
$foto="../../Uploads/users".$_FILES['foto']['name'];
   $mover = move_uploaded_file($_FILES['foto']['tmp_name'], $foto);

$objConsultas= new consultasC();
$result = $objConsultas->modificaF($id,$foto);

?>