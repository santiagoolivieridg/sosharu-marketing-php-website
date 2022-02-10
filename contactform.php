<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['Nombre'];
    $mailFrom = $_POST['Email'];
    $servicio = $_POST['Servicio'];
    $message = $_POST['Mensaje'];

    $mailTo = "hola@sosharumarketing.com";
    $headers = "From: ".$mailFrom;
    $subject = $name." está interesado en ".$servicio;
    $txt = "Recibiste un e-mail de ".$name.".\n"."Quiere contratar el servicio de ".$servicio."\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contacto.php?mailsend");
}

?>