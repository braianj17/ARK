

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
$com=$_POST['comentarios'];
$tip1=$_POST['tiponegocio1'];
$tip2=$_POST['tiponegocio2'];
$tip3=$_POST['tiponegocio3'];
$tip4=$_POST['tiponegocio4'];
$tip5=$_POST['tiponegocio5'];
$tip6=$_POST['tiponegocio6'];
$tip7=$_POST['tiponegocio7'];
$tip8=$_POST['tiponegocio8'];
$color=$_POST['colorprimario'];
$color2=$_POST['colorsecundario'];
$color3=$_POST['coloradicional'];
$diseno=$_POST['diseno'];
$navE=$_POST['navE'];
$navG=$_POST['navG'];
$navT=$_POST['navT'];
$navstac=$_POST['navstac'];
$if1=$_POST['infoprincipal1'];
$if2=$_POST['infoprincipal2'];
$if3=$_POST['infoprincipal4'];
$if4=$_POST['infoprincipal5'];
$if5=$_POST['infoprincipal3'];
$if6=$_POST['infoprincipal10'];
$if7=$_POST['infoprincipal20'];
$if8=$_POST['infoprincipal40'];
$email=$_POST['email'];



$sql = "INSERT INTO infCliente (descr,tipo1,tipo2,tipo3,tipo4,tipo5,tipo6,tipo7,tipo8,colorprimario, colorsecundario, coloradicional, diseno, navE, navG, navT, navstac, infoprincipal1, infoprincipal2, infoprincipal4, infoprincipal5, infoprincipal3, infoprincipal10, infoprincipal20, infoprincipal40) 
       VALUES ('".$com."','".$tip1."','".$tip2."','".$tip3."','".$tip4."','".$tip5."','".$tip6."','".$tip7."','".$tip8."','".$color."','".$color2."','".$color3."'
        ,'".$diseno."'
   		,'".$navE."'
   		,'".$navG."'
   		,'".$navT."'
   		,'".$navstac."'
   		,'".$if1."'
   		,'".$if2."'
   		,'".$if3."'
   		,'".$if4."'
   		,'".$if5."'
   		,'".$if6."'
   		,'".$if7."'
   		,'".$if8."'
   		)";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>