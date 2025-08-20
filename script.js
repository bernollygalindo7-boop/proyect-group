
document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("registroForm");

    form.addEventListener("submit", (event) => {
        const nombre = document.getElementById("nombre").value.trim();
        const edad = parseInt(document.getElementById("edad").value);
        const carrera = document.getElementById("carrera").value;

        // Validar nombre
        if (nombre === "") {
            alert("El nombre no puede estar vacío");
            event.preventDefault();
            return;
        }

        // Validar edad
        if (isNaN(edad) || edad <= 16) {
            alert("La edad debe ser un número mayor a 16");
            event.preventDefault();
            return;
        }

        // Validar carrera
        if (carrera === "") {
            alert("Debes seleccionar una carrera");
            event.preventDefault();
            return;
        }

    });
});

document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("registroForm");

    form.addEventListener("submit", (event) => {
        const nombre = document.getElementById("nombre").value.trim();
        const edad = parseInt(document.getElementById("edad").value);
        const carrera = document.getElementById("carrera").value;
        const soloLetras = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/;

        //Validar Nombres(Solo letras)
        if (!soloLetras.test(nombre)) {
            alert("El nombre solo puede contener letras y espacios");
            event.preventDefault();
            return;
        }
        // Validar nombre
        if (nombre === "") {
            alert("El nombre no puede estar vacío");
            event.preventDefault();
            return;
        }

        // Validar edad
        if (isNaN(edad) || edad <= 16) {
            alert("La edad debe ser un número mayor a 16");
            event.preventDefault();
            return;
        }

        // Validar carrera
        if (carrera === "") {
            alert("Debes seleccionar una carrera");
            event.preventDefault();
            return;
        }

    });
});