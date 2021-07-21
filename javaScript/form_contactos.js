$(document).ready(function() {

    document.getElementById("buttonDivForm").addEventListener("click", function() {
        // setTimeout(function() {
        //     var alert = document.getElementById("alert");
        //     alert.style.display = "block";
        //     alert.className = 'alert alert-warning'
        //     alert.innerHTML = "REGISTRO CREADO SATISFACTORIAMENTE";
        // }, 2000)
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
            url: "../validate/Create.php",
            data: $(this).serialize(),
            succes: function() {
                setTimeout(function() {
                        $("#alert").text = "REGISTRO CREADO SATISFACTORIAMENTE";
                    }, 2000)
                    //Pendiente ocultar y volver a mostrar.
                    // alert("REGISTRO CREADO SATISFACTORIAMENTE");
            },
            error: function(e) {
                var alert = document.getElementById("alert");
                alert.style.display = "block";
                alert.className = 'alert alert-warning'
                alert.innerHTML = "SE HA PRESENTADO UN ERROR EN EL SERVIDOR";
                setTimeout(function() {
                    alert.style.display = "none";
                }, 2000);
                // alert("SE HA PRESENTADO UN ERROR EN EL SERVIDOR");
            }
        });
    });
});