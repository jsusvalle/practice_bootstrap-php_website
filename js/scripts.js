(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Seleccionar el formulario para validar
        var forms = document.getElementsByClassName('needs-validation');
        // Validar cada campo y prevenir que se envie
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                if (form.checkValidity() === false) {
                    event.stopPropagation();
                } else {
                    //Obtener valores del formulario
                    var nombre = document.getElementById('nombre').value,
                        email = document.getElementById('email').value,
                        mensaje = document.getElementById('mensaje').value;

                    //Ejecutar ajax
                    var xhr = new XMLHttpRequest();

                    //Abrir conexion
                    xhr.open('POST', 'http://localhost/Carolina_Spa/inc/enviar.php', true);

                    //Siempre que utilizas un formulario se debe agregar un header
                    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

                    //Revisar el estado
                    xhr.onload = function() {
                        if (xhr.status === 200) {
                            var respuesta = JSON.parse(xhr.responseText);
                            console.log(respuesta);
                        }
                    }

                    //Enviar el request
                    xhr.send('nombre=' + nombre + '&email=' + email + '&mensaje=' + mensaje);

                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();