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
        $this->pdo=Conection::conect();        
    }
//" :?int " significa que el metodo puede regresar como valor NULL o un entero
    public function getid_prod(): ?int{
        return $this->id_prod;
    }

    public function setid_prod(int $id){
        $this->id_prod=$id;
    }

    public function getnombre_prod(): ?string{
        return $this->nombre_prod;
    }

    public function setnombre_prod(string $nombre){
        $this->nombre_prod=$nombre;
    }

    public function getmarca_prod(): ?string{
        return $this->marca_prod;
    }

    public function setmarca_prod(string $marca){
        $this->marca_prod=$marca;
    }

    public function getcosto_prod(): ?float{
        return $this->costo_prod;
    }

    public function setcosto_prod(float $costo){
        $this->costo_prod=$costo;
    }

    public function getprecio_prod(): ?float{
        return $this->precio_prod;
    }

    public function setprecio_prod(float $precio){
        $this->precio_prod=$precio;
    }

    public function getcantidad_prod(): ?int{
        return $this->cantidad_prod;
    }

    public function setcantidad_prod(int $cantidad){
        $this->cantidad_prod=$cantidad;
    }

    public function getimg_prod(): ?string{
        return $this->img_prod;
    }

    public function setimg_prod(string $img){
        $this->img_prod=$img;
    }

    public function Cantidad(){
        try{           
            $consulta=$this->pdo->prepare("SELECT SUM(cantidad_prod) AS cantidad FROM productos;");
            $consulta->execute();
            return $consulta->fetch(PDO::FETCH_OBJ);

        }
        catch(Exception $e){
            die($e->getMessage());

        }
    }

    public function Listar(){
        try{
            $consulta=$this->pdo->prepare("SELECT * FROM productos;");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);

        }
        catch(Exception $e){
            die($e->getMessage());

        }
    }

    public function Insertar(Producto $p){
        try{
            $consulta="INSERT INTO productos(nombre_prod,marca_prod,costo_prod,precio_prod,cantidad_prod) VALUES (?,?,?,?,?)";
           $this->pdo->prepare($consulta)->execute(array(
            $p->getnombre_prod(),
            $p->getmarca_prod(),
            $p->getcosto_prod(),
            $p->getprecio_prod(),
            $p->getcantidad_prod()
            ));

           // return $consulta->fetchAll(PDO::FETCH_OBJ);

        }
        catch(Exception $e){
            die($e->getMessage());

        }


    }

    public function Obtener($id){
        try{
            $consulta=$this->pdo->prepare("SELECT * FROM productos where id_prod=?;");
            $consulta->execute(array($id));
            $r=$consulta->fetch(PDO::FETCH_OBJ);
            
            $p=new Producto();

            $p->setid_prod($r->id_prod);
            $p->setnombre_prod($r->nombre_prod);
            $p->setmarca_prod($r->marca_prod);
            $p->setcosto_prod($r->costo_prod);
            $p->setprecio_prod($r->precio_prod);
            $p->setcantidad_prod($r->cantidad_prod);
            $p->setimg_prod($r->img_prod);
            
            return $p;
        }
        catch(Exception $e){
            die($e->getMessage());

        }
    }

    public function Actualizar(Producto $p){
        try{
            $consulta="UPDATE productos SET 
            nombre_prod=?,
            marca_prod=?,
            costo_prod=?,
            precio_prod=?,
            cantidad_prod=?
            WHERE id_prod=?;";

           $this->pdo->prepare($consulta)->execute(array(
            $p->getnombre_prod(),
            $p->getmarca_prod(),
            $p->getcosto_prod(),
            $p->getprecio_prod(),
            $p->getcantidad_prod(),
            $p->getid_prod()
            ));

           // return $consulta->fetchAll(PDO::FETCH_OBJ);

        }
        catch(Exception $e){
            die($e->getMessage());

        }


    }


    public function Eliminar($id){
        try{
            $consulta="DELETE FROM productos WHERE id_prod=?;";
           $this->pdo->prepare($consulta)->execute(array($id));

           // return $consulta->fetchAll(PDO::FETCH_OBJ);

        }
        catch(Exception $e){
            die($e->getMessage());

        }


    }



}

?>