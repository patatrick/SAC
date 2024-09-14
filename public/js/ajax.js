/*
$(document).ready(function() {
var obj = {
	"Titulo":"Fiestas de Oficina",
	"Tipo":"Niño y Adulto",
	"Venta":"Mayor y menor",
	"Precio":"$3.500pu $3.000pm"
}

$('figcaption h2').text(obj.Titulo);
var salida ="";
salida +=`
		<p>Tipo: ${obj.Tipo}</p>
		<p>Venta: ${obj.Venta}</p>
		<p>Precio: ${obj.Precio}</p>
		`;
	$('#obj').html(salida);
});


///////////////////////////////////////////
*/
    $(document).ready(function() {
        $('#form0').css('display', 'none');
        $('#form1').css('display', 'none');
        cargar();
    });

    function Metodo(met,id,obj) {
        var ajax = $.ajax({
            url: '/xany/slim/public/index.php/api/'+met+'/'+id,
            type: met,
            data: obj
        })
        return ajax;
    };

    function Actualizar(id) {
        var ajax = $.ajax({
            url: '/xany/slim/public/index.php/api/get/'+id,
            type: 'get'
        }).done(function(info) {
            var i = id - 1 ;
            info = JSON.parse(info);
            $('#p1'+i).html(info.p1);
            $('#p2'+i).html(info.p2);
            $('#tit'+i).html(info.tit);

            $('#txt-tit'+i).val(info.tit);
            $('#txt-p1'+i).val(info.p1);
            $('#txt-p2'+i).val(info.p2);
         });   

    };

    function cargar(){
         Metodo('get',"","")
        .done(function(info) {
            info = JSON.parse(info);
            for (var i = 0; i < info.length; i++) {
                $('#p1'+i).html(info[i].p1);
                $('#p2'+i).html(info[i].p2);
                $('#tit'+i).html(info[i].tit);

                $('#txt-tit'+i).val(info[i].tit);
                $('#txt-p1'+i).val(info[i].p1);
                $('#txt-p2'+i).val(info[i].p2);
            };
        });
    };

    function toggle(n) {
        $('#form'+n).toggle();
        $('#tit'+n).toggle();
        $('#p1'+n).toggle();
        $('#p2'+n).toggle();
    };

    $('#cerrar').click(function(event) {
        event.preventDefault();
        cargar();
        location.replace('cerrar.php');
    });

    $('#btn-edit0').click(function(event) {
        toggle(0);
    });
    $('#btn-edit1').click(function(event) {
        toggle(1);
    });


    $('#btn-send0').click(function(event) {
        event.preventDefault();
        // Actualizar
            var obj = {
                "p1":$('#txt-p10').val(),
                "p2":$('#txt-p20').val()
            };
            Metodo('put',1,obj).done(function(info) {
                console.log(info);
                toggle(0);
                Actualizar(1);
            });
    });

    $('#btn-send1').click(function(event) {
        event.preventDefault();
        // Actualizar
        var obj = {
            "tit":$('#txt-tit1').val(),
            "p1":$('#txt-p11').val(),
            "p2":$('#txt-p21').val()
        };
        console.log(obj);
        Metodo('put',2,obj).done(function(info) {
            console.log(info);
            toggle(1);
            Actualizar(2);
        });
    });