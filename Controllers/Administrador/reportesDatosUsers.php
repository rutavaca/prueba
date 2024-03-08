<?php

function reporteUsers(){
    $objConsultas = new ConsultasAdmin();
    $result = $objConsultas->consultarUsers();

    if(!isset($result)){
        echo "<h2>No hay usuarios registrados en la base de datos</h2>";
    }
    else{
        //Aquí pintamos la info cosutada en modelo, para ser enviada a la vista
        foreach($result as $f){
        echo '
        <tr>
            <td><img src="'.$f['foto'].'" alt="Foto User" width="80px" heigth="80px"></td>
            <td>'.$f['rol'].'</td>
            <td>'.$f['nombres'].'</td>
            <td>'.$f['apellidos'].'</td>
            <td>'.$f['telefono'].'</td>
            <td>'.$f['estado'].'</td>
            
        </tr>
        
        ';
    }
}
}

?> 