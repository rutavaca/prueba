<?php
require_once("../../Models/consultas-global.php");
require_once("../../Models/consultasAdmin.php");

session_start();
$id = $_SESSION['id'];

function cargarPerfilInicial(){
  global $id;
  
    //Utilizamos la variable de sesion Global para traer todos los datos  de usuario
    
    
    
    
    $objConsultas = new ConsultasAdmin;
    $result= $objConsultas->consultarDato($id);
    
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
          <h2>'.$f['nombres'].' '.$f['apellidos'].'</h2>
          <div class="work-content">
            <h3>"'.$f['rol'].' </h3>
            <p>'.$f['email'].'</p>
            <p>'.$f['telefono'].'</p>
          </div>
          
        </div>
        
      </div>
      <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Modificar datos</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Modificar contraseña</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Cambiar foto</button>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <div class="card"> 
    
    <h2> Modificar datos de la cuenta</h2>
    
    <form action="../../Controllers/Administrador/modificarDatos.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                <div class="form-group col-md-6">
                    <label>Nombres:</label>
                    <input type="number" readonly value='.$f['id'].' name="id" style="display:none" class="form-control" placeholder="">
                    <input type="text"  name="nombres"  value="'.$f['nombres'].'" class="form-control" placeholder="Ej:Mendez">
                </div>
                <div class="form-group col-md-6">
                    <label>Apellidos:</label>
                    <input type="text" name="apellidos"  value='.$f['apellidos'].' class="form-control" placeholder="Ej:Mendez">
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
            
                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Modificar usuario</button>
                
            </form>
    </div> 
      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <div class="card">
    <h2>Cambiar contraseña</h2>
    
    <form action="../../Controllers/Administrador/modificarContrasena.php" method="post" enctype="multipart/form-data">
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
            
                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Modificar contraseña</button>
                
            </form>
    
    </div>
    
      </div>
      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"> <div class="card">
    
      <h2>Cambiar foto</h2>
      
      <form action="../../Controllers/Administrador/modificarFoto.php" method="post" enctype="multipart/form-data">
                  <div class="row">
              
                  <div class="form-group col-md-6">
                      <label>Foto:</label>
                      <input type="number" readonly value='.$f['id'].' name="id" style="display:none" class="form-control" placeholder="">
                      <input type="file" accept=".jpg, .png, .jpeg, .gif" name="foto" value='.$f['foto'].'class="form-control" placeholder="">
                  </div>
                
              </div>
              
                  <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Modificar foto</button>
                  
              </form>
                  </div>
               </div>
            </div>
          </div>
      </div>
      ';
    
        }
?>