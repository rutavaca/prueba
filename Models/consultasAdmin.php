<?php
class ConsultasAdmin{

    public function registrarUser($identificacion,$nombres,$apellidos,$email,$telefono,$contrasenaMD,$rol, $estado, $foto){
        
        $objConexion= new Conexion();
        $conexion=$objConexion->get_conexion();
        //GUARDAMOS EN UNA VARIABLE LA CONSULATA DE MYSQL A EJECUTAR
        $insertar= " INSERT INTO users(documento,nombres,apellidos,email,telefono,contrasena,rol,estado,foto) 
                                VALUES(:identificacion,:nombres,:apellidos,:email,:telefono,:contrasenaMD,:rol,:estado,:foto)";
        //PREPARAMOS LO NECESARIO PARA EJECUTAR LA CONSULTA (INSERT)
        $result=$conexion->prepare($insertar);
        //CONVERTIMOS LOS ARGUMENTOS EN PARÁMETROS
        $result->bindParam(":identificacion",$identificacion);
        $result->bindParam(":nombres",$nombres);
        $result->bindParam(":apellidos",$apellidos);
        $result->bindParam(":email",$email);
        $result->bindParam(":telefono",$telefono);
        $result->bindParam(":contrasenaMD",$contrasenaMD);
        $result->bindParam(":rol",$rol);
        $result->bindParam(":estado",$estado);
        $result->bindParam(":foto",$foto);
    

        $result->execute();
        echo '<script> alert ("Registro Exitoso")</script>';
        echo "<script>location.href='../../Views/administrador/home.php'</script>";
    }
    //Siempre es la misma función par aconsultar datos
     public function consultarUsers(){
        $f = null;
        
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $consultar = "SELECT * FROM users";
        $result=$conexion->prepare($consultar);
        $result->execute();
        //Siempre que hagamos una consulta para mostrar info. necesitamos convertir el result en un arreglo para poder segmentar dato por dato
        while ($resultado=$result->fetch()){
            $f[] = $resultado;
        }
        return $f;
     }

     public function eliminaDatos($identificacion){
        
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $eliminar = "DELETE FROM users WHERE documento=:identificacion";
        $result= $conexion->prepare($eliminar);
        $result->bindParam(':identificacion', $identificacion);
        $result->execute();

        echo "<script> alert('Usuario Eliminado') </script>";
       echo "<script> location.href='../../Views/administrador/verUsers.php' </script>";

    }
    public function reporteUsers(){
        
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $reportar = "SELECT * from users";
        $result=$conexion->prepare($reportar);
        $result->execute();
        //Siempre que hagamos una consulta para mostrar info. necesitamos convertir el result en un arreglo para poder segmentar dato por dato
        while ($reporte=$result->fetch()){
            $f[] = $reporte;
        }
        return $f;
    }

    public function consultarUserform($identificacion){
       
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $consultar = "SELECT * from users WHERE documento=:identificacion";
        $result=$conexion->prepare($consultar);
        $result->bindParam(':identificacion', $identificacion);
        $result->execute();
        //Siempre que hagamos una consulta para mostrar info. necesitamos convertir el result en un arreglo para poder segmentar dato por dato
        while ($resultado=$result->fetch()){
            $f[] = $resultado;
        }
        return $f;
    }
    public function consultarUserformS($id){
        $f = null;
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $consultar = "SELECT * from users WHERE id=:id";
        $result=$conexion->prepare($consultar);
        $result->bindParam(':id', $id);
        $result->execute();
        //Siempre que hagamos una consulta para mostrar info. necesitamos convertir el result en un arreglo para poder segmentar dato por dato
        while ($resultado=$result->fetch()){
            $f[] = $resultado;
        }
        return $f;
    }

    public function modificarUser($id,$identificacion,$nombres,$apellidos,$email,$telefono,$rol,$estado){
       
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
        $actualizar= "UPDATE users SET id=:id, documento=:identificacion, nombres=:nombres, apellidos=:apellidos, email=:email, telefono=:telefono, rol=:rol, estado=:estado WHERE documento=:identificacion";
        $result=$conexion->prepare($actualizar);
        $result->bindParam(':id',$id);
        $result->bindParam(':identificacion',$identificacion);
        $result->bindParam(':nombres',$nombres);
        $result->bindParam(':apellidos',$apellidos);
        $result->bindParam(':email',$email);
        $result->bindParam(':telefono',$telefono);
        $result->bindParam(':rol',$rol);
        $result->bindParam(':estado',$estado);
        $result->execute();

        echo "<script> alert('modificacion exitosa') </script>";
        echo "<script> location.href='../../Views/administrador/verUsers.php' </script>";


    }
    public function consultarDato($id){
        $f=null;
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $consultarDato = "SELECT * from users WHERE id=:id";
        $result=$conexion->prepare($consultarDato);
        $result->bindParam(':id', $id);
        $result->execute();
        //Siempre que hagamos una consulta para mostrar info. necesitamos convertir el result en un arreglo para poder segmentar dato por dato
        while ($resultado=$result->fetch()){
            $f[] = $resultado;
        }
        return $f;
    }
    public function ModificarDatoS($id,$nombres,$apellidos,$email,$telefono){
        
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
        $actualizar= "UPDATE users SET id=:id, nombres=:nombres, apellidos=:apellidos, email=:email, telefono=:telefono WHERE id=:id";
        $result=$conexion->prepare($actualizar);

        $result->bindParam(':id',$id);    
        $result->bindParam(':nombres',$nombres);
        $result->bindParam(':apellidos',$apellidos);
        $result->bindParam(':email',$email);
        $result->bindParam(':telefono',$telefono);
        $result->execute();

        echo "<script> alert('modificacion exitosa') </script>";
        echo "<script> location.href='../../Views/administrador/perfil.php' </script>";


    }
    public function modificarCon($id,$contrasenaN){
       
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
        $actualizar= "UPDATE users SET  contrasena=:contrasenaN WHERE id=:id";
        $result=$conexion->prepare($actualizar);

        $result->bindParam(':contrasenaN',$contrasenaN);
        $result->bindParam(':id',$id);    
     
      
        $result->execute();

        echo "La contraseña se ha modificado correctamente.";
        echo "<script> location.href='../../Views/administrador/perfil.php' </script>";


    }
    
    public function modificarF($id, $foto){
        $f=null;
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
        $actualizar= "UPDATE users SET id=:id, foto=:foto WHERE id=:id";
        $result=$conexion->prepare($actualizar);
        $result->bindParam(':id',$id);
        $result->bindParam(':foto',$foto);    
        $result->execute();

        echo "<script> alert('Modificacion exitosa') </script>";
        echo "<script> location.href='../../Views/administrador/perfil.php' </script>";
    }


   
}


?>