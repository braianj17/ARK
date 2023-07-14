

<?php
$servername = "localhost";
$database = "prue1";
$username = "ark";
$password = "ark.123";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
$nombre=$_POST['nombre'];
$apellid=$_POST['apellido'];
$email=$_POST['email'];
$sql = "INSERT INTO contacto (nombre, apellido, email) VALUES ('".$nombre."','".$apellid."','".$email."')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>