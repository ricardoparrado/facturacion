/*
|--------------------------------------------------------------
|  Confirmación antes de eliminar un registro
|---------------------------------------------------------------
*/

function showConfirmation() {
    if (confirm('¿Estás seguro que deseas continuar con la eliminación?')) {
        document.getElementById('delete-form').submit();
    }
}
