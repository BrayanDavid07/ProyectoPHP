$(document).ready(function() {

    document.getElementById("eliminar").addEventListener("click", function() {
        var valueId = $("#eliminar").val();
        console.log("El valor es: " + valueId);

    }, false);
})