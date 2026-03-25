<?php
class Promovido extends Conectar{

    public function registrarPromovido($nombre,$apellido1,$apellido2,$telefono,$clave_elector,$calle,$numero,$colonia,$cp,$municipio,$seccion_electoral,$dv="N/A",$abierto="N/A",$foto1=NULL,$foto2=NULL,$foto3=NULL,$comentarios=NULL,$id_coordinador=NULL,$id_lider=NULL,$capturo=NULL,$aplica_meta=NULL,$estatus="0"){
        try{
        $conectar=parent::conexion();
        parent::set_names();
        $sql="INSERT INTO promovidos (id_promovido,nombre,apellido1,apellido2,telefono,clave_elector,calle,numero,colonia,cp,municipio,seccion_elec,dv_mov_comite,abierto,foto1,foto2,foto3,comentarios,id_coordinador,id_lider,capturo,aplica_meta,fecha_registro,estatus) VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,date(now()),?);";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$nombre);
        $sql->bindValue(2,$apellido1);
        $sql->bindValue(3,$apellido2);
        $sql->bindValue(4,$telefono);
        $sql->bindValue(5,$clave_elector);
        $sql->bindValue(6,$calle);
        $sql->bindValue(7,$numero);
        $sql->bindValue(8,$colonia);
        $sql->bindValue(9,$cp);
        $sql->bindValue(10,$municipio);
        $sql->bindValue(11,$seccion_electoral);
        $sql->bindValue(12,$dv);
        $sql->bindValue(13,$abierto);
        $sql->bindValue(14,$foto1);
        $sql->bindValue(15,$foto2);
        $sql->bindValue(16,$foto3);
        $sql->bindValue(17,$comentarios);
        $sql->bindValue(18,$id_coordinador);
        $sql->bindValue(19,$id_lider);
        $sql->bindValue(20,$capturo);
        $sql->bindValue(21,$aplica_meta);
       // $sql->bindValue(22,date('Y-m-d H:i:s'));
        $sql->bindValue(22,$estatus);
        $sql->execute();
        return $resultado=$sql->fetchAll();
        }
        catch(Exception $e){
            die("Error al registrar el promovido: ".$e->getMessage());
            }

    }

    public function getPromovidos($clave_elector){  
        try{
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM promovidos WHERE estatus='1' AND clave_elector=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$clave_elector);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
            }
            catch(Exception $e){
                die("Error al obtener los promovidos: ".$e->getMessage());
                }
        }


    }

   /*  public function getPromovidosCoordinador($id_coordinador){  
        try{
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM promovidos WHERE estatus='1' AND id_coordinador=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$id_coordinador);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
            }
            catch(Exception $e){
                die("Error al obtener los promovidos: ".$e->getMessage());
                }
        } */
        


?>