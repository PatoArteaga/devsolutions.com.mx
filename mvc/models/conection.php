<?php  
    class Conection{

        const servidor="localhost";
        const user="root";
        const password="";
        const db="hotspot";   
        const dsn="mysql:host=".self::servidor.";dbname=".self::db.";charset=UTF8";
     
        public static function conectar(){     
            try{
           
                //$dsn = "mysql:host=$host;dbname=$db;charset=UTF8"
                //$pdo = new PDO($dsn, $user, $password);
                echo "Entro a conectar";                
                $conexion=new PDO (self::dsn,self::user,self::password);
                }
            catch(err $error){          
                echo"estas en el catch";
                return error;
                }
        }
    }

?>