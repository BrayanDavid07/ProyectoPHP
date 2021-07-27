<?php
include "../DataBase/ConnectionDataBase.php";
include "../modelos/ModeloContactos.php";
include "../tables/tb_contactos.php";

$conexion = new ConnectionDataBase();
$cdb = $conexion->Conexion();
$objet = new tb_contactos();

$operationController = new ModeloContactos();
$operationController->conexiondb = $cdb;
// $operationController->contacto = $objet;

if (isset($_POST['cedula'])) {
    $objet->cedula = $_POST['cedula'];
    $objet->nombre = $_POST['name'];
    $objet->correo = $_POST['email'];
    $objet->telefono = $_POST['telephone'];
    $objet->empresa = $_POST['company'];
    $objet->estado = $_POST['status'];
    return $operationController->Create($objet);
}
