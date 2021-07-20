<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/principal.css">
    <title>Lista
    </title>
</head>

<body>
    <div id="ContainerList" class="container">
        <?php
        include './DataBase/ConnectionDataBase.php';

        $connectionDataBase = new ConnectionDataBase();
        $cdb = $connectionDataBase->Conexion();
        ?>
        <table id="table" class="table">
            <tr id="Encabezado">
                <td>Nombres</td>
                <td>Cédula</td>
                <td>Correo Electrónico</td>
                <td>Telefono</td>
                <td>Empresa</td>
                <td>Estado</td>
                <td>Fecha</td>
            </tr>
            <?php
            try {

                $query = "SELECT * FROM tb_contactos;";
                $statement = $cdb->prepare($query);
                $result = $statement->execute();
                $rows = $statement->fetchAll(\PDO::FETCH_OBJ);
            ?>
                <?php
                foreach ($rows as $row) {
                ?>
                    <tr>
                        <td> <?php print($row->nombre) ?> </td>
                        <td> <?php print($row->cedula) ?> </td>
                        <td> <?php print($row->correo) ?> </td>
                        <td> <?php print($row->telefono) ?> </td>
                        <td> <?php print($row->empresa) ?> </td>
                        <td> <?php print($row->estado) ?> </td>
                        <td> <?php print($row->fechareg) ?> </td>
                    </tr>
            <?php
                }
            } catch (\PDOException $exception) {
                echo 'Error al ejecutar la consulta: ' . $exception;
            }
            ?>
        </table>
    </div>
</body>

</html>