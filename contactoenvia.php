<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    
    $to = "psnraroxdas@gmail.com"; // Reemplaza con tu dirección de correo
    $subject = "Mensaje de contacto de $name";
    $messageBody = "Nombre: $name\nCorreo Electrónico: $email\nTeléfono: $phone\nMensaje:\n$message";
    
    if (mail($to, $subject, $messageBody)) {
        $response = array("status" => "success", "message" => "Mensaje enviado con éxito. ¡Gracias!");
    } else {
        $response = array("status" => "error", "message" => "Hubo un problema al enviar el mensaje. Por favor, inténtalo de nuevo.");
    }
} else {
    $response = array("status" => "error", "message" => "Solicitud incorrecta");
}

echo json_encode($response);
?>

