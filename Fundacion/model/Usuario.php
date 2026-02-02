<?php
session_start();

class Usuario extends conectar{

    public function login(){
    $conectar=parent::conexion();
        parent::set_names();
        if(isset($_POST["enviar"]))
            {
                $password=$_POST["login-password"];
                $usuario=$_POST["login-user"];

                if(empty($usuario) and empty($password))
                {
                    header("Location:".conectar::ruta()."index.php?m=2");
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

  




}





?>