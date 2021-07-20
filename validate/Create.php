<?php

include "../DataBase/ConnectionDataBase.php";
include "../controladores/controladorContactos.php";
include "../modelos/tb_contactos.php";

$conexion = new ConnectionDataBase();
$cdb = $conexion->Conexion();
$objet = new tb_contactos();

$operationController = new controladorContactos();
$operationController->conexiondb = $cdb;
// $operationController->contacto = $objet;

if (isset($_POST['cedula'])) {
    $objet->cedula = $_POST['cedula'];
    $objet->nombre = $_POST['name'];
    $objet->correo = $_POST['email'];
    $objet->telefono = $_POST['telephone'];
    $objet->empresa = $_POST['company'];
    $objet->estado = $_POST['status'];
    $operationController->Create($objet);
}
