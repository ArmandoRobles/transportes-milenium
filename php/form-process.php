<?php

$errorMSG = "";

// NOMBRE
if (empty($_POST["name"])) {
    $errorMSG = "Nombre es requerido";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email es requerido";
} else {
    $email = $_POST["email"];
}

// ASUNTO
if (empty($_POST["msg_subject"])) {
    $errorMSG .= "Asunto es requerido ";
} else {
    $msg_subject = $_POST["msg_subject"];
}


// MENSAJE
if (empty($_POST["message"])) {
    $errorMSG .= "Mensaje es requerido";
} else {
    $message = $_POST["message"];
}


$EmailTo = "transportes.milenium.mexico@gmail.com";
$Subject = "Nuevo Mensaje Recibido";

// Prepara email
$Body = "";
$Body .= "Nombre: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Asunto: ";
$Body .= $msg_subject;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= $message;
$Body .= "\n";

// Envia email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// Redirecciona a pag exito
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Ocurrio un Error";
    } else {
        echo $errorMSG;
    }
}

?>