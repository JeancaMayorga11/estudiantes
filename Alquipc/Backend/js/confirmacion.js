function confirmacion(e) {
    if (confirm("¿Está seguro de eliminar el alquiler registrado?")) {
        return true;
    } else {
        e.preventDefault();

    }
}
let linkDelete = document.querySelectorAll("c");

for (var i = 0; i < linkDelete.length; i++) {
    linkDelete[i].addEventListener('click',confirmacion);
}