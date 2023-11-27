<?php
class Producto
{
    private $pdo;

    public $idProducto;
    public $nit;
    public $nomprod;
    public $precioU;
    public $descrip;
    public $stockd;
    public $unidadm;
    public $fechai;
    public $marca;

    public function __construct()
    {
        try
        {
            $this->pdo = Database::Conectar();
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Listar()
    {
        try
        {
            $result = array();
            $stm = $this->pdo->prepare("SELECT * FROM producto");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Obtener($idProducto)
    {
        try
        {
            $stm = $this->pdo->prepare("SELECT * FROM producto WHERE idProducto = ?");
            $stm->execute(array($idProducto));
            return $stm->fetch(PDO::FETCH_OBJ);
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($idProducto)
    {
        try
        {
            $stm = $this->pdo->prepare("DELETE FROM producto WHERE idProducto = ?");
            $stm->execute(array($idProducto));
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try
        {
            $sql = "UPDATE producto SET
                        nit = ?,
                        nomprod = ?,
                        precioU = ?,
                        descrip = ?,
                        stockd = ?,
                        unidadm = ?,
                        fechai = ?,
                        marca = ?
                    WHERE idProducto = ?";

            $this->pdo->prepare($sql)->execute(
                array(
                    $data->nit,
                    $data->nomprod,
                    $data->precioU,
                    $data->descrip,
                    $data->stockd,
                    $data->unidadm,
                    $data->fechai,
                    $data->marca,
                    $data->idProducto
                )
            );
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Registrar(Producto $data)
    {
        try
        {
            $sql = "INSERT INTO producto (nit, nomprod, precioU, descrip, stockd, unidadm, fechai, marca)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)->execute(
                array(
                    $data->nit,
                    $data->nomprod,
                    $data->precioU,
                    $data->descrip,
                    $data->stockd,
                    $data->unidadm,
                    $data->fechai,
                    $data->marca
                )
            );
        }
        catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
}
?>
