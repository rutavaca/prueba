<?php
class ConsultasPro{
    public function registrarServicios($nit,$nombre_pro,$direccion,$email_pro,$telefono_pro, $categoria,$estado_pro, $foto_pro){
        $objConexion= new Conexion();
        $conexion=$objConexion->get_conexion();
        //GUARDAMOS EN UNA VARIABLE LA CONSULATA DE MYSQL A EJECUTAR
        $insertar= " INSERT INTO proveedor(nit,nombre_pro,direccion,email_pro,telefono_pro,categoria,estado_pro, foto_pro) 
                                VALUES(:nit,:nombre_pro,:direccion,:email_pro,:telefono_pro,:categoria,:estado_pro,:foto_pro)";
        //PREPARAMOS LO NECESARIO PARA EJECUTAR LA CONSULTA (INSERT)
        $result=$conexion->prepare($insertar);
        //CONVERTIMOS LOS ARGUMENTOS EN PARÁMETROS
        $result->bindParam(":nit",$nit);
        $result->bindParam(":nombre_pro",$nombre_pro);
        $result->bindParam(":direccion",$direccion);
        $result->bindParam(":email_pro",$email_pro);
        $result->bindParam(":telefono_pro",$telefono_pro);     
        $result->bindParam(":categoria",$categoria);
        $result->bindParam(":estado_pro",$estado_pro);
        $result->bindParam(":foto_pro",$foto_pro);

    

        $result->execute();
        echo '<script> alert ("Registro Exitoso")</script>';
        echo "<script>location.href='../../Views/proveedor/home.php'</script>";
    }
    public function consultarpPro($id){
        $f = null;
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();

        $consultarP = "SELECT * from users WHERE id=:id";
        $result=$conexion->prepare($consultarP);
        $result->bindParam(':id', $id);
        $result->execute();
        //Siempre que hagamos una consulta para mostrar info. necesitamos convertir el result en un arreglo para poder segmentar dato por dato
        while ($resultado=$result->fetch()){
            $f[] = $resultado;
        }
        return $f;
    }
    public function consultarDatoPro($id){

    $f =null;
    $objConexion = new Conexion();
    $conexion = $objConexion->get_conexion();

    $consultarDatoPro = "SELECT * from users WHERE id=:id";
    $result=$conexion->prepare($consultarDatoPro);
    $result->bindParam(':id', $id);
    $result->execute();
    //Siempre que hagamos una consulta para mostrar info. necesitamos convertir el result en un arreglo para poder segmentar dato por dato
    while ($resultado=$result->fetch()){
        $f[] = $resultado;
    }
    return $f;
}
public function ModificarDatoPro($id,$nombres,$email, $telefono){
    $objConexion = new Conexion();
    $conexion = $objConexion->get_conexion();
    $actualizar= "UPDATE users SET id=:id, nombres=:nombres, email=:email,telefono=:telefono WHERE id=:id";
    $result=$conexion->prepare($actualizar);

    $result->bindParam(':id',$id);    
    $result->bindParam(':nombres',$nombres); 
    $result->bindParam(':email',$email);      
    $result->bindParam(':telefono',$telefono);
    $result->execute();

     echo "<script> alert('modificacion exitosa') </script>";
    echo "<script> location.href='../../Views/proveedor/perfilPro.php' </script>";


}
public function modificarFotoPro($id, $foto){
    $f=null;
    $objConexion = new Conexion();
    $conexion = $objConexion->get_conexion();
    $actualizar= "UPDATE users SET id=:id, foto=:foto WHERE id=:id";
    $result=$conexion->prepare($actualizar);
    $result->bindParam(':id',$id);
    $result->bindParam(':foto',$foto);    
    $result->execute();

    echo "<script> alert('modificacion exitosa') </script>";
    echo "<script> location.href='../../Views/proveedor/perfilPro.php' </script>";
}
public function modificarConPro($id,$contrasenaN){
       
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

}
?>