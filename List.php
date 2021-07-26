<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/estilos.css">
    <script src="./javaScript/list_contactos.js"></script>
    <title>Lista
    </title>
</head>

<body>
    <?php
    include './DataBase/ConnectionDataBase.php';

    $connectionDataBase = new ConnectionDataBase();
    $cdb = $connectionDataBase->Conexion();
    ?>
    <table id="table" class="table table-bordered">
        <tr id="Encabezado">
            <td>Id</td>
            <td>Nombres</td>
            <td>Cédula</td>
            <td>Correo Electrónico</td>
            <td>Telefono</td>
            <td>Empresa</td>
            <td>Estado</td>
            <td>Acción</td>
        </tr>
        <?php
        try {

            $query = "SELECT * FROM tb_contactos;";
            $statement = $cdb->prepare($query);
            $statement->execute();
            $rows = $statement->fetchAll(\PDO::FETCH_OBJ);
            // echo json_encode($rows);
        ?>
            <?php
            foreach ($rows as $row) {
            ?>
                <tr>
                    <td> <?php print($row->id) ?></td>
                    <td> <?php print($row->nombre) ?> </td>
                    <td> <?php print($row->cedula) ?> </td>
                    <td> <?php print($row->correo) ?> </td>
                    <td> <?php print($row->telefono) ?> </td>
                    <td> <?php print($row->empresa) ?> </td>
                    <td> <?php print($row->estado) ?> </td>
                    <td> <button id="eliminar" value="<?php echo $row->id ?>" class="btn btn-danger">Eliminar</button></td>
                
                </tr>
        <?php
            }
        } catch (\PDOException $exception) {
            echo 'Error al ejecutar la consulta: ' . $exception;
        }
        ?>
    </table>
</body>

</html>