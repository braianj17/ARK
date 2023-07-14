

<?php
$servername = "localhost";///siempre se va a ocupar localhost
$database = "prue1";///nombre de la base 
$username = "ark";///usuario
$password = "ark.123";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 


$nombre=$_POST['nombre'];
$apellid=$_POST['apellido'];
$email=$_POST['email']; ///variables de html 



$sql = "INSERT INTO contacto (nombre, apellido, email) VALUES ('".$nombre."','".$apellid."','".$email."')";
if (mysqli_query($conn, $sql)) {
        echo'<script type="text/javascript">
    alert("Gracias ahora construyamos de tu pagina ");
    window.location.href="http://arkpruebas.xyz/formulario.html#menu2";
    </script>';
 
} else {
          echo'<script type="text/javascript">
    alert("vaya se ha producido un error comunicate con nosotros");
    window.location.href="index.html";
    </script>';
}
mysqli_close($conn);

?>