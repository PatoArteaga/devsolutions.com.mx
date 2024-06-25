<?php
    class InicioControlador{
        private $modelo;


        public function __construct(){
            //$this->modelo=new Producto();
        }


        public function Inicio(){
            require_once ("./views/inicio/principal.php");

        }

        
    }







?>