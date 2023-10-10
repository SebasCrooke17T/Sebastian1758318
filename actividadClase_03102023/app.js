// script.js
document.addEventListener("DOMContentLoaded", function () {
    var formulario = document.querySelector("form");

    formulario.addEventListener("submit", function (event) {
        var edadInput = document.getElementById("txtedad");
        var edad = parseInt(edadInput.value);

        if (isNaN(edad) || edad < 18) {
            alert("Debes ingresar una edad válida (mayor o igual a 18 años).");
            event.preventDefault();
        }
    });
});
