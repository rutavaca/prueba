<?php
require_once("../../Models/conexion_db.php");
require_once("../../Controllers/proveedor/mostrarperfilP.php");
require_once("../../Models/consultasPro.php");
require_once("../../Models/consultas-global.php");
?>

    <style>
        .logo{
            background-color: #406844;
           
        }
        .nano{
            background-color:  #406844;
        }
        .s{
            background-color:  #406844;
        }
       
 
    </style>

<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
       
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="home.php"><!-- <img src="images/logo.png" alt="" /> --><span><h6>Ruta Vacacional</h6></span></a></div>
                    <?php 
                    
                    cargarPerfilPro();
                    ?>


                            
                    <li><a href="homeP.php"><i class="ti-home"></i> Inicio </a></li>
                   
                  
                    
                        
            </div>
            </div>
            
        
    </div>
   