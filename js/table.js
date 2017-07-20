(function(){    

    // Guardado de datos
    function saveNote(data){
        return $.ajax({
            method: 'POST',
            url: 'promedio.php',
            async: true,
            headers: {
                'Content-type': 'application/x-www-form-urlencoded'
            },
            data:data
        })
    }

    // Promedio General de alumno
    function calcular_promedio(type_calification, pr1, pr2, pr3, pa1, pa2, pe){
        if (type_calification === 'A') {

            pro_pr = 3*((pr1+pr2+pr3)/3)
            pro_pa = 2*((pa1 + pa2)/2)
            pro_gen = (pro_pr + pro_pa + pe)/6
            return Math.round(pro_gen)

        } else if (type_calification === 'B') {

            pro_pr = 3*((pr1+pr2+pr3)/3)
            pro_pa = 3*((pa1 + pa2)/2)
            pro_gen = (pro_pr + pro_pa + pe)/7
            return Math.round(pro_gen)

        } else if (type_calification === 'C') {

            pro_pr = 2*((pr1+pr2+pr3)/3)
            pro_pa = 4*((pa1 + pa2)/2)
            pro_gen = (pro_pr + pro_pa + pe)/7
            return Math.round(pro_gen)

        } else if (type_calification === 'D') {

            pro_pr = 2*((pr1+pr2+pr3)/3)
            pro_pa = 3*((pa1 + pa2)/2)
            pro_gen = (pro_pr + pro_pa + pe)/6
            return Math.round(pro_gen)

        } else if (type_calification === 'E') {
            pro_pa = 3*((pa1 + pa2)/2)
            pro_gen = (pro_pa + pe)/4
            return Math.round(pro_gen)

        } else  {

            pro_pr = 4*((pr1+pr2+pr3)/3)
            pro_gen = (pro_pr + pe)/5
            return Math.round(pro_gen)
        }
    }
    // Seleccion de data
    function selectData($this){
        $this = $this.closest('.fila_nota');
        
        var id_nota = parseInt($($this).attr('data-nota'))
        

        var pr1 = parseFloat($('.pr1_'+id_nota).val());
        var pr2 = parseFloat($('.pr2_'+id_nota).val());
        var pr3 = parseFloat($('.pr3_'+id_nota).val());
        var pa1 = parseFloat($('.pa1_'+id_nota).val());
        var pa2 = parseFloat($('.pa2_'+id_nota).val());
        var per = parseFloat($('.per_'+id_nota).val());


        var dataJson = {}


        if (pr1 !== '0' && pr1 !== null && pr1 !== undefined && pr1 !== 0 && 
            pr2 !== '0' && pr2 !== null && pr2 !== undefined && pr2 !== 0 && 
            pr3 !== '0' && pr3 !== null && pr3 !== undefined && pr3 !== 0 && 
            pa1 !== '0' && pa1 !== null && pa1 !== undefined && pa1 !== 0 && 
            pa2 !== '0' && pa2 !== null && pa2 !== undefined && pa2 !== 0 && 
            per !== '0' && per !== null && per !== undefined && per !== 0 ) {

            var type_calification = $('.Title_course').attr('data-type-course')

            dataJson = {
                id_nota: id_nota,
                pr1: pr1,
                pr2: pr2,
                pr3: pr3,
                pa1: pa1,
                pa2: pa2,
                per: per,
                pro: calcular_promedio(type_calification, pr1, pr2, pr3, pa1, pa2, per)
            }             

        } else {
            dataJson = {
                id_nota: id_nota,
                pr1: pr1,
                pr2: pr2,
                pr3: pr3,
                pa1: pa1,
                pa2: pa2,
                per: per,
                pro: 0
            }
        }

        return dataJson
    }
    // Guardado de data en BD
    function saveData(){

        data = selectData($(this)[0]);
        console.log(data)
        saveNote(data).success(function(res){
            res = JSON.parse(res)
            if (res.success) {
                if (data.pro !== 0 && data !== null && data !== undefined) {
                    var promedio = $('.pro_'+data.id_nota)
                    promedio.val(data.pro)
                }

                var dialog = document.createElement('div')
                dialog.setAttribute('id', 'toast-container')
                dialog.innerHTML = `<div class="toast rounded" style="top: 0px; opacity: 1; background-color: #26a69a;">Se ha guadado los datos con éxito.</div>`
                document.querySelector('body').appendChild(dialog)
                setTimeout(function(){
                    $("#toast-container").fadeOut(3000, function(){
                        $("#toast-container").remove()
                    })
                },2000)
            }
        }).error(function(err){
            var dialog = document.createElement('div')
            dialog.setAttribute('id', 'toast-container')
            dialog.innerHTML = `<div class="toast rounded" style="top: 0px; opacity: 1; background-color: #ee6e73;">Ocurrió algo al momento de guardar!</div>`
            document.querySelector('body').appendChild(dialog)
            setTimeout(function(){
                $("#toast-container").fadeOut(3000, function(){
                    $("#toast-container").remove()
                })
            },2000)
        })


    }

    $('.buttonSaveNote').on('click', saveData)



})();