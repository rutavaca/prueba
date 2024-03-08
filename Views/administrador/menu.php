<?php
require_once("../../Models/conexion_db.php");
require_once("../../Controllers/Administrador/mostrarperfil.php");
require_once("../../Models/consultasAdmin.php");
require_once("../../Models/consultas-global.php");
?>

    

<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="home.php"><!-- <img src="images/logo.png" alt="" /> --><span>Ruta Vacacional</span></a></div>
                    <?php 
                    
                    cargarPerfil();
                    ?>


                            <li class="label">Menú principal</li>
                    <li><a href="home.php"><i class="ti-home"></i> Inicio </a></li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-user"></i> Usuarios <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="registrarUser.php">Registrar</a></li>
                            <li><a href="verUsers.php">Ver</a></li>
                            <li><a href="reportesUser.php">Reportes</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-briefcase"></i> Productos <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="../dashboard/chart-flot.html">Registrar</a></li>
                            <li><a href="../dashboard/chart-morris.html">Ver</a></li>
                            <li><a href="../dashboard/chartjs.html">Reportes</a></li>
                        </ul>
                    </li>
                   
                    <li><a href="../dashboard/app-email.html"><i class="ti-email"></i> Email</a></li>
                        
            </div>
        </div>
    </div>
   