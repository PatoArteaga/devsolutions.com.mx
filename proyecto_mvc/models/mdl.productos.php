<?php
class Producto{
    private $pdo;
    private $id_prod;
    private $nombre_prod;
    private $marca_prod;
    private $costo_prod;
    private $precio_prod;
    private $cantidad_prod;
    private $img_prod;

    public function __construct(){
        $this->$pdo=Conection::conect();        
    }
//" :?int " significa que el metodo puede regresar como valor NULL o un entero
    public function getid_prod(): ?int{
        return $this->id_prod;
    }

    public function getid_prod(int $id){
        $this->id_prod=$id;

    }

    public function getnombre_prod(): ?int{
        return $this->nobre_prod;
    }

    public function setnombre_prod(int $nombre){
        $this->nombre_prod=$id;

    }




}

?>