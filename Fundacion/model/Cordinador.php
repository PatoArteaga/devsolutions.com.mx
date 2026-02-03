<?php

class Coordinadores extends Conectar{

    public function getCoordinadores(){
        $conectar=parent::conexion();
        parent::set_names();
        
        $sql="SELECT id_usuario, nombre, apellido FROM usuarios WHERE nivel=1 AND estatus='1'";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }

}
