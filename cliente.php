<?php

require_once "db.php";
require_once "Datos_cliente.php";

$Cedula_cliente = $_POST["Cedula_cliente"];
$Nombre_cliente = $_POST["Nombre_cliente"];
$Edad_cliente = $_POST["Edad_cliente"];


$datos1 = new DatosCliente();

$datos1->setCedula_cliente($Cedula_cliente);
$datos1->setNombre_cliente($Nombre_cliente);
$datos1->setEdad_cliente($Edad_cliente);

DatosCliente::insertar($datos1);
header("location:index.php");

?>

