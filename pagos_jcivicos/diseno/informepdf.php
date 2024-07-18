<?php

if(isset($_POST['registrar'])){
        //echo "Entro a las variables";
      //  $nombre=trim($_POST['nombre']);
        $email=($_POST['email']);
      //  $tel=trim($_POST['tel']);
        //$fechareg="04-05-1987";
       // $fechareg=date("d-m-Y");
        echo "Email:".$email;

    /*    $query="INSERT INTO clientes(id,nombre,email,tel,fecha_reg) VALUES (NULL,'$nombre', '$email', '$tel','$fechareg')";
        $result = mysqli_query($conn, $query);   */
      
    
}
else
echo "No se recibio nada";

?>