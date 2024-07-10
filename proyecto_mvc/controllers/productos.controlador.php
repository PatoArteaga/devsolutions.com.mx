<?php
    require_once("./models/mdl.productos.php");

    class ProductosControlador{
        private $modelo;

        public function __construct(){
            $this->modelo=new Producto();
        }

        public function Inicio(){
            require_once("./views/header.php");
            require_once("./views/productos/index.php");
            require_once("./views/footer.php");
        }

}
?>