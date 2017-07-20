(function(){

    // Guardado de datos
    function saveUser(data){
        return $.ajax({
            method: 'POST',
            url: 'save_user.php',
            async: true,
            headers: {
                'Content-type': 'application/x-www-form-urlencoded'
            },
            data:data
        })
    }
    // Seleccion de data
    function selectData(){        

        var usuario = $('#usuario').val();
        var contraseña = $('#contraseña').val();
        var contraseña2 = $('#contraseña2').val();
        var nombres = $('#nombres').val();
        var apellidos = $('#apellidos').val();
        var direccion = $('#direccion').val();
        var telefono = $('#telefono').val();
        var email = $('#correo').val();
        var dni = $('#dni').val();

        var dataJson = {};

        if ( (usuario !== '' && usuario !== null && usuario !== undefined ) && (contraseña !== '' && contraseña !== null && contraseña !== undefined ) && (contraseña2 !== '' && contraseña2 !== null && contraseña2 !== undefined ) && (nombres !== '' && nombres !== null && nombres !== undefined ) && (apellidos !== '' && apellidos !== null && apellidos !== undefined ) && (direccion !== '' && direccion !== null && direccion !== undefined ) && (telefono !== '' && telefono !== null && telefono !== undefined ) &&(email !== '' && email !== null && email !== undefined ) && (dni !== '' && dni !== null && dni !== undefined ) ) {
            if (contraseña2 === contraseña) {
                if (dni.length === 8) {
                    dataJson = {
                        usuario: usuario,
                        contraseña: contraseña,
                        contraseña2: contraseña2,
                        nombres: nombres,
                        dni: dni,
                        apellidos: apellidos,
                        direccion: direccion,
                        telefono: telefono,
                        email: email,
                    }
                    return dataJson
                } else {
                    return dataJson = {
                        success: false,
                        message: 'Ingrese un número de DNI válido.'
                    }
                }
            } else {
                return dataJson = {
                    success: false,
                    message: 'Las contraseñas ingresadas no coinciden.'
                }
            }
        } else {
            return dataJson = {
                success: false,
                message: 'Existen campos vacíos. Por favor ingrese los datos correctamente!'
            }
        }
    }

    // Limpieza de inputs
    function limpiar_data() {
        $('#usuario').val('');
        $('#contraseña').val('');
        $('#contraseña2').val('');
        $('#nombres').val('');
        $('#apellidos').val('');
        $('#direccion').val('');
        $('#telefono').val('');
        $('#correo').val('');
        $('#dni').val('');
    }

    // Guardado de data en BD
    $('#sendata').on('click', function saveData(e){
        e.preventDefault();
        var message = $('#message_new_user')

        data = selectData();

        if (data.success !== false) {
            saveUser(data).success(function(res){
                console.log(res)
                res = JSON.parse(res)
                if (res.success) {
                    message.css({'color':'#26a671'});
                    message.html(res.message);
                    limpiar_data();
                } else {
                   message.css({'color':'#bf0000'});
                   message.html(res.message); 
                }

            }).error(function(err){
                message.css({'color':'#bf0000'});
                message.html(err.message);

            })
        } else {
            message.css({'color':'#bf0000'});
            message.html(data.message);

        }

    });

})();