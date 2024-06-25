<?php
    class Conection{
        const servidor="localhost";
        const user="root";
        const password="";
        //const password="Outwor1d";
        const db="hotspot";   
        const dsn="mysql:host=".self::servidor.";dbname=".self::db.";charset=UTF8";
        const conexion="";

        public static function conect(){
            try{
                //$dsn = "mysql:host=$host;dbname=$db;charset=UTF8"
                //$pdo = new PDO($dsn, $user, $password);
                //echo "Entro a conectar";                
                $conexion=new PDO (self::dsn,self::user,self::password);  
                }
            catch(PDOException $error){          
                echo"La conexion PDO tiene un error:";
                return error;
                }


        }



    }



?>