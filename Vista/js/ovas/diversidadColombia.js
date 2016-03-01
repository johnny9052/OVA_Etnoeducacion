var posicionAvatardiversidadColombia=0; // almacena la posicion del avatar de la ova para su animacion

/***********************************************************/
/***********************************************************/
/***********************************************************/
/**********************ANIMACIONES**************************/
/***********************************************************/
/***********************************************************/


var animacionAvatardiversidadColombia=null; // almacena la animacion del avatar de diversidadColombia

/**
 * Inicia la animacion del avatar de la ova de division celular para el mensaje de bienvenida
 * 
 * 
 * @return {String} Nothing.
 */
function startAnimacionIniciodiversidadColombia() {  // use a one-off timer
    stopAnimacionIniciodiversidadColombia();
    animacionAvatardiversidadColombia= setInterval(function(){
        moverAvatardiversidadColombia();
    },200);
}

/**
 * Detiene la animacion del avatar de la ova de division celular para el mensaje de bienvenida
 * 
 * 
 * @return {String} Nothing.
 */
function stopAnimacionIniciodiversidadColombia() {
    clearTimeout(animacionAvatardiversidadColombia);
}



/**
 * Cambia la animacion del avatar de diversidadColombia.
 *  
 * @return {String} Nothing.
 */
function moverAvatardiversidadColombia(){    
    
    if(posicionAvatardiversidadColombia>=limiteAvatar){
        posicionAvatardiversidadColombia =0;
    }
    
    switch(posicionAvatardiversidadColombia){
        case 0:
            document.getElementById('avatarBienvenidadiversidadColombia').src = "Vista/imagenes/universo/diversidadColombia/AvatarDerecha.png";                        
            break;
        
        case 1:
            document.getElementById('avatarBienvenidadiversidadColombia').src = "Vista/imagenes/universo/diversidadColombia/AvatarIzquierda.png";
            break;  
        
        case 2:
            document.getElementById('avatarBienvenidadiversidadColombia').src = "Vista/imagenes/universo/diversidadColombia/AvatarDerecha.png";            
            break;                             
    }           
    posicionAvatardiversidadColombia++;            
}





/**
 * Muestra con efecto una determinada imagen oculta con extension png, a partir de su clase
 * 
 * @param {String} clase : Clase del elemento oculto
 * @return {String} Nothing.
 * @description para mas informacion visitar el siguiente enlace http://vagabundia.blogspot.com/2010/01/efectos-elementales-con-jquery.html
 */
function verSecuencia(clase){       
    $('.'+clase).attr('src', 'Vista/imagenes/secuenciacion/diversidadColombia/'+clase+'.png');    
    $('.'+clase).fadeIn();
//$('.'+clase).css('display', 'inline');    
}





/******************************************************/
/******************************************************/
/**************PREGUNTAS SELECCION*********************/
/******************************************************/
/******************************************************/



/**
 * Determina si la pregunta contestada es correcta o no
 * 
 * @param {int} pregunta : Numero de la pregunta
 * @return {String} Mensaje de si es correcta la respuesta o no.
 */
function calificarTestdiversidadColombia(pregunta){
    
    switch(pregunta){
        case 1:
            if($("input[name='testDivColPreg1']:checked").val()==3){//respuesta correcta la C
                mensajeGeneral('¡La respuesta es correcta! Han pasado más de cinco siglos para que las comunidades lograran ser reconocidas a partir de sus identidades culturales. Continúa explorando acerca de la Diversidad en nuestro país.');
                correcto.playclip();
                avanzar('diversidadColombia');
            }else{                
                mensajeError("¡La respuesta es incorrecta! En este curso conocerás las denominaciones que las comunidades han establecido para su reconocimiento.");
                error.playclip();
                //avanzar('diversidadColombia');
            }
            
            break;
        
        
        case 2:
            if($("input[name='testDivColPreg2']:checked").val()==2){//respuesta correcta la B
                mensajeGeneral('¡La respuesta es correcta! En 1991 se convocó una Asamblea Nacional Constituyente para reformar la Constitución de 1886. Allí, las comunidades de diferentes etnias solicitaron ser escuchadas y participar en la toma de decisiones. ');
                correcto.playclip();
                avanzar('diversidadColombia');
            }else{                
                mensajeError("¡La respuesta es incorrecta! Más adelante encontrarás información correspondiente a la memoria histórica de las poblaciones diversas.");
                error.playclip();
                //avanzar('diversidadColombia');
            }
            
            break;
    
    }

}


