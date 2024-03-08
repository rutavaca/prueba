<?php 
class consultasC{
    public function ConsultarC($id){
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
    public function consultarDatoC($id){ //la copiamos de admi
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
    public function ModificarDatoSC($id,$nombres,$apellidos,$email,$telefono){
        
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
        echo "<script> location.href='../../Views/cliente/perfilC.php' </script>";


    }
    public function eliminaC($identificacion){
        
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $eliminar = "DELETE FROM users WHERE documento=:identificacion";
        $result= $conexion->prepare($eliminar);
        $result->bindParam(':identificacion', $identificacion);
        $result->execute();

        echo "<script> alert('Usuario Eliminado') </script>";
       echo "<script> location.href='../../Views/cliente/verUserc.php' </script>";

    }
    public function modificaF($id, $foto){
        $f=null;
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
        $actualizar= "UPDATE users SET id=:id, foto=:foto WHERE id=:id";
        $result=$conexion->prepare($actualizar);
        $result->bindParam(':id',$id);
        $result->bindParam(':foto',$foto);    
        $result->execute();

        
        echo "<script> alert('Modificacion exitosa') </script>";
        echo "<script> location.href='../../Views/cliente/perfilC.php' </script>";
        
    }
    public function modificaCon($id,$contrasenaN){
       
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
        $actualizar= "UPDATE users SET  contrasena=:contrasenaN WHERE id=:id";
        $result=$conexion->prepare($actualizar);

        $result->bindParam(':contrasenaN',$contrasenaN);
        $result->bindParam(':id',$id);    
     
      
        $result->execute();

        echo "La contraseña se ha modificado correctamente.";
        echo "<script> location.href='../../Views/cliente/perfilC.php' </script>";


    }
    

}


?>