<?php
class conectar{
    protected $dbh;

    protected function conexion(){
        try {
            $conectar=$this->dbh = new PDO("mysql:local=localhost;dbname=DevSol-13RegProm_dev","root","");
            return $conectar;
        } 
        catch (Exception $e) {
            print "Error de conexion a la bd".$e->getMessage()."<br>";
            die();
        }
    }

    public function set_names(){
        return $this->dbh->query("SET NAMES 'utf8'");
    }

    public function ruta(){
        return "http://localhost:8888/devsolutions.com.mx/fundacion/";
    }
}
?>