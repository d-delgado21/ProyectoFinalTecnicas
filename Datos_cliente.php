<?php

require_once "db.php";
class DatosCliente {
    private $Id_cliente;
    private $Cedula_cliente;
    private $Nombre_cliente;
    private $Edad_cliente;


    public static function insertar($datosCliente)
    {
        try {
            $db = Db::getConnect();
            $db->beginTransaction();

            $consulta = $db->prepare("INSERT INTO tbl_clientes (Cedula_cliente,Nombre_cliente,Edad_cliente)"
                . " values (:Cedula_cliente,:Nombre_cliente,:Edad_cliente)");

            $consulta->bindValue(":Cedula_cliente", $datosCliente->getCedula_cliente());
            $consulta->bindValue(":Nombre_cliente", $datosCliente->getNombre_cliente());
            $consulta->bindValue(":Edad_cliente", $datosCliente->getEdad_cliente());
            $consulta->execute();
            $db->commit(); 

        } catch (PDOException $e) {
            $db->rollBack(); 
            echo " Se ha presentado un error en la conexión " . $e->getMessage();
        }

    }

    public static function nombre()
    {
        $datos = []; 
        try {
            $db = Db::getConnect();
            $db->beginTransaction();

            $consulta = $db->prepare("SELECT Nombre_cliente from tbl_clientes");

            $consulta->execute();
            $db->commit(); 
            foreach ($consulta->fetchAll() as $dato) {

                $datosCliente = new DatosCliente();
                
                $datosCliente->setNombre_cliente($dato["Nombre_cliente"]);

                $datos[] = $datosCliente;
            }
            return $datos;
        } catch (PDOException $e) {
            echo " Se ha presentado un error en la conexión " . $e->getMessage();
        }
    }












    /**
     * Get the value of Id_cliente
     */ 
    public function getId_cliente()
    {
        return $this->Id_cliente;
    }

    /**
     * Set the value of Id_cliente
     *
     * @return  self
     */ 
    public function setId_cliente($Id_cliente)
    {
        $this->Id_cliente = $Id_cliente;

        return $this;
    }

    /**
     * Get the value of Cedula_cliente
     */ 
    public function getCedula_cliente()
    {
        return $this->Cedula_cliente;
    }

    /**
     * Set the value of Cedula_cliente
     *
     * @return  self
     */ 
    public function setCedula_cliente($Cedula_cliente)
    {
        $this->Cedula_cliente = $Cedula_cliente;

        return $this;
    }

    /**
     * Get the value of Nombre_cliente
     */ 
    public function getNombre_cliente()
    {
        return $this->Nombre_cliente;
    }

    /**
     * Set the value of Nombre_cliente
     *
     * @return  self
     */ 
    public function setNombre_cliente($Nombre_cliente)
    {
        $this->Nombre_cliente = $Nombre_cliente;

        return $this;
    }

    /**
     * Get the value of Edad_cliente
     */ 
    public function getEdad_cliente()
    {
        return $this->Edad_cliente;
    }

    /**
     * Set the value of Edad_cliente
     *
     * @return  self
     */ 
    public function setEdad_cliente($Edad_cliente)
    {
        $this->Edad_cliente = $Edad_cliente;

        return $this;
    }
}
    ?>