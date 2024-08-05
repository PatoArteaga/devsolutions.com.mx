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

        public function FormCrear(){
            //Si le pasamos parametros parametros quiere decir que va a actualizar la informacion
            //y si no le pasamos quiere decir que es un producto nuevo

            $titulo="Registrar";
            $p=new Producto();

            if(isset($_GET['id'])){
                $p=$this->modelo->Obtener($_GET['id']);
                $titulo="Modificar";

            }



            require_once("./views/header.php");
            require_once("./views/productos/form.php");
            require_once("./views/footer.php");

        }

        public function Guardar(){
            
            $p= new Producto();
            $p->setid_prod(intval($_POST['id']));
            $p->setnombre_prod($_POST['nombre']);
            $p->setmarca_prod($_POST['marca']);
            $p->setcosto_prod($_POST['costo']);
            $p->setprecio_prod($_POST['precio']);
            $p->setcantidad_prod($_POST['cantidad']);
           // $p->setimg_prod($_POST['imagen']);

           //Si le envian Id se actualiza la informacion, sino se crea un producto nuevo es un simple if(){}
            $p->getid_prod() > 0 ?
            $this->modelo->Actualizar($p) :
            $this->modelo->Insertar($p);

            header("location:?c=productos");

        }

        public function Borrar(){
            $this->modelo->Eliminar($_GET['id']);
            header("location:?c=productos");
        }

}
?>