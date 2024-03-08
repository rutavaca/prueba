<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../../PHPMailer/Exception.php';
require '../../PHPMailer/PHPMailer.php';
require '../../PHPMailer/SMTP.php';

class GenerarClave{
    public function enviarNuevaClave($identificacion, $email){
        $f = null;
    $objConexion = new Conexion();
    $conexion=$objConexion->get_conexion();

    $verificar = "SELECT * FROM users WHERE documento=:identificacion AND email=:email";
    $result= $conexion->prepare($verificar);
    $result->bindParam(":identificacion", $identificacion);
    $result->bindParam(":email", $email);

    $result->execute();
    $f= $result->fetch();

    if($f){
        
        //Generamos una nueva clave a partir de un random

        $caracteres= "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $longitud = 8;
        $newPass= substr(str_shuffle($caracteres),0,$longitud);
        $emailFor=$f['email'];

        $contrasenaMD= md5($newPass);
        $id= $f['id'];
        $actualizarContrasena= "UPDATE users SET contrasena=:contrasenaMD WHERE id=:id";
        $result=$conexion->prepare($actualizarContrasena);
        $result->bindParam(":id",$id);
        $result->bindParam(":contrasenaMD",$contrasenaMD);
        $result->execute();


        //Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug=SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP ();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'rutaVacacional2024@gmail.com';                     //SMTP username
    $mail->Password   = 'mfkrdkzgdlejcvaf';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    //emisor
    $mail->setFrom('rutaVacacional2024@gmail.com', 'Ruta Vacacional');
    //receptor
    $mail->addAddress($emailFor);     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);       
    $mail->CharSet="UTF-8"    ;                     //Set email format to HTML
    $mail->Subject = 'Recuperacion de contraseña - Ruta Vacacional';
    $mail->Body    = ' <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html dir="ltr" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
    
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta name="x-apple-disable-message-reformatting">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="telephone=no" name="format-detection">
        <title></title>
        <!--[if (mso 16)]>
        <style type="text/css">
        a {text-decoration: none;}
        </style>
        <![endif]-->
        <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]-->
        <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
        <o:AllowPNG></o:AllowPNG>
        <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
        <!--[if !mso]><!-- -->
        <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
        <!--<![endif]-->
    </head>
    <body>
        <div dir="ltr" class="es-wrapper-color">
            <!--[if gte mso 9]>
                <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
                    <v:fill type="tile" color="#301758"></v:fill>
                </v:background>
            <![endif]-->
            <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
                <tbody>
                    <tr>
                        <td class="esd-email-paddings" valign="top">
                            <table class="es-content esd-header-popover" cellspacing="0" cellpadding="0" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" align="center">
                                            <table class="es-content-body" style="border-left:2px dashed #ffffff;border-right:2px dashed #ffffff;border-top:2px dashed #ffffff;border-bottom:2px dashed #ffffff;background-color: #1c0b3e;" width="600" cellspacing="0" cellpadding="0" align="center" bgcolor="#1c0b3f">
                                                <tbody>
                                                    <tr>
                                                    <td class="esd-structure es-p20t es-p20r es-p20l" align="left" style="background-image: url(https://fendqcn.stripocdn.email/content/guids/CABINET_11552f9c68a370b20aa065e5b17e591243611614de8cf3fbd04a708fda5d9efb/images/correo.png); background-repeat: no-repeat; background-position: center top;" background="https://fendqcn.stripocdn.email/content/guids/CABINET_11552f9c68a370b20aa065e5b17e591243611614de8cf3fbd04a708fda5d9efb/images/correo.png">
                                                            <table cellspacing="0" cellpadding="0" width="50%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="es-m-p0r esd-container-frame" width="300" valign="top" align="center" style="background-color: rgba(0, 0, 0, 0.336);">
                                                                            <table width="50%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    
                                                                                    <tr class="es-mobile-hidden">
                                                                                        <td align="center" class="esd-block-spacer" height="90"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-text es-p40b">
                                                                                            <h1 style="color: #ffffff; font-family: monoton, cursive; line-height: 120%;">Ruta<br>Vacacional</h1>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-text es-p40b">
                                                                                            <h2 style="color: #ffffff; font-family: helvetica, arial, verdana, sans-serif;"><strong>Señor (a) usuario (a) <br> a continuación le enviamos su nueva <br> contraseña de acceso para el sistema de <br> Ruta Vacacional,
                                                                                                le sugerimos cambiar esta contraseña lo más pronto posible.</p>
                                                                                                <p> Nueva contraseña '.$newPass.'</strong></h2>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-button es-p10t es-p10b"><span class="es-button-border"><a href="../Views/extras/page-login.html" class="es-button" target="_blank">Iniciar Sesión</a></span></td>
                                                                                    </tr>
                                                                                    <tr class="es-mobile-hidden">
                                                                                        <td align="center" class="esd-block-spacer" height="90"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="right" class="esd-block-text es-p10b">
                                                                                            <p style="font-size: 18px;">Ruta Vacacional</p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table cellpadding="0" cellspacing="0" class="es-content" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" align="center">
                                            <table bgcolor="#fff" class="es-content-body" align="center" cellpadding="0" cellspacing="0" width="600">
                                                <tbody>
                                                    <tr>
                                                        <td class="es-p20t es-p20r es-p20l esd-structure" align="left">
                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="560" class="esd-container-frame" align="center" valign="top">
                                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-text es-infoblock es-p5t es-p5b">
                                                                                            <p>
                                                                                                Si cree que este mensaje le fue enviado por error, puede darse de baja.
                                                                                                
                                                                                                Consulte nuestra política de privacidad para obtener más información.</p>
                                                                                          
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="es-p20t es-p20r es-p20l esd-structure" align="left">
                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="560" class="esd-container-frame" align="center" valign="top">
                                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-image es-infoblock made_with es-p10t es-p10b" style="font-size:0"><a target="_blank" href="../index.html"><img src="../Views/client-side/images/logo.png" alt width="125" style="display: block;"></a></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table cellpadding="0" cellspacing="0" class="esd-footer-popover es-footer" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" align="center">
                                            <table bgcolor="#ffffff" class="es-footer-body" align="center" cellpadding="0" cellspacing="0" width="600">
                                                <tbody>
                                                    <tr>
                                                        <td class="esd-structure es-p10t es-p20r es-p20l" align="left">
                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="560" class="esd-container-frame" align="left">
                                                                            <table cellpadding="0" cellspacing="0" width="100%">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-spacer" height="0"></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
    
    </html>
    ';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "<script> alert('Se ha enviado una nueva contraseña a su correo electrónico')</script>";
    echo "<script>location.href='../../Views/extras/page-login.html'</script>";

} catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
}


    }
    else{
        echo '<script> alert ("Datos incorrectos")</script>';
        echo "<script>location.href='../../Views/extras/page-reset-password.html'</script>";
    }
    }
}



?>