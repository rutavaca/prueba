<?php
class Consultas{

    public function registrarUserExterno($identificacion,$nombres,$apellidos,$email,$telefono,$contrasenaMD,$rol,$estado,$fecha_creacion,$foto){
        //CREAMOS EL OBJETO DE LA CONEXIÓN
        $objConexion= new Conexion();
        $conexion=$objConexion->get_conexion();
        //GUARDAMOS EN UNA VARIABLE LA CONSULATA DE MYSQL A EJECUTAR
        $insertar= " INSERT INTO users(documento,nombres,apellidos,email,telefono,contrasena,rol,estado,fecha_creacion, foto) 
                                VALUES(:identificacion,:nombres,:apellidos,:email,:telefono,:contrasenaMD,:rol,:estado,:fecha_creacion, :foto)";
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
        $result->bindParam(":fecha_creacion",$fecha_creacion);
        $result->bindParam(":foto",$foto);


        $result->execute();
        echo '<script> alert ("Registro Exitoso")</script>';
        echo "<script>location.href='../Views/extras/page-login.html'</script>";
    }
    //CREAMOS EL OBJETO DE LA CONEXIÓN
    public function validarSesion($user,$pass){
        //CONECTAMOS CON LA BASE DE DATOS
        $objConexion= new Conexion();
        $conexion = $objConexion->get_conexion();
        //CONSULTAMO STODA LA INFORMACIÓN DEL USUARIO A PARTIR DEL EMAIL

        $consultar= "SELECT * FROM users WHERE email=:user";
        $result=$conexion->prepare("$consultar");

        $result->bindParam(":user",$user);
        $result->execute();
        //VALIDAMOS SI EXISTE UN USUARIO CON EST EMAIL

        if($f = $result->fetch()){
            //VALIDAMOS LA CONTRASEÑA
          
            if($pass== $f['contrasena']){

                //VALIDAMOS EL ESTADO DE LA CUENTA
                if($f['estado']=="Activo"){
                    //SE INICIA LA SESION
                    session_start();
                    //CREAMOS VARIABLES DE SESIÓN GLOBAL PARA USAR MÁS ADELANTE
                    $_SESSION['id']=$f['id'];
                    $_SESSION['rol']=$f['rol'];
                    $_SESSION['email']=$f['email'];
                    $_SESSION['contrasena']=$f['contrasena'];
                 

                    

                    //Autenticado es para que no se pueda ingresar por url
                    $_SESSION['autenticado']= "SI";
                    //Validamos el rol para redireccionamiento a través de Switch- case
                    
                    switch ($f['rol']){
                        case "Proveedor":
                            echo '<script> alert ("Bienvenido, proveedor")</script>';
                            echo "<script>location.href='../Views/proveedor/homeP.php'</script>"; 
                            break;
                        case "Cliente":
                            echo '<script> alert ("Bienvenido, usuario")</script>';
                            echo "<script>location.href='../Views/cliente/homeC.php'</script>"; 
                            break;
                            case "Administrador":
                                echo '<script> alert ("Bienvenido, Administrador")</script>';
                                echo "<script>location.href='../Views/administrador/home.php'</script>"; 
                                break;

                    }


                }
                else{
                    echo '<script> alert ("Su cuenta se encuentra inactiva o pendiente, contacte al administrador.")</script>';
                    echo "<script>location.href='../Views/extras/page-login.html'</script>"; 
                }
            }
            else{
                echo '<script> alert ("Su contarseña es incorecta.")</script>';
                echo "<script>location.href='../Views/extras/page-login.html'</script>";
            }

        }
        else{
            echo '<script> alert ("Su correo no coincide con ningún usuario registrado, por favor regístrese o ingrese sus datos nuevamente")</script>';
            echo "<script>location.href='../Views/extras/page-login.html'</script>";
        }

    }

    public function cerrarSesion(){
        $objConexion=new Conexion();
        $conexion=$objConexion->get_conexion();

        session_start();
        session_destroy();

        echo"<script>location.href='../index.html'</script>";

    }
    }
    
?>