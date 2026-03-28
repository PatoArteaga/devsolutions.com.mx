<?php

class Usuario extends Conectar{

    public function login(){
    $conectar=parent::conexion();
        parent::set_names();
        if(isset($_POST["enviar"]))
            {
                $password=$_POST["login-password"];
                $usuario=$_POST["login-user"];

                if(empty($usuario) and empty($password))
                {
                    header("Location:".Conectar::ruta()."index.php?m=2");
                    exit();
                }
                else
                    {
                    $sql="SELECT * FROM usuarios WHERE usuario=? AND pass=? AND estatus='1'";
                    $sql=$conectar->prepare($sql);
                    $sql->bindValue(1,$usuario);
                    $sql->bindValue(2,$password);
                    $sql->execute();
                    $resultado=$sql->fetch();

                    if(is_array($resultado) and count($resultado)>0)
                    {
                        $_SESSION["id_usuario"]=$resultado["id_usuario"];
                        $_SESSION["usuario"]=$resultado["usuario"];
                        $_SESSION["nombre"]=$resultado["nombre"];
                        $_SESSION["apellido"]=$resultado["apellido"];
                        $_SESSION["email"]=$resultado["email"];
                        $_SESSION["pass"]=$resultado["pass"];
                        $_SESSION["f_creacion"]=$resultado["f_creacion"];
                        $_SESSION["f_modificacion"]=$resultado["f_modificacion"];
                        $_SESSION["f_eliminacion"]=$resultado["f_eliminacion"];
                        $_SESSION["img"]=$resultado["img"];
                        $_SESSION["nivel"]=$resultado["nivel"];
                        $_SESSION["estatus"]=$resultado["estatus"];
                        header("Location:".conectar::ruta()."view/Home/");
                        exit();
                    }
                    else
                    {
                        header("Location:".conectar::ruta()."index.php?m=1");
                        exit();
                    }
                }

            }

        
    }


    public function registrarUsuario($usuario,$nombre,$apellido,$email,$pass,$nivel="2",$comentarios=NULL,$estatus="0"){
        try{
        $conectar=parent::conexion();
        parent::set_names();
        $sql="INSERT INTO usuarios (id_usuario,usuario,nombre,apellido,email,pass,f_creacion,f_modificacion,f_eliminacion,img,nivel,comentarios,estatus) VALUES (NULL,?,?,?,?,?,date(now()),NULL,NULL,NULL,?,?,?);";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$usuario);
        $sql->bindValue(2,$nombre);
        $sql->bindValue(3,$apellido);
        $sql->bindValue(4,$email);
        $sql->bindValue(5,$pass);
        /* $sql->bindValue(6,date("Y-m-d H:i:s")); */
        $sql->bindValue(6,$nivel);
        $sql->bindValue(7,$comentarios);
        $sql->bindValue(8,$estatus);
        
        $sql->execute();
        return $resultado=$sql->fetchAll();
        }

        catch(Exception $e){
            echo "Error al registrar usuario: " . $e->getMessage();
            return null;
        }
    }


    public function registrarUsuarionivel1($usuario,$nombre,$apellido,$email,$pass,$nivel="1",$comentarios=NULL,$estatus="0"){
        try{
        $conectar=parent::conexion();
        parent::set_names();
        
        // Iniciar transacción
        $conectar->beginTransaction();
        
        // Primera consulta: Insertar usuario
        $sql="INSERT INTO usuarios (id_usuario,usuario,nombre,apellido,email,pass,f_creacion,f_modificacion,f_eliminacion,img,nivel,comentarios,estatus) VALUES (NULL,?,?,?,?,?,date(now()),NULL,NULL,NULL,?,?,?)";
        $stmt=$conectar->prepare($sql);
        $stmt->bindValue(1,$usuario);
        $stmt->bindValue(2,$nombre);
        $stmt->bindValue(3,$apellido);
        $stmt->bindValue(4,$email);
        $stmt->bindValue(5,$pass);
        $stmt->bindValue(6,$nivel);
        $stmt->bindValue(7,$comentarios);
        $stmt->bindValue(8,$estatus);
        $stmt->execute();
        
        // Obtener el último ID insertado
        $ultimo_id = $conectar->lastInsertId();
        
        // Segunda consulta: Insertar coordinador
        $sql2="INSERT INTO coordinador (id_cordinador,id_usuario) VALUES (?, ?)";
        $stmt2=$conectar->prepare($sql2);
        $stmt2->bindValue(1,$ultimo_id);
        $stmt2->bindValue(2,$ultimo_id);
        $stmt2->execute();
        
        // Confirmar transacción
        $conectar->commit();
        
        return true;
        }
        catch(Exception $e){
            echo "Error al registrar usuario: " . $e->getMessage();
            return null;
            }
        }



    public function registrarUsuarionivel2($usuario,$nombre,$apellido,$email,$pass,$nivel="2",$comentarios=NULL,$estatus="0",$idcoordinador="1"){
        try{
        $conectar=parent::conexion();
        parent::set_names();
        
        // Iniciar transacción
        $conectar->beginTransaction();
        
        // Primera consulta: Insertar usuario
        $sql="INSERT INTO usuarios (id_usuario,usuario,nombre,apellido,email,pass,f_creacion,f_modificacion,f_eliminacion,img,nivel,comentarios,estatus) VALUES (NULL,?,?,?,?,?,date(now()),NULL,NULL,NULL,?,?,?)";
        $stmt=$conectar->prepare($sql);
        $stmt->bindValue(1,$usuario);
        $stmt->bindValue(2,$nombre);
        $stmt->bindValue(3,$apellido);
        $stmt->bindValue(4,$email);
        $stmt->bindValue(5,$pass);
        $stmt->bindValue(6,$nivel);
        $stmt->bindValue(7,$comentarios);
        $stmt->bindValue(8,$estatus);
        $stmt->execute();
        
        // Obtener el último ID insertado
        $ultimo_id = $conectar->lastInsertId();
        
        // Segunda consulta: Insertar coordinador
        $sql2="INSERT INTO lider (id_lider,id_usuario,id_coordinador) VALUES (?, ?, ?)";
        $stmt2=$conectar->prepare($sql2);
        $stmt2->bindValue(1,$ultimo_id);
        $stmt2->bindValue(2,$ultimo_id);
        $stmt2->bindValue(3,$idcoordinador);

        $stmt2->execute();
        
        // Confirmar transacción
        $conectar->commit();
        
        return true;
        }
        catch(Exception $e){
            echo "Error al registrar usuario: " . $e->getMessage();
            return null;
            }
    }


    public function getCorreoUsuario($email){
        try{
        $conectar=parent::conexion();
        parent::set_names();
        //$sql="SELECT * FROM usuarios WHERE email=? AND estatus='1';";
        $sql="SELECT * FROM usuarios WHERE email=?;";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$email);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
        
        catch(Exception $e){
            echo "Error al obtener correo de usuario: " . $e->getMessage();
            return null;
        }
   }


}
?>