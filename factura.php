<?php

require_once "db.php";
require_once "datos_factura.php";

$nombre_cliente	= $_POST["nombre_cliente"];
$productName = $_POST["productName"];
$quantity = $_POST["quantity"];
$price = $_POST["price"];
$totalAftertax = $_POST["totalAftertax"];


$datos1 = new DatosFactura();

$datos1->setNombre_cliente($nombre_cliente	);
$datos1->setProductName($productName);
$datos1->setQuantity($quantity);
$datos1->setPrice($price);
$datos1->setTotalAftertax($totalAftertax);


DatosFactura::insertar($datos1);
header("location:index.php");

?>

