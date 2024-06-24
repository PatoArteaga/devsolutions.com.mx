<?php
include "../models/conection.php";         
if(isset($_POST['registrar'])){

    if(strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['tel']) >= 1){
        //echo "Entro a las variables";
        $nombre=trim($_POST['nombre']);
        $email=trim($_POST['email']);
        $tel=trim($_POST['tel']);
        //$fechareg="04-05-1987";
        $fechareg=date("d-m-Y");

        $query="INSERT INTO clientes(id,nombre,email,tel,fecha_reg) VALUES (NULL,'$nombre', '$email', '$tel','$fechareg')";
        $result = mysqli_query($conn, $query);   
      
    }
}

if($result)
    {
   /* echo "El resultado de la consulta es: ".$result;*/
    ?>
    <h3>Se registro correctamente</h3>
    <?php
    header("Location: http://10.5.50.1/login?username=admin2&password=admin2");
    die();

    }
else{
    ?>
    <h3>No se pudo registrar</h3>
    <?php

}  



?>