function validate(e) {
    e.preventDefault();
    formulario  = document.getElementById('form');
    user      = document.getElementById('txtUser');
    password  = document.getElementById('txtPass');


    lVali = true;

    if (user.value==""){
        user.style.borderColor="red";
        ohSnap('Ingresar El Nombre...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;          
    }
    if (password.value==""){
        password.style.borderColor="red";
        ohSnap('Ingresar El Apellido...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;          
    }
    if (lVali==true){
        formulario.submit();
    }
}