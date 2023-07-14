<?php
 $destino="arkweb.puebla@gmail.com";
 $nombre=$_POST["name"];
 $correo=$_POST["email"];;
 $mensaje=$_POST["comments"];
 $contenido="Nombre: ".$nombre."\nCorreo: ".$correo."\nMensaje: ".$mensaje;
 mail($destino,"Contacto", $contenido);
 header("Location: index.html");

?>