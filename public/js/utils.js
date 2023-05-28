function muestraComentario(id) {
    event.preventDefault();
    let form = document.getElementById('editar-form-' + id);
    form.classList.remove('d-none');
    form.classList.add('d-block');
    let btn = document.getElementById('btn-editar-' + id);
    btn.classList.add('d-none');
}
