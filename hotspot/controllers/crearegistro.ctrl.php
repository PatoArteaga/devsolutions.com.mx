<?php
class Registra{   
    public function conectar(){
        include "models/conection.php";
      
    }
    public function registrarU($nombre,$email){
        
        include "models/conection.php";         
        if(isset($_POST['registrar'])){

            if(strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['tel']) >= 1){
                $nombre=trim($_POST['nombre']);
                $email=trim($_POST['email']);
                $tel=trim($_POST['tel']);
                $fechareg=date(d/m/y);

                $query="INSERT INTO clientes (nombre,email,tel,fecha_reg) VALUES (NULL,'$nombre', '$email', '$tel', date())";
                if($result)
                    {
                    echo "El resultado de la consulta es: ".$result;
                    }  
            }
        }


        $query = "INSERT INTO user(id,username,email) VALUES (NULL,'$nombre','$email')";
        $result = mysqli_query($conn, $query);
        if($result)
            {
           // echo "El resultado de la consulta es: ".$result;
            ?>
            <h3 >Se registro correctamente</h3>
            <?php

            }
        else{
            ?>
            <h3>No se pudo registrar</h3>
            <?php

        }  
    }
        

    public function suma($n1,$n2){
        echo($n1+$n2);

    }


}