<?php
if ($_REQUEST['destino'] != "") {
$dest = $_REQUEST['destino'];
$head = "From: ".$_POST['email']."\r\n";
// Ahora creamos el cuerpo del mensaje
$msg = "------------------------------- \n";
$msg.= " Comentarios \n";
$msg.= "------------------------------- \n";
$msg.= "NOMBRE: ".$_REQUEST['name']."\n";
$msg.= "EMAIL: ".$_REQUEST['email']."\n";
$msg.= "DIRECCIÓN: ".$_REQUEST['adress']."\n";
$msg.= "MENSAJE: ".$_REQUEST['mensaje']."\n";
$msg.= "HORA: ".date("h:i:s a ")."\n";
$msg.= "FECHA: ".date("D, d M Y")."\n";
$msg.= "------------------------------- \n\n";

// Finalmente enviamos el mensaje
if (mail($dest, "Comentarios", $msg, $head)) {
echo "rpta=ok";
} else {
echo "rpta=error";
}
}
?>