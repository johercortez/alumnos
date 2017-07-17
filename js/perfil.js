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
            
            if (contraseña2 === contraseña) {
                var dataJson = {
                    contraseña_actual: contraseña_actual,
                    contraseña: contraseña,
                    contraseña2: contraseña2,
                    type_action: 'pass',
                }

                return dataJson
            } else {
                return false
            }

        } else {
            // var usuario = $('#usuario').val();
            var nombres = $('#nombres').val();
            var apellidos = $('#apellidos').val();
            var direccion = $('#direccion').val();
            var telefono = $('#telefono').val();
            var email = $('#correo').val();
            var dni = $('#dni').val();

            var dataJson = {
                nombres: nombres,
                type_action: 'user',
                apellidos: apellidos,
                direccion: direccion,
                telefono: telefono,
                email: email,
                dni: dni,
            }

            return dataJson         
        }


    }

    // Actualizando data de usuario en BD
    $('#updateData').on('click', function saveData(e){
        e.preventDefault();

        data = selectData();
        console.log(data)

        saveUser(data).success(function(res){
            console.log(res)
        }).error(function(err){
            console.log(err)
        })

    });

    // Actualizando contraseña de usuario en BD
    $('#updatePassword').on('click', function saveData(e){
        e.preventDefault();

        data = selectData('password');
        console.log(data)

        if (data !== false) {
            saveUser(data).success(function(res){
                console.log(res)
            }).error(function(err){
                console.log(err)
            })
        } else {
            console.log('Las contraseñas ingresadas no coinciden')
        }

    });

})();