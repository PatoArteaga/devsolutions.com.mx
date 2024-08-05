<?php
    require_once("./models/mdl.productos.php");

    class InicioControlador{
        private $modelo;


        public function __construct(){
            $this->modelo=new Producto();
        }


        public function Inicio(){
          //  $con=Conection::conect();
            
           // echo "<br>Entro al controlador de Inicio <br>";

            require_once ("./views/header.php");
            require_once ("./views/inicio/principal.php");
            require_once ("./views/footer.php");

            //Esta instruccion es similar a las dos de abajo
             
            //$con = new Conection();
            // $con->conect();

        }

        
    }

?>