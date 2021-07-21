$(document).ready(function() {

    var alert = document.getElementById("alert");

    function crearAlertaSuccess() {
        alert.style.display = "block";
        alert.className = 'alert alert-success'
        alert.innerHTML = "Registro Creado Satisfactoriamente";
    }

    function crearAlertaDanger() {
        alert.style.display = "block";
        alert.className = 'alert alert-danger'
        alert.innerHTML = "Ha ocurrido un error";
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

    document.getElementById("buttonDivList").addEventListener("click", function() {
        var divForm = document.getElementById("grupoForm");
        divForm.style.display = "none";
        var divList = document.getElementById("grupoList");
        divList.style.display = "block";
        return true;
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