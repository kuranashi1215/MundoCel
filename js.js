function mostrarAlerta(icono,titulo) {
    
    Swal.fire({
        position: 'top-end',
        icono,
        titulo,
        showConfirmButton: false,
        timer: 1500
      })
      

}