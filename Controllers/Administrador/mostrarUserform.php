<?php

function cargarUserform(){
    //aterizamos a una variable la primary key

    $identificacion=$_GET['identificacion'];

    //enviamos esta primary key a una funcion de la clase

    $objConsultas= new ConsultasAdmin();
    $result = $objConsultas->consultarUserform($identificacion);
    foreach ($result as $f){
        echo'
        <form action="../../Controllers/administrador/modificarUser.php" method="post" enctype="multipart/form-data">
        <div class="row">
        <div class="form-group col-md-6">
            <label>Documento:</label>
            <input type="number" readonly value='.$f['id'].' name="id" style="display:none" class="form-control" placeholder="Ej: 1056974368">
            <input type="number" readonly value='.$f['documento'].' name="identificacion" class="form-control" placeholder="Ej: 1056974368">
        </div>
        <div class="form-group col-md-6">
            <label>Nombres:</label>
            <input type="text"  value='.$f['nombres'].' name="nombres" class="form-control" placeholder="Ej: Maria">
        </div>
        <div class="form-group col-md-6">
            <label>Apellidos:</label>
            <input type="text" value='.$f['apellidos'].' name="apellidos" class="form-control" placeholder="Ej:Mendez">
        </div>
        <div class="form-group col-md-6">
            <label>E-mail:</label>
            <input type="email" value='.$f['email'].' name="email" class="form-control" placeholder="Ej:mariamendez@gmail.com">
        </div>
        <div class="form-group col-md-6">
            <label>Teléfono:</label>
            <input type="number" value='.$f['telefono'].' name="telefono" class="form-control" placeholder="Ej:3152859642">
        </div>
        <div class="form-group col-md-6">
            <label>Rol:</label>
            <select name="rol" id="" class="form-control">
                <option value='.$f['rol'].'> '.$f['rol'].'</option>
                <option value="Administrador">Administrador</option>
                <option value="Cliente">Cliente</option>
                <option value="Proveedor">Proveedor</option>

            </select>
        </div>
        <div class="form-group col-md-6">
            <label>Estado:</label>
            <select name="estado" id="" class="form-control">
                <option value='.$f['estado'].'> '.$f['estado'].'</option>
                <option value="Activo">Activo</option>
                <option value="Pendiente">Pendiente</option>
                <option value="Bloqueado">Bloqueado</option>

            </select>
        </div>
        <div class="form-group col-md-6">
            <label>Foto:</label>
            <input type="file" accept=".jpg, .png, .jpeg, .gif" name="foto" class="form-control" placeholder="">
        </div>
    </div>
    
        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">actualizar datos</button>
        
    </form>';
    }
}

?>