<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos.css" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="./javaScript/form_contactos.js"></script>

    <title>Contactos</title>
</head>

<body>
    <div id="ContainerPrincipal">
        <h3>Agenda Creación de Contactos</h3>
    </div>
    <div id="botones" class="container">
        <button id="buttonDivForm" class="btn btn-primary">Formulario Creación</button>
        <button id="buttonDivList" class="btn btn-primary">Lista Agenda</button>
    </div>

    <div id="grupoForm" class="container-md">
        <form id="form-contactos" action="submit" class="form">
            <div class="form-group">
                <label for="cedula">Cédula de Ciudadanía</label>
                <input placeholder="Cédula de Ciudadanía" class="form-control" type="number" id="cedula" name="cedula" pattern="{10}" required>
            </div>
            <div class="form-group">
                <label for="name">Nombre Completo</label>
                <input placeholder="Nombre Completo" Class="form-control" type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Eléctronico</label>
                <input placeholder="Correo Eléctronico" class="form-control" type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telephone">Teléfono</label>
                <input placeholder="Formato: 123-456-7890" class="form-control" type="tel" id="telephone" name="telephone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
            </div>
            <div class="form-group">
                <label for="company">Empresa</label>
                <input placeholder="Empresa" class="form-control" type="text" id="company" name="company" required>
            </div>
            <div class="form-group">
                <label for="status">Estado</label>
                <select class="form-control" name="status" id="status" required>
                    <option value="">Seleccione</option>
                    <option value='Prospecto'>Prospecto</option>
                    <option value='Contrato enviado'>Contrato enviado</option>
                    <option value='Ganado'>Ganado</option>
                    <option value='Perdido'>Perdido</option>
                </select>
            </div>
            <div class="form-group; text-center">
                <button type="submit" class="btn btn-primary"> Guardar </button>
            </div>
        </form>
    </div>

    <div id="grupoList" name="grupoList">
        <!-- <iframe src="List.php">
        </iframe> -->
    </div>

    <div id="alert" name="alert" class="alert alert-success" role="alert">
    </div>
</body>

</html>