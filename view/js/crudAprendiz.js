function eraseApren(obj) {
    let codigoAprendiz = obj.children[0].innerHTML;

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: 'Estas seguro?',
        text: "No podras revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, eliminar!',
        cancelButtonText: 'No, cancelar!',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = "index.php?ruta=eraseAprendiz&codigo=" + codigoAprendiz;

            /*swalWithBootstrapButtons.fire(
                'Eliminado!',
                'El registro ha sido eliminado.',
                'success'
            )*/
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
                'Cancelado',
                'El registro esta a salvo :)',
                'error'
            )
        }
    })
}

function getDataApren(obj) {
    let codigoApren = obj.children[0].innerHTML;
    let nombreApren = obj.children[1].innerHTML;
    let fechaNaci = obj.children[2].innerHTML;
    let sexoApren = obj.children[3].innerHTML;
    let ciudadApren = obj.children[4].innerHTML;


    document.getElementById('icodeAprem').value = codigoApren;
    document.getElementById('inameAprem').value = nombreApren;
    document.getElementById('naciAprem').value = fechaNaci;
    document.getElementById('sexAprenm').value = sexoApren;
    document.getElementById('ciuAprenm').value = ciudadApren;

}

function getGenerarReporteAprendiz(e) {
    e.preventDefault();
    window.open('view/module/allaprendiz.php', '_blank');
}