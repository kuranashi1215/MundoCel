function validateMatricula(e) {
    e.preventDefault();
    formulario = document.getElementById('formMatricula');
    fechaMatricula = document.getElementById('fechaMatricula');
    nombreCentro = document.getElementById('nombreCentro');
    costo = document.getElementById('costo');
    estado = document.getElementById('estado');
    codigoPrograma = document.getElementById('codigoPrograma');
    codigoAprendiz = document.getElementById('codigoAprendiz');

    lVali = true;

    if (fechaMatricula.value == "") {
        fechaMatricula.style.borderColor = "red";
        ohSnap('Ingrese la fecha de la matricula...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (nombreCentro.value == "") {
        nombreCentro.style.borderColor = "red";
        ohSnap('Ingrese el nombre del centro...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (costo.value == "") {
        costo.style.borderColor = "red";
        ohSnap('Ingrese el costo...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (estado.value == "") {
        estado.style.borderColor = "red";
        ohSnap('Ingrese el estado...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }

    if (codigoPrograma.value == "") {
        codigoPrograma.style.borderColor = "red";
        ohSnap('Ingrese el codigo del programa...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (codigoAprendiz.value == "") {
        codigoAprendiz.style.borderColor = "red";
        ohSnap('Ingrese el codigo del aprendiz...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (lVali == true) {
        formulario.submit();
    }

}

function validateMatriculaMod(e) {
    e.preventDefault();
    formulariom = document.getElementById('formMatriculam');
    fechaMatricula = document.getElementById('fechaMatriculam');
    nombreCentro = document.getElementById('nombreCentrom');
    costo = document.getElementById('costom');
    estado = document.getElementById('estadom');
    codigoPrograma = document.getElementById('codigoProgramam');
    codigoAprendiz = document.getElementById('codigoAprendizm');

    lValim = true;

    if (fechaMatricula.value == "") {
        fechaMatricula.style.borderColor = "red";
        ohSnap('Ingrese la fecha de la matricula...', { color: 'red' }); // alert will have class 'alert-color'
        lValim = false;
    }
    if (nombreCentro.value == "") {
        nombreCentro.style.borderColor = "red";
        ohSnap('Ingrese el nombre del centro...', { color: 'red' }); // alert will have class 'alert-color'
        lValim = false;
    }
    if (costo.value == "") {
        costo.style.borderColor = "red";
        ohSnap('Ingrese el costo...', { color: 'red' }); // alert will have class 'alert-color'
        lValim = false;
    }
    if (estado.value == "") {
        estado.style.borderColor = "red";
        ohSnap('Ingrese el estado...', { color: 'red' }); // alert will have class 'alert-color'
        lValim = false;
    }

    if (codigoPrograma.value == "") {
        codigoPrograma.style.borderColor = "red";
        ohSnap('Ingrese el codigo del programa...', { color: 'red' }); // alert will have class 'alert-color'
        lValim = false;
    }
    if (codigoAprendiz.value == "") {
        codigoAprendiz.style.borderColor = "red";
        ohSnap('Ingrese el codigo del aprendiz...', { color: 'red' }); // alert will have class 'alert-color'
        lValim = false;
    }
    if (lValim == true) {
        formulariom.submit();
    }
    

}