<?php
    class Conection{
        const servidor="localhost";
        const user="root";
        //const password="";
        const password="";
        const db="proyecto_mvc";   
        const dsn="mysql:host=".self::servidor.";dbname=".self::db.";charset=UTF8";
        const conexion="";

        public static function conect(){
            try{
                //$dsn = "mysql:host=$host;dbname=$db;charset=UTF8"
                //$pdo = new PDO($dsn, $user, $password);
                //echo "Entro a conectar";                
                $conexion=new PDO (self::dsn,self::user,self::password);                
                $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                //echo "<br>Se realizo la conexion";
                return $conexion;
                }
            catch(PDOException $error){          
            
                echo "<br>La conexion PDO tiene un error: <br>".$error->getMessage();
                return $error;
                }


        }



    }



?>