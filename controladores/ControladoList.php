<?php
include "../DataBase/ConnectionDataBase.php";
include "../modelos/ModeloContactos.php";

$coneccion = new ConnectionDataBase();
$dbc = $coneccion->Conexion();

$modelo = new ModeloContactos();
$modelo->conexiondb = $dbc;
$row = $modelo->ListContactos();

$valueHtml = '';
$valueHtml .= '
<table id="table" class="table table-bordered">
    <tr>
        <td>Id</td>
        <td>Nombres</td>
        <td>Cédula</td>
        <td>Correo Electrónico</td>
        <td>Telefono</td>
        <td>Empresa</td>
        <td>Estado</td>
        <td>Acción</td>
    </tr>';
foreach ($row as $rows) {
    $valueHtml .= '
<tr>
<td>' . $rows->id . '</td>
<td>' . $rows->nombre . '</td>
<td>' . $rows->cedula . ' </td>
<td>' . $rows->correo . ' </td>
<td>' . $rows->telefono . ' </td>
<td>' . $rows->empresa . ' </td>
<td>' . $rows->estado . ' </td>
<td> <button id="eliminar" name="eliminar" value="' . $rows->id . '" class="btn btn-danger">Eliminar</button></td>
</tr>';
}
$valueHtml .= '</table>';

echo $valueHtml;
