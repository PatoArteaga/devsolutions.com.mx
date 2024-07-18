<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hotspot";
//$password = "Outwor1d";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
//mysqli_close($conn);






/*
if($result){
    header('Location: http://10.5.50.1/login?username=admin2&password=admin2');
    die();
    }
else{
    $fmsg ="Hubo un error al conectarse, por favor intentelo de nuevo";
    }
*/



?>
