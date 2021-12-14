<?php
include "db.php";
include "datos_factura.php";
$nombre_cliente = $_GET["nombre_cliente"];
DatosFactura::borrar($nombre_cliente);
header("location: ver.php");
?>