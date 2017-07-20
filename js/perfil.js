(function(){

    // Guardado de datos
    function saveUser(data){
        return $.ajax({
            method: 'POST',
            url: 'update_user.php',
            async: true,
            headers: {
                'Content-type': 'application/x-www-form-urlencoded'
            },
            data:data
        })
    }
    // Seleccion de data
    function selectData(type_data){
        if (type_data === 'password') {
            var contraseña_actual = $('#cambiar-actual-contraseña').val();
            var contraseña = $('#cambiar-contraseña').val();
            var contraseña2 = $('#cambiar-contraseña2').val();

            var dataJson ={}

            if ((contraseña_actual !== '' && contraseña_actual !== null && contraseña_actual !== undefined ) && (contraseña !== '' && contraseña !== null && contraseña !== undefined ) && (contraseña2 !== '' && contraseña2 !== null && contraseña2 !== undefined )) {
                
                if (contraseña2 === contraseña) {
                    dataJson = {
                        contraseña_actual: contraseña_actual,
                        contraseña: contraseña,
                        contraseña2: contraseña2,
                        type_action: 'pass',
                    }

                    return dataJson
                } else {
                    return dataJson = {
                        success: false,
                        message: 'Las contraseñas ingresadas no coinciden.'
                    }
                }
            } else {
                return dataJson = {
                    success: false,
                    message: 'Asegurese de haber llenado correctamente todos los campos.'
                }
            }

        } else {
            // var usuario = $('#usuario').val();
            var nombres = $('#nombres').val();
            var apellidos = $('#apellidos').val();
            var direccion = $('#direccion').val();
            var telefono = $('#telefono').val();
            var email = $('#correo').val();
            var dni = $('#dni').val();

            var dataJson = {}

            if ((nombres !== '' && nombres !== null && nombres !== undefined ) && (apellidos !== '' && apellidos !== null && apellidos !== undefined ) && (direccion !== '' && direccion !== null && direccion !== undefined ) && (telefono !== '' && telefono !== null && telefono !== undefined ) && (email !== '' && email !== null && email !== undefined ) && (dni !== '' && dni !== null && dni !== undefined )) {

                if (dni.length === 8) {

                    dataJson = {
                        nombres: nombres,
                        type_action: 'user',
                        apellidos: apellidos,
                        direccion: direccion,
                        telefono: telefono,
                        email: email,
                        dni: dni,
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
                    message: 'Asegurese de haber llenado correctamente todos los campos.'
                }
            }      
        }

    }

    // Limpiar campos de password
    function limpiar_data(type_form){
        if (type_form === 'password') {
            $('#cambiar-actual-contraseña').val('');
            $('#cambiar-contraseña').val('');
            $('#cambiar-contraseña2').val('');
        }
    }

    // Actualizando data de usuario en BD
    $('#updateData').on('click', function saveData(e){
        e.preventDefault();
        var message = $('#edit_user')

        data = selectData();

        if (data.success !== false) {
            saveUser(data).success(function(res){
                res = JSON.parse(res)
                if (res.success) {
                    message.css({'color':'#26a671'});
                    message.html(res.message);
                    $('#userheader').html(data.nombres+' '+data.apellidos)
                    // limpiar_data('password');
                } else {
                   message.css({'color':'#bf0000'});
                   message.html(res.message); 
                }
            }).error(function(err){
                message.css({'color':'#bf0000'});
                message.html(err.message);
            })
        }  else {
            message.css({'color':'#bf0000'});
            message.html(data.message);
        }

    });

    // Actualizando contraseña de usuario en BD
    $('#updatePassword').on('click', function saveData(e){
        e.preventDefault();
        var message = $('#change_password')

        data = selectData('password');

        if (data.success !== false) {
            saveUser(data).success(function(res){
                res = JSON.parse(res)
                if (res.success) {
                    message.css({'color':'#26a671'});
                    message.html(res.message);
                    limpiar_data('password');
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