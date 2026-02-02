<?php

class Lideres extends Conectar{






    public function getLideres(){
        $conectar=parent::conexion();
        parent::set_names();
        
        $sql="SELECT id_usuario, nombre, apellido FROM usuarios WHERE nivel=2 AND estatus='1'";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }

}

