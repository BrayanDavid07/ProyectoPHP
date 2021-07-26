$(document).ready(function() {

    var alert = document.getElementById("alert");

    function crearAlertaSuccess(class__, message) {
        alert.style.display = "block";
        alert.className = 'alert alert-success'
        alert.innerHTML = "Registro Creado Satisfactoriamente";
    }

    function crearAlertaDanger(class__, message) {
        alert.style.display = "block";
        alert.className = 'alert alert-danger'
        alert.innerHTML = message;
    }

    function ocultarAlerta() {
        alert.style.display = "none";
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
            url: "validate/List.php",
            data: {},
            success: function(data) {
                e.preventDefault();
                $("#grupoList").html(text = data);
            },
            error: function() {
                crearAlertaDanger();
                setTimeout(function() {
                    ocultarAlerta();
                }, 1500);
            }
        });
    }, false);

    $('#form-contactos').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "validate/Create.php",
            data: $(this).serialize(),
            success: function(result) {
                console.log(result);
                if (result == 1) {
                    crearAlertaSuccess();
                    setTimeout(function() {
                        ocultarAlerta();
                    }, 2000)
                } else {
                    crearAlertaDanger();
                    setTimeout(function() {
                        ocultarAlerta();
                    }, 1500);
                }
            },
            error: function() {
                crearAlertaDanger();
                setTimeout(function() {
                    ocultarAlerta();
                }, 1500);
            }
        });
    });
});