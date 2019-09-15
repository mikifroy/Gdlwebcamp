var API= 'AIzaSyDQv3_FK0izdeB1n_4cuEb-APM5YXqw-w8'



function initMap() {

    var latLng= {
        lat: 20.6772885,
        lng: -103.3856328

    }

   var map = new google.maps.Map(document.getElementById('mapa'), {
    'center': latLng, 
    'zoom': 14,
    'mapTypeID': google.maps.MapTypeId.ROADMAP
    });

    var contenido = '<h2>GDLWEBCAMP</h2>'+
                    ' <p> Del 10 al 12 de Diciembre </p>'+
                    '<p> Visitanos!</p>'

    var informacion = new google.maps.InfoWindow({
        content: contenido
    });

                

    var marker = new google.maps.Marker({
        position: latLng, 
        map: map,
        title: 'GDLWEBCAMP'
    });

    marker.addListener('click', function(){
        informacion.open(map, marker)
    });
}


(function(){

    "use strict";

    
    

    var regalo = document.getElementById('regalo');

    document.addEventListener('DOMContentLoaded', function(){
        
        //campos usuario
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');

        //Campos pases
        var pase_dia = document.getElementById('pase_dia');
        var pase_dosdias = document.getElementById('pase_dosdias');
        var pase_completo = document.getElementById('pase_completo');


        //botones y divs
        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var botonRegistro = document.getElementById('btnRegistro');
        var lista_productos = document.getElementById('lista_productos');
        var suma = document.getElementById('suma-total');


        botonRegistro.disabled = true;

        //Extras
        var camisas = document.getElementById('camisa')
        var etiquetas = document.getElementById('etiquetas')


        

        


        calcular.addEventListener('click', calcularMontos);

        pase_dia.addEventListener('blur', mostrarDias);
        pase_dosdias.addEventListener('blur', mostrarDias);
        pase_completo.addEventListener('blur', mostrarDias);


        nombre.addEventListener('blur', validarDatos);
        apellido.addEventListener('blur', validarDatos);
        email.addEventListener('blur', validarDatos);
        email.addEventListener('blur', validarMail);


        


        function validarMail(){
            if(this.value.indexOf("@") > -1){
                errorDiv.style.display='none';
                this.style.border='1px solid #cccccc'; 
            }else{
                errorDiv.style.display= 'block';
                errorDiv.innerHTML='Este campo es obligatorio y debe contener @';
                this.style.border='1px solid red';
                errorDiv.style.border='1px solid red';
            }

        }


        function validarDatos(){
            if(this.value== ''){
                errorDiv.style.display= 'block';
                errorDiv.innerHTML='Este campo es obligatorio';
                this.style.border='1px solid red';
                errorDiv.style.border='1px solid red';
            }else{
                errorDiv.style.display='none';
                this.style.border='1px solid #cccccc';
            }
        }





        function calcularMontos(event){
            event.preventDefault();
            console.log("has hecho click en Calcular");

            if(regalo.value === ''){
                alert("Debes escoger un regalo");
                regalo.focus();
            }else{
                var boletosDia = parseInt (pase_dia.value, 10) || 0,
                    boletos2Dias =parseInt (pase_dosdias.value, 10) || 0,
                    boletoCompleto = parseInt (pase_completo.value, 10)||0,
                    cantCamisas = parseInt (camisas.value,  10)||0,
                    cantEtiquetas = parseInt (etiquetas.value, 10)||0;
            

                var totalPagar = (boletosDia * 30) + (boletos2Dias * 45) + (boletoCompleto * 50) + ((cantCamisas * 18) *.93) + (cantEtiquetas * 2);
                
                var listadoProductos = [];

                if(boletosDia >=1){
                    listadoProductos.push(boletosDia + ' Pases por dia');
                }
                if(boletos2Dias >=1){
                    listadoProductos.push(boletos2Dias + ' Pases por 2 dias');
                }
                if(boletoCompleto >= 1){
                    listadoProductos.push(boletoCompleto + ' Pases completos');
                }
                if(cantCamisas >= 1){
                    listadoProductos.push(cantCamisas + ' camisas');
                }
                if(cantEtiquetas >= 1){
                    listadoProductos.push(cantEtiquetas + ' Etiquetas');
                }
                
                
                lista_productos.style.display="block";
                lista_productos.innerHTML = '';
                for(var i=0; i<listadoProductos.length; i++){
                    lista_productos.innerHTML  += listadoProductos[i] +'<br/>';
                }


                suma.innerHTML = "$ " + totalPagar.toFixed(2);

                botonRegistro.disabled = false;
                document.getElementById('total_pedido').value = totalPagar;


            }


        }

        function mostrarDias(){

            var boletosDia = parseInt (pase_dia.value, 10) || 0,
                boletos2Dias =parseInt (pase_dosdias.value, 10) || 0,
                boletoCompleto = parseInt (pase_completo.value, 10)||0;

                var diasElegidos = [];

                if(boletosDia > 0){
                    diasElegidos.push('viernes');

                }
                if(boletos2Dias > 0){
                    diasElegidos.push('viernes','sabado');
                }

                if(boletoCompleto > 0){
                    diasElegidos.push('viernes','sabado','domingo');
                }

                for(var i =0; i < diasElegidos.length; i++){
                    document.getElementById(diasElegidos[i]).style.display='block';
                }
        }



    });//DOM CONTENT LOADER
})();


//jquery



$(function(){

    $('body.conferencia .navegacion-principal a:contains("Conferencia")').addClass('activo');
    $('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
    $('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');

    //menu fijo

    var windowHeight = $(window).height();
    var barraAltura = $('.barra').innerHeight();

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if(scroll > windowHeight){
            $('.barra').addClass('fixed')
            $('body').css({'margin-top': barraAltura+'px'})

        }else{
            $('.barra').removeClass('fixed')
            $('body').css({'margin-top': '0px'})
        }
    })

    //menu responsivo
    $('.menu-movil').on('click', function(){
        $('.navegacion-principal').slideToggle()
    })





    //programa del evento de conferencias
    $('.programa-evento .info-curso:first').show();
    $('.menu-programa a:first').addClass('activo');
    
    $('.menu-programa a').on('click',function(){
        $('.menu-programa a').removeClass('activo')
        $(this).addClass('activo')
        $('.ocultar').hide()


        var enlace = $(this).attr('href');
        $(enlace).fadeIn(1000)

        return false
        //console.log(enlace)
    });

    //animaciones para nuestros numeros
    $('.resumen-evento li:nth-child(1) p').animateNumber({number: 6},1200);
    $('.resumen-evento li:nth-child(2) p').animateNumber({number: 15},1200);
    $('.resumen-evento li:nth-child(3) p').animateNumber({number: 3},1200);
    $('.resumen-evento li:nth-child(4) p').animateNumber({number: 9},1200);


    //plugin the final countdown(cuenta regresiva)

    $('.cuenta-regresiva').countdown('2019/12/10 09:00:00', function(event){
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));


    });


    //plugin de colorbox
    $('.invitado-info').colorbox({inline:true, width:"50%"});
    $('.boton_newsletter').colorbox({inline:true, width:"50%"});
    
    

});



//plugins
