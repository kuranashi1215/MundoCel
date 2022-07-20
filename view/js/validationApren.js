function validateApren(e) {
    e.preventDefault();
    formulario = document.getElementById('formuAprendiz');
    nombre = document.getElementById('inameApre');
    fechaNacimiento = document.getElementById('naciApre');
    sexo = document.getElementById('sexApren');
    ciudad = document.getElementById('ciuApren');

    lVali = true;

    if (nombre.value == "") {
        nombre.style.borderColor = "red";
        ohSnap('Ingrese su nombre...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (fechaNacimiento.value == "") {
        fechaNacimiento.style.borderColor = "red";
        ohSnap('Ingrese su fecha de nacimiento...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (sexo.value == "") {
        sexo.style.borderColor = "red";
        ohSnap('Ingrese su sexo...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (ciudad.value == "") {
        ciudad.style.borderColor = "red";
        ohSnap('Ingrese su ciudad de residencia...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }

    if (lVali == true) {
        formulario.submit();
    }

}


function validateAprendizMod(e) {
    e.preventDefault();
    formulario = document.getElementById('formAprendizm');
    nombre = document.getElementById('inameAprem');
    fechaNacimiento = document.getElementById('naciAprem');
    sexo = document.getElementById('sexAprenm');
    ciudad = document.getElementById('ciuAprenm');
    
    lVali = true;
    
    if (nombre.value == "") {
        nombre.style.borderColor = "red";
        ohSnap('Ingrese su nombre...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (fechaNacimiento.value == "") {
        fechaNacimiento.style.borderColor = "red";
        ohSnap('Ingrese su fecha de nacimiento...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (sexo.value == "") {
        sexo.style.borderColor = "red";
        ohSnap('Ingrese su sexo...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (ciudad.value == "") {
        ciudad.style.borderColor = "red";
        ohSnap('Ingrese su ciudad de residencia...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    
    if (lVali == true) {
        formulario.submit();
        if (window.history.replaceState) { // verificamos disponibilidad
            window.history.replaceState(null, null, window.location.href);
        }
    }
    
}
