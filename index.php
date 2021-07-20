<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="./javaScript/form_contactos.js"></script>
    <link rel="stylesheet" href="./css//principal.css">
    <title>Documento</title>
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

    <div id="grupoList" class="container">
        <table class="table table-hover">
            <tr>
                <td>Prube1</td>
                <td>Prueba2</td>
                <td>Prueba3</td>
                <td>Prueba4</td>
            </tr>
        </table>
    </div>
</body>

</html>