function verificarCrucigramadiversidadColombia(tipo){ 
    
    if(tipo==1){
    
        if((document.getElementById('a10').value).toUpperCase()=='C' && (document.getElementById('b10').value).toUpperCase()=='O' && (document.getElementById('c10').value).toUpperCase()=='N' &&
            (document.getElementById('d10').value).toUpperCase()=='F' && (document.getElementById('e10').value).toUpperCase()=='L' && (document.getElementById('f10').value).toUpperCase()=='I' &&
            (document.getElementById('g10').value).toUpperCase()=='C' && (document.getElementById('h10').value).toUpperCase()=='T' && (document.getElementById('i10').value).toUpperCase()=='O' &&
            (document.getElementById('j10').value).toUpperCase()=='A' && (document.getElementById('k10').value).toUpperCase()=='R' && (document.getElementById('l10').value).toUpperCase()=='M' &&
            (document.getElementById('m10').value).toUpperCase()=='A' && (document.getElementById('n10').value).toUpperCase()=='D' && (document.getElementById('o10').value).toUpperCase()=='O' &&
            (document.getElementById('h11').value).toUpperCase()=='E' && (document.getElementById('h12').value).toUpperCase()=='R' && (document.getElementById('h13').value).toUpperCase()=='R' &&
            (document.getElementById('h14').value).toUpperCase()=='I' && (document.getElementById('h15').value).toUpperCase()=='T' && (document.getElementById('h16').value).toUpperCase()=='O' &&
            (document.getElementById('h17').value).toUpperCase()=='R' && (document.getElementById('h18').value).toUpperCase()=='I' && (document.getElementById('h19').value).toUpperCase()=='A' &&
            (document.getElementById('h20').value).toUpperCase()=='L' && (document.getElementById('g17').value).toUpperCase()=='P' && (document.getElementById('i17').value).toUpperCase()=='O' &&
            (document.getElementById('j17').value).toUpperCase()=='T' && (document.getElementById('k17').value).toUpperCase()=='E' && (document.getElementById('l17').value).toUpperCase()=='C' &&
            (document.getElementById('m17').value).toUpperCase()=='C' && (document.getElementById('n17').value).toUpperCase()=='I' && (document.getElementById('o17').value).toUpperCase()=='O' &&
            (document.getElementById('p17').value).toUpperCase()=='N' && (document.getElementById('m1').value).toUpperCase()=='S' && (document.getElementById('m2').value).toUpperCase()=='A' &&
            (document.getElementById('m3').value).toUpperCase()=='L' && (document.getElementById('m4').value).toUpperCase()=='U' && (document.getElementById('m5').value).toUpperCase()=='D' &&
            (document.getElementById('m6').value).toUpperCase()=='E' && (document.getElementById('m7').value).toUpperCase()=='D' && (document.getElementById('m8').value).toUpperCase()=='U' &&
            (document.getElementById('m9').value).toUpperCase()=='C' && (document.getElementById('m11').value).toUpperCase()=='C' && (document.getElementById('m12').value).toUpperCase()=='I' &&                                                                                                                                                                                            
            (document.getElementById('m13').value).toUpperCase()=='O' && (document.getElementById('m14').value).toUpperCase()=='N' && (document.getElementById('j3').value).toUpperCase()=='R' &&
            (document.getElementById('j4').value).toUpperCase()=='O' && (document.getElementById('j5').value).toUpperCase()=='M' && (document.getElementById('s1').value).toUpperCase()=='C' &&
            (document.getElementById('s2').value).toUpperCase()=='O' && (document.getElementById('s3').value).toUpperCase()=='L' && (document.getElementById('s4').value).toUpperCase()=='E'  &&                                                                                                                                                                                                                           
            (document.getElementById('s5').value).toUpperCase()=='C' &&       
            (document.getElementById('s6').value).toUpperCase()=='T' && (document.getElementById('s7').value).toUpperCase()=='I' && (document.getElementById('s8').value).toUpperCase()=='V' &&
            (document.getElementById('s9').value).toUpperCase()=='O' && (document.getElementById('s10').value).toUpperCase()=='S' && (document.getElementById('i4').value).toUpperCase()=='C' &&
            (document.getElementById('k4').value).toUpperCase()=='N' && (document.getElementById('l4').value).toUpperCase()=='S' && (document.getElementById('n4').value).toUpperCase()=='L' &&
            (document.getElementById('o4').value).toUpperCase()=='T' && (document.getElementById('p4').value).toUpperCase()=='A' && (document.getElementById('q4').value).toUpperCase()=='P' &&
            (document.getElementById('r4').value).toUpperCase()=='R' && (document.getElementById('t4').value).toUpperCase()=='V' && (document.getElementById('u4').value).toUpperCase()=='I' &&
            (document.getElementById('v4').value).toUpperCase()=='A'){
            correcto.playclip();
            mensajeGeneral("Muy bien, has terminado el crucigrama correctamente");
        }  
    }else{
        if((document.getElementById('a10').value).toUpperCase()=='C' && (document.getElementById('b10').value).toUpperCase()=='O' && (document.getElementById('c10').value).toUpperCase()=='N' &&
            (document.getElementById('d10').value).toUpperCase()=='F' && (document.getElementById('e10').value).toUpperCase()=='L' && (document.getElementById('f10').value).toUpperCase()=='I' &&
            (document.getElementById('g10').value).toUpperCase()=='C' && (document.getElementById('h10').value).toUpperCase()=='T' && (document.getElementById('i10').value).toUpperCase()=='O' &&
            (document.getElementById('j10').value).toUpperCase()=='A' && (document.getElementById('k10').value).toUpperCase()=='R' && (document.getElementById('l10').value).toUpperCase()=='M' &&
            (document.getElementById('m10').value).toUpperCase()=='A' && (document.getElementById('n10').value).toUpperCase()=='D' && (document.getElementById('o10').value).toUpperCase()=='O' &&
            (document.getElementById('h11').value).toUpperCase()=='E' && (document.getElementById('h12').value).toUpperCase()=='R' && (document.getElementById('h13').value).toUpperCase()=='R' &&
            (document.getElementById('h14').value).toUpperCase()=='I' && (document.getElementById('h15').value).toUpperCase()=='T' && (document.getElementById('h16').value).toUpperCase()=='O' &&
            (document.getElementById('h17').value).toUpperCase()=='R' && (document.getElementById('h18').value).toUpperCase()=='I' && (document.getElementById('h19').value).toUpperCase()=='A' &&
            (document.getElementById('h20').value).toUpperCase()=='L' && (document.getElementById('g17').value).toUpperCase()=='P' && (document.getElementById('i17').value).toUpperCase()=='O' &&
            (document.getElementById('j17').value).toUpperCase()=='T' && (document.getElementById('k17').value).toUpperCase()=='E' && (document.getElementById('l17').value).toUpperCase()=='C' &&
            (document.getElementById('m17').value).toUpperCase()=='C' && (document.getElementById('n17').value).toUpperCase()=='I' && (document.getElementById('o17').value).toUpperCase()=='O' &&
            (document.getElementById('p17').value).toUpperCase()=='N' && (document.getElementById('m1').value).toUpperCase()=='S' && (document.getElementById('m2').value).toUpperCase()=='A' &&
            (document.getElementById('m3').value).toUpperCase()=='L' && (document.getElementById('m4').value).toUpperCase()=='U' && (document.getElementById('m5').value).toUpperCase()=='D' &&
            (document.getElementById('m6').value).toUpperCase()=='E' && (document.getElementById('m7').value).toUpperCase()=='D' && (document.getElementById('m8').value).toUpperCase()=='U' &&
            (document.getElementById('m9').value).toUpperCase()=='C' && (document.getElementById('m11').value).toUpperCase()=='C' && (document.getElementById('m12').value).toUpperCase()=='I' &&                                                                                                                                                                                            
            (document.getElementById('m13').value).toUpperCase()=='O' && (document.getElementById('m14').value).toUpperCase()=='N' && (document.getElementById('j3').value).toUpperCase()=='R' &&
            (document.getElementById('j4').value).toUpperCase()=='O' && (document.getElementById('j5').value).toUpperCase()=='M' && (document.getElementById('s1').value).toUpperCase()=='C' &&
            (document.getElementById('s2').value).toUpperCase()=='O' && (document.getElementById('s3').value).toUpperCase()=='L' && (document.getElementById('s4').value).toUpperCase()=='E'  &&                                                                                                                                                                                                                           
            (document.getElementById('s5').value).toUpperCase()=='C' &&       
            (document.getElementById('s6').value).toUpperCase()=='T' && (document.getElementById('s7').value).toUpperCase()=='I' && (document.getElementById('s8').value).toUpperCase()=='V' &&
            (document.getElementById('s9').value).toUpperCase()=='O' && (document.getElementById('s10').value).toUpperCase()=='S' && (document.getElementById('i4').value).toUpperCase()=='C' &&
            (document.getElementById('k4').value).toUpperCase()=='N' && (document.getElementById('l4').value).toUpperCase()=='S' && (document.getElementById('n4').value).toUpperCase()=='L' &&
            (document.getElementById('o4').value).toUpperCase()=='T' && (document.getElementById('p4').value).toUpperCase()=='A' && (document.getElementById('q4').value).toUpperCase()=='P' &&
            (document.getElementById('r4').value).toUpperCase()=='R' && (document.getElementById('t4').value).toUpperCase()=='V' && (document.getElementById('u4').value).toUpperCase()=='I' &&
            (document.getElementById('v4').value).toUpperCase()=='A'){
            correcto.playclip();
            mensajeGeneral("Muy bien, has terminado el crucigrama correctamente");
            avanzar("diversidadColombia");
        }else{
            error.playclip();
            mensajeError("Recuerda que no has terminado la actividad");
            //avanzar("diversidadColombia");
        }  
    }
}



function navegacionMenu(pagina,tema){        
    posicionSecuencia= parseInt(pagina);
    secuenciaOva(tema);    
} 


/**
* Abre un fancybox en especifico del subtema de conectores
* 
* 
* @return {String} Nothing.
*/

function abrirTema(id,tema){    
    posicionSecuencia= parseInt(id);
    secuenciaOva(tema);   
} 


function abrirSubTema(id){       
    $.fancybox({
        'showCloseButton': false,
        'transitionIn': 'fade',
        'hideOnOverlayClick':false, //bloquear click externo
        'scrolling': 'no',
        'href': '#div'+id+'diversidadColombia',
        'onComplete':function () {  
            
        },
        'onClosed': function () {            
            
        }
    });
}


function reproducirAudio(id){    
    try{
        document.getElementById(id).load();
        document.getElementById(id).play();    
    }catch(elError){
        
    }
}

function continuarAudio(id){    
    try{        
        document.getElementById(id).play();    
    }catch(elError){
        
    }
}


function detenerAudio(id){    
    document.getElementById(id).pause();    
}






