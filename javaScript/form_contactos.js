$(document).ready(function() {

    var alert = document.getElementById("alert");

    function crearAlerta(class__, message) {
        alert.style.display = "block";
        alert.className = class__;
        alert.innerHTML = message;
    }

    function deleteAlert() {
        setTimeout(function() {
            alert.style.display = "none";
        }, 1500);
    }

    document.getElementById("buttonDivForm").addEventListener("click", function() {
        var divList = document.getElementById("grupoList");
        divList.style.display = "none";
        var divForm = document.getElementById("grupoForm");
        divForm.style.display = "block";
        return true;
    }, false);

    $("eliminar").click(function() {
        console.log($("eliminar").val());
    });

    document.getElementById("buttonDivList").addEventListener("click", function(e) {
        var divForm = document.getElementById("grupoForm");
        divForm.style.display = "none";
        var divList = document.getElementById("grupoList");
        divList.style.display = "block";
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "List.php",
            data: {},
            success: function(data) {
                e.preventDefault();
                var group = document.getElementById("grupoList");
                group.innerHTML = data;
            },
            error: function() {
                crearAlerta("alert alert-warning", "Ah ocurrido un error en el servidor");
                deleteAlert();
            }
        });
    }, false);

    $('#form-contactos').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "controladores/ControladorCreate.php",
            data: $(this).serialize(),
            success: function(result) {
                if (result == 1) {
                    crearAlerta("alert alert-success", "Se ah creado correctamente el usuario");
                    deleteAlert();
                } else {
                    crearAlerta("alert alert-warning", "Ah ocurrido un error en el servidor");
                    deleteAlert();
                }
            },
            error: function() {
                crearAlerta("alert alert-warning", "Ah ocurrido un error en el servidor");
                deleteAlert();
            }
        });
    });

    var eliminar = document.getElementById("eliminar");

    eliminar.addEventListener("click", function() {
        console.log("Hola Mundo");
    }, false);

});