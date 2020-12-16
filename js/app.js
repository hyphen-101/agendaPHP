const formularioContactos = document.querySelector('#contacto');

eventListeners();

function eventListeners() {
    /** Cuando el formulario de crear  o editar se ejecuta */
    formularioContactos.addEventListener('submit', leerFormulario);
}

function leerFormulario(e) {
    e.preventDefault();

    /**Leyendo datos de los inputs */
    const nombre = document.querySelector('#nombre').value,
        empresa = document.querySelector('#empresa').value,
        telefono = document.querySelector('#telefono').value,
        accion = document.querySelector('#accion').value;

    if (nombre === '' || empresa === '' || telefono === '') {
        //mensaje y clase
        mostrarNotificacion('Todos los campos son obligatorios', 'error');
    } else {
        mostrarNotificacion('Campos introducidos correctamente', 'correcto');
        //Pasa la validacion, llamar a AJAX
        const infoContacto = new FormData(); // formData es la mejor opcion para leer un formulario
        infoContacto.append('nombre', nombre);
        infoContacto.append('empresa', empresa);
        infoContacto.append('telefono', telefono);
        infoContacto.append('accion', accion);

        //console.log(...infoContacto);

        if (accion === 'crear') {
            //crearemos un nuevo contacto
            insertarBD(infoContacto);
        } else {
            //editaremos un nuevo contacto

        }

    }
}
/**Insertar la base de datos via AJAX */
function insertarBD(datos) {
    //llamando a AJAX

    //crear el objeto
    const xhr = new XMLHttpRequest;
    //abrir la conexion
    xhr.open('POST', '../inc/modelos/modelo-contactos.php', true);

    //pasar los datos
    xhr.onload = function() {
            if (this.status === 200) {
                //console.log(JSON.parse(xhr.responseText));
                //leemos la respuesta 
                const respuesta = JSON.parse(xhr.responseText);
                //console.log(respuesta);
            }
        }
        // enviar los datos
    xhr.send(datos);
}

function mostrarNotificacion(mensaje, clase) {
    const notificacion = document.createElement('div');
    notificacion.classList.add(clase, 'notificacion', 'sombra');
    notificacion.textContent = mensaje;

    //Antes del / formulario
    formularioContactos.insertBefore(notificacion, document.querySelector('form legend'));

    //Mostrar y Ocultar notificacion
    setTimeout(() => {
        notificacion.classList.add('visible');

        setTimeout(() => {
            notificacion.classList.remove('visible');
            setTimeout(() => {
                notificacion.remove('visible');
            }, 500);
        }, 3000);
    }, 100);

}