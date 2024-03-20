<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email
{

    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion()
    {

        // create a new object
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'live.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 587;
        $mail->Username = 'api';
        $mail->Password = '29062b2d3d7767b85c59b30290a4aab2';

        $mail->setFrom('mkt@ssdevsolutions.com');
        $mail->addAddress($this->nombre, 'ssdevsolutions.com');
        $mail->Subject = 'Confirma tu Cuenta';

        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = '<html>';
        $contenido .= "<p><strong>Hola " . $this->email .  "</strong> Has Creado tu cuenta en SS Dev Solutions, solo debes confirmarla presionando el siguiente enlace</p>";
        $contenido .= "<p>Presiona aquí: <a href='http://barberia.sebastianquijas.com/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a>";
        $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
        $contenido .= '</html>';
        $mail->Body = $contenido;

        //Enviar el mail
        $mail->send();
    }

    public function enviarInstrucciones()
    {

        // create a new object
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'live.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 587;
        $mail->Username = 'api';
        $mail->Password = '29062b2d3d7767b85c59b30290a4aab2';


        $mail->setFrom('mkt@ssdevsolutions.com');
        $mail->addAddress($this->email, 'ssdevsolutions.com');
        $mail->Subject = 'Confirma tu Cuenta';

        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = '<html>';
        $contenido .= "<p><strong>Hola " . $this->nombre .  "</strong> Has solicitado reestablecer tu password, sigue el siguiente enlace para hacerlo.</p>";
        $contenido .= "<p>Presiona aquí: <a href='http://barberia.sebastianquijas.com/recuperar?token=" . $this->token . "'>Reestablecer Password</a>";
        $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
        $contenido .= '</html>';
        $mail->Body = $contenido;

        //Enviar el mail
        $mail->send();
    }
}
