function validate(e){
    e.preventDefault();
    //usuario
    formulario  = document.getElementById('frmUsuario');
    nombre      = document.getElementById('txtNombre');
    apellido    = document.getElementById('txtApellido');
    usuario     = document.getElementById('txtUsuario');
    clave       = document.getElementById('txtClave');
    //aprendiz
    
    CodeAprendiz      = document.getElementById('txtCodeAprendiz');
    FechaNacimiento    = document.getElementById('txtFechaNacimiento');
    Sexo     = document.getElementById('txtSexo');
    Ciudad       = document.getElementById('txtCiudad');
    
    lVali = true;
    //user
    if (nombre.value==""){
        nombre.style.borderColor="red";
        ohSnap('Ingresar el nombre...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (apellido.value==""){
        apellido.style.borderColor="red";
        ohSnap('Ingresar el apellido...', {color: 'red'},{duration:1000});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (usuario.value==""){
        usuario.style.borderColor="red";
        ohSnap('Ingresar el usuario...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (clave.value==""){
        clave.style.borderColor="red";
        ohSnap('Ingresar la clave...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    //aprendiz
    if (CodeAprendiz.value==""){
        nombre.style.borderColor="red";
        ohSnap('Ingresar el codigo...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (FechaNacimiento.value==""){
        apellido.style.borderColor="red";
        ohSnap('Ingresar la fecha de nacimiento...', {color: 'red'},{duration:1000});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (Sexo.value==""){
        usuario.style.borderColor="red";
        ohSnap('Ingresar el sexo...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (Ciudad.value==""){
        clave.style.borderColor="red";
        ohSnap('Ingresar la ciudad...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (lVali == true){
        formulario.submit();
    }
    

}
function validateModify(e){
    e.preventDefault();
    //user
    formulario  = document.getElementById('frmUsuarioModificar');
    nombre      = document.getElementById('txtNombreM');
    apellido    = document.getElementById('txtApellidoM');
    usuario     = document.getElementById('txtUsuarioM');
    clave       = document.getElementById('txtClaveM');
    //aprendiz
    CodeAprendiz      = document.getElementById('txtCodeAprendiz');
    FechaNacimiento    = document.getElementById('txtFechaNacimiento');
    Sexo     = document.getElementById('txtSexo');
    Ciudad       = document.getElementById('txtCiudad');

    lVali = true;


    //user
    if (nombre.value==""){
        nombre.style.borderColor="red";
        ohSnap('Ingresar el nombre...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (apellido.value==""){
        apellido.style.borderColor="red";
        ohSnap('Ingresar el apellido...', {color: 'red'},{duration:1000});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (usuario.value==""){
        usuario.style.borderColor="red";
        ohSnap('Ingresar el usuario...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (clave.value==""){
        clave.style.borderColor="red";
        ohSnap('Ingresar la clave...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    
    //aprendiz

    if (CodeAprendiz.value==""){
        nombre.style.borderColor="red";
        ohSnap('Ingresar el codigo...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (FechaNacimiento.value==""){
        apellido.style.borderColor="red";
        ohSnap('Ingresar la fecha de nacimiento...', {color: 'red'},{duration:1000});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (Sexo.value==""){
        usuario.style.borderColor="red";
        ohSnap('Ingresar el sexo...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (Ciudad.value==""){
        clave.style.borderColor="red";
        ohSnap('Ingresar la ciudad...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (lVali == true){
        formulario.submit();
    }
    

}
