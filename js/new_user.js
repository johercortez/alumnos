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

        if (contraseña2 === contraseña) {
            var dataJson = {
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
            return false
        }
    }

    // Guardado de data en BD
    $('#sendata').on('click', function saveData(e){
        e.preventDefault();

        data = selectData();

        if (data !== false) {
            saveUser(data).success(function(res){
                console.log(res)
            }).error(function(err){
                console.log(err)
            })
        } else {
            console.log('Error: pass no son iguales')
        }

    });

})();