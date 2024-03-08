<?php
require_once("../../Models/consultas-global.php");
require_once("../../Models/consultasPro.php");

session_start();
$id = $_SESSION['id'];
function cargarPerfilInicialPro(){
global $id;
  
    //Utilizamos la variable de sesion Global para traer todos los datos  de usuario
    
    
    
    
    $objConsultas = new ConsultasPro;
    $result= $objConsultas->consultarDatoPro($id);    
    foreach($result as $f);
    $foto='../'.$f['foto'];
    echo'
    <br>
    <br>
    <div class="user-profile">
    <div class="row">
      <div class="col-lg-2>
      <br>
        <div class="imag">
          <img class="img-fluid" src="'.$foto.'" style="width:200px; height:200px; border-radius:50%; border: 2px solid aqua"alt="" />
        </div>
        <div class="user-work">
          <h2>' .$f['nombres'].'</h2>
         <p>'.$f['telefono'].'</p>
        </div>
        
      </div>
     
    <div class="card"> 
    
    <h2> Modificar datos de la cuenta</h2>
    
    <form action="../../Controllers/proveedor/modificarDatosPro.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                <div class="form-group col-md-6">
                    <label>Nombres:</label>
                    <input type="text"  name="nombres"  value='.$f['nombres'].' class="form-control" placeholder="Ej:Mendez">
                </div>
               
                <div class="form-group col-md-6">
                <label>email:</label>
                <input type="email" name="email"  value='.$f['email'].' class="form-control" placeholder="Ej:Mendez@gmail.com">
            </div>
        
            <div class="form-group col-md-6">
            <label>telefono:</label>
            <input type="number" name="telefono"  value='.$f['telefono'].' class="form-control" placeholder="Ej:1234353">
        </div>
               
            </div>
            
                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Crear nuevo usuario</button>
                
            </form>
    </div> 
    
    <div class="card">
    <h2>cambiar contraseña</h2>
    
    <form action="../../Controllers/proveedor/modificarContrasenaPro.php" method="post" enctype="multipart/form-data">
                <div class="row">
            
                <div class="form-group col-md-6">
                    <label>Anterior contraseña:</label>}
               
                    <input type="password" name="contrasenaMD"  class="form-control" placeholder="Ej:****"> 
                    </div)
                
                
                <div class="form-group col-md-6">
                    <label>Nueva contraseña:</label>
                    
                    <input type="password" name="contrasenaN" class="form-control" placeholder="Ej:****">
                </div>
              
            </div>
            
                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">modificar contraseña</button>
                
            </form>
    
    </div>
    
    
    
    <div class="card">
    
    <h2>cambiar foto</h2>
    
    <form action="../../Controllers/proveedor/modificarFotoPro.php" method="post" enctype="multipart/form-data">
                <div class="row">
            
                <div class="form-group col-md-6">
                    <label>Foto:</label>
                   
                    <input type="file" accept=".jpg, .png, .jpeg, .gif" name="foto" value='.$f['foto'].'class="form-control" placeholder="">
                </div>
              
            </div>
            
                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">modificar foto</button>
                
            </form>
                </div>
             </div>
          </div>
        </div>
    </div>
    ';
    
    
        }
?>