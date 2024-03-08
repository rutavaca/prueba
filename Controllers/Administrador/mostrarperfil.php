<?php 
require_once("../../Models/consultas-global.php");


    function cargarPerfil(){
//Utilizamos la variable de sesion Global para traer todos los datos  de usuario

$id = $_SESSION['id'];



$objConsultas = new ConsultasAdmin();
$result= $objConsultas->consultarUserformS($id);

foreach($result as $f);
$foto='../'.$f['foto'];
echo'
                    <li>
                        <a class="sidebar-sub-toggle">

                       <img src="'.$foto.'" alt="Foto de usuario" style="width:60px; height:60px; border-radius:50%; border: 2px solid aqua"> '.$f['nombres'].'     '.$f['apellidos'].'
                       <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="perfil.php">Editar perfil</a></li>
                            <li><a href="../../Controllers/cerrarSesion.php">Cerrar sesion</a></li>
                           
                        </ul>
                    </li>
';


    }
    
        
              

      
    ?>