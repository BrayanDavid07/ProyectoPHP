$(document).ready(function() {

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
        alert("INGRESANDO AL METODO ENVIAR");
        $.ajax({
            type: "POST",
            url: './validate/Create.php',
            data: $(this).serialize(),
            succes: function(response) {
                alert("REGISTRO CREADO SATISFACTORIAMENTE");
            },
            error: function(e) {
                alert("SE HA PRESENTADO UN ERROR EN EL SERVIDOR");
            }
        });
    });
});