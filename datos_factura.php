<?php

require_once "db.php";
class DatosFactura {
    private $id_factura;
    private $nombre_cliente;
    private $productName;
    private $quantity;
    private $price;
    private $totalAftertax;
    


    public static function insertar($datosFactura)
    {
        try {
            $db = Db::getConnect();
            $db->beginTransaction();

            $consulta = $db->prepare("INSERT INTO tbl_factura (nombre_cliente,productName,quantity,price,totalAftertax)"
                . " values (:nombre_cliente,:productName,:quantity,:price,:totalAftertax)");

            $consulta->bindValue(":nombre_cliente", $datosFactura->getNombre_cliente());
            $consulta->bindValue(":productName", $datosFactura->getProductName());
            $consulta->bindValue(":quantity", $datosFactura->getQuantity());
            $consulta->bindValue(":price", $datosFactura->getPrice());
            $consulta->bindValue(":totalAftertax", $datosFactura->getTotalAftertax());
           
            $consulta->execute();
            $db->commit(); 

        } catch (PDOException $e) {
            $db->rollBack(); 
            echo " Se ha presentado un error en la conexión " . $e->getMessage();
        }

    }
    public static function listarTodos()
    {
        $datos = []; 
        try {
            $db = Db::getConnect();
            $db->beginTransaction();

            $consulta = $db->prepare("SELECT id_factura,nombre_cliente,productName,quantity,price,totalAftertax from tbl_factura");

            $consulta->execute();
            $db->commit(); 
            foreach ($consulta->fetchAll() as $dato) {

                $datosfactura = new Datosfactura();
                $datosfactura->setId_factura($dato["id_factura"]);
                $datosfactura->setNombre_cliente($dato["nombre_cliente"]);
                $datosfactura->setProductName($dato["productName"]);
                $datosfactura->setQuantity($dato["quantity"]);
                $datosfactura->setPrice($dato["price"]);
                $datosfactura->setTotalAftertax($dato["totalAftertax"]);
               
                $datos[] = $datosfactura;
            }
            return $datos;
        } catch (PDOException $e) {
            echo " Se ha presentado un error en la conexión " . $e->getMessage();
        }
    }

    public static function borrar($nombre_cliente)
    {
        try {
            $db = Db::getConnect();
            $db->beginTransaction();

            $consulta = $db->prepare("DELETE FROM tbl_factura where nombre_cliente=:nombre_cliente ");

            $consulta->bindValue(":nombre_cliente", $nombre_cliente);
            $consulta->execute();
            $db->commit(); 
        } catch (PDOException $e) {
            $db->rollBack();
            echo " Se ha presentado un error en la conexión " . $e->getMessage();
        }
    }

    public static function factura()
    {
        $datos = []; 
        try {
            $db = Db::getConnect();
            $db->beginTransaction();

            $consulta = $db->prepare("SELECT id_factura,nombre_cliente,productName,quantity,price,totalAftertax from tbl_factura");

            $consulta->execute();
            $db->commit(); 
            foreach ($consulta->fetchAll() as $dato) {

                $datosfactura = new Datosfactura();
                $datosfactura->setId_factura($dato["id_factura"]);
                $datosfactura->setNombre_cliente($dato["nombre_cliente"]);
                $datosfactura->setProductName($dato["productName"]);
                $datosfactura->setQuantity($dato["quantity"]);
                $datosfactura->setPrice($dato["price"]);
                $datosfactura->setTotalAftertax($dato["totalAftertax"]);
               
                $datos[] = $datosfactura;
            }
            return $datos;
        } catch (PDOException $e) {
            echo " Se ha presentado un error en la conexión " . $e->getMessage();
        }
    }

    

    /**
     * Get the value of id_factura
     */ 
    public function getId_factura()
    {
        return $this->id_factura;
    }

    /**
     * Set the value of id_factura
     *
     * @return  self
     */ 
    public function setId_factura($id_factura)
    {
        $this->id_factura = $id_factura;

        return $this;
    }

    /**
     * Get the value of nombre_cliente
     */ 
    public function getNombre_cliente()
    {
        return $this->nombre_cliente;
    }

    /**
     * Set the value of nombre_cliente
     *
     * @return  self
     */ 
    public function setNombre_cliente($nombre_cliente)
    {
        $this->nombre_cliente = $nombre_cliente;

        return $this;
    }

    /**
     * Get the value of productName
     */ 
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set the value of productName
     *
     * @return  self
     */ 
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get the value of quantity
     */ 
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  self
     */ 
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of totalAftertax
     */ 
    public function getTotalAftertax()
    {
        return $this->totalAftertax;
    }

    /**
     * Set the value of totalAftertax
     *
     * @return  self
     */ 
    public function setTotalAftertax($totalAftertax)
    {
        $this->totalAftertax = $totalAftertax;

        return $this;
    }

   
}

    ?>