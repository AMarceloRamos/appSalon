<?php 

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email {

    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    private function configurarEmail() {

        $mail = new PHPMailer(true);

        try {

            // Configuración SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Port = 2525;
            $mail->Username = '676bf930385925';
            $mail->Password = '48890f11f31c01';

            // Configuración del remitente
            $mail->setFrom('cuentas@appsalon.com', 'AppSalon');
            $mail->addAddress($this->email, $this->nombre);

            // Configuración general
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';

            return $mail;

        } catch (Exception $e) {
            echo "Error al configurar el correo: {$mail->ErrorInfo}";
        }
    }

    public function enviarConfirmacion() {

        $mail = $this->configurarEmail();

        $mail->Subject = 'Confirma tu Cuenta';

        $contenido  = '<html>';
        $contenido .= "<p><strong>Hola {$this->nombre}</strong>, has creado tu cuenta en App Salon.</p>";
        $contenido .= "<p>Solo debes confirmarla presionando el siguiente enlace:</p>";
        $contenido .= "<p><a href='http://localhost:3000/confirmar-cuenta?token={$this->token}'>Confirmar Cuenta</a></p>";
        $contenido .= "<p>Si tú no solicitaste esta cuenta, puedes ignorar este mensaje.</p>";
        $contenido .= '</html>';

        $mail->Body = $contenido;

        // Enviar correo
        $mail->send();
    }

    public function enviarInstrucciones() {

        $mail = $this->configurarEmail();

        $mail->Subject = 'Reestablece tu Password';

        $contenido  = '<html>';
        $contenido .= "<p><strong>Hola {$this->nombre}</strong>, has solicitado reestablecer tu password.</p>";
        $contenido .= "<p>Sigue el siguiente enlace para hacerlo:</p>";
        $contenido .= "<p><a href='http://localhost:3000/recuperar?token={$this->token}'>Reestablecer Password</a></p>";
        $contenido .= "<p>Si tú no solicitaste este cambio, puedes ignorar este mensaje.</p>";
        $contenido .= '</html>';

        $mail->Body = $contenido;

        // Enviar correo
        $mail->send();
    }
}