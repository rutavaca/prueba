<?php
require_once("../../Models/consultas-global.php");

session_start();
$id = $_SESSION['id'];

//function cargarC(){
global $id;
     //Utilizamos la variable de sesion Global para traer todos los datos  de usuario
        
        
    //$objConsultas = new ConsultasAdmin;
    //$result= $objConsultas->modificarCon($id);

    foreach($result as $f);
    echo'
    <div class="card">
    <h2>cambiar contraseña</h2>
    
    <form action="../../Controllers/Administrador/modificarContrasena.php" method="post" enctype="multipart/form-data">
                <div class="row">
            
                <div class="form-group col-md-6">
                    <label>Anterior contraseña:</label>}
                    
                    <input type="password" name="contrasena" value='.$f['contrasena'].' class="form-control" placeholder="Ej:****"> 
                    </div)
                
                
                <div class="form-group col-md-6">
                    <label>Nueva contraseña:</label>
                    <input type="number" readonly value='.$f['id'].' name="id" style="display:none" class="form-control" placeholder="Ej: 1056974368">
                    <input type="password" name="contrasenaN" value='.$f['contrasenaN'].' class="form-control" placeholder="Ej:****">
                </div>
              
            </div>
            
                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">modificar contraseña</button>
                
            </form>
    
    </div>

';

    ?>