
/**
 * Función que se ejecuta al arrastrar el elemento. 
 **/
function start(e) {
    e.dataTransfer.effecAllowed = 'move'; // Define el efecto como mover (Es el por defecto)
    e.dataTransfer.setData("Text", e.target.id); // Coje el elemento que se va a mover
    e.target.style.opacity = '0.4';
}

/**
 * Función que se ejecuta se termina de arrastrar el elemento. 
 **/
function end(e) {
    e.target.style.opacity = ''; // Restaura la opacidad del elemento			
    e.dataTransfer.clearData("Data");
}

/**
 * Función que se ejecuta cuando un elemento arrastrable entra en el elemento desde del que se llama. 
 **/
function enter(e) {
    return true;
}

/**
 * Función que se ejecuta cuando un elemento arrastrable esta sobre el elemento desde del que se llama. 
 * Devuelve false si el objeto se puede soltar en ese elemento y true en caso contrario.
 **/
function over(e) {
    
    //    alert(e.target.className);
    
    if (  (e.target.className == "contenedorPiezaEvaluacion") || (e.target.className == "contenedorPiezaJuego02") || (e.target.className == "contenedorPieza") || (e.target.className == "contenedorPiezaJuego03") || (e.target.id == "contenedoresJuego01") || (e.target.id == "contenedoresJuego02") || (e.target.id == "contenedoresJuego03") )
        return false;
    else
        return true;
}

/**
 * Muestra un mensaje de advertencia si el navegador no soporta Drag & Drop. (En Windows no lo soportan ni IE ni Safari)
 **/
function comprobarnavegador() {
    if (
        (navigator.userAgent.toLowerCase().indexOf('msie ') > -1) ||
        ((navigator.userAgent.toLowerCase().indexOf('safari') > -1) && (navigator.userAgent.toLowerCase().indexOf('chrome') == -1)))
        {
        alert("Tu navegador no soporta correctamente las funciones Drag & Drop de HTML5. Prueba con otro navegador.");
    }

}



/*******************************************/
/*******************************************/
/**************ACCIONES POR OVA*************/
/*******************************************/
/*******************************************/


/**********************CONJUNTOS JUEGO 01******************************/



/**
 * Función que se ejecuta cuando un elemento arrastrable se suelta sobre el elemento desde del que se llama. 
 **/
function dropEtnoeducacion(e, numeroJuego) {
    e.preventDefault(); // Evita que se ejecute la accion por defecto del elemento soltado.
    var elementoArrastrado = e.dataTransfer.getData("Text");
    e.target.appendChild(document.getElementById(elementoArrastrado)); // Coloca el elemento soltado sobre el elemento desde el que se llamo esta funcion

    switch (numeroJuego) {
        case 1:
            comprobarPuzzleConjuntosJuegoUno(1);
            break;

        case 2:
            comprobarPuzzleConjuntosJuegoDos(1);
            break;
            
        case 3:
            comprobarPuzzleDiversidadColombiaEvaluacion(1);
            break;
    }
}



/**
 * Comprueba si el puzzle se ha completado correctamente
 *  
 * @return {String} Mensaje informando que completo del rompecabezas.
 */
function comprobarPuzzleConjuntosJuegoUno(tipo) {
    if (tipo == 1) {
        if ((document.getElementById('pieza6ConjuntosJuegoUno').parentNode.id == 'unoConjuntosJuegoUno') &&
            (document.getElementById('pieza7ConjuntosJuegoUno').parentNode.id == 'dosConjuntosJuegoUno') &&
            (document.getElementById('pieza8ConjuntosJuegoUno').parentNode.id == 'tresConjuntosJuegoUno') &&
            (document.getElementById('pieza3ConjuntosJuegoUno').parentNode.id == 'cuatroConjuntosJuegoUno') &&
            (document.getElementById('pieza2ConjuntosJuegoUno').parentNode.id == 'cincoConjuntosJuegoUno') &&
            (document.getElementById('pieza5ConjuntosJuegoUno').parentNode.id == 'seisConjuntosJuegoUno') &&
            (document.getElementById('pieza1ConjuntosJuegoUno').parentNode.id == 'sieteConjuntosJuegoUno') &&
            (document.getElementById('pieza4ConjuntosJuegoUno').parentNode.id == 'ochoConjuntosJuegoUno'))

            {
            mensajeGeneral('Muy Bien. Ahora vamos a ver la ubicación geográfica de las poblaciones étnicas en Colombia.');
            correcto.playclip();
        }
    } else {
        if ((document.getElementById('pieza6ConjuntosJuegoUno').parentNode.id == 'unoConjuntosJuegoUno') &&
            (document.getElementById('pieza7ConjuntosJuegoUno').parentNode.id == 'dosConjuntosJuegoUno') &&
            (document.getElementById('pieza8ConjuntosJuegoUno').parentNode.id == 'tresConjuntosJuegoUno') &&
            (document.getElementById('pieza3ConjuntosJuegoUno').parentNode.id == 'cuatroConjuntosJuegoUno') &&
            (document.getElementById('pieza2ConjuntosJuegoUno').parentNode.id == 'cincoConjuntosJuegoUno') &&
            (document.getElementById('pieza5ConjuntosJuegoUno').parentNode.id == 'seisConjuntosJuegoUno') &&
            (document.getElementById('pieza1ConjuntosJuegoUno').parentNode.id == 'sieteConjuntosJuegoUno') &&
            (document.getElementById('pieza4ConjuntosJuegoUno').parentNode.id == 'ochoConjuntosJuegoUno'))

            {
            mensajeGeneral('Muy Bien. Ahora vamos a ver la ubicación geográfica de las poblaciones étnicas en Colombia.');
            avanzar('diversidadColombia');
        } else {
            mensajeGeneral('Inténtalo de nuevo. Recuerda que cada población conserva unas fechas y acontecimientos propios, que son los que mantienen su memoria viva. ');
            error.playclip();
        }
    }
}









function comprobarPuzzleConjuntosJuegoDos(tipo) {
    //alert(tipo);
    if (tipo == 1) {
        if ((document.getElementById('pieza5ConjuntosJuegoDos').parentNode.id == 'unoConjuntosJuegoDos') &&
            (document.getElementById('pieza4ConjuntosJuegoDos').parentNode.id == 'dosConjuntosJuegoDos') &&
            (document.getElementById('pieza6ConjuntosJuegoDos').parentNode.id == 'tresConjuntosJuegoDos') &&
            ((document.getElementById('pieza1ConjuntosJuegoDos').parentNode.id == 'cuatroConjuntosJuegoDos') || (document.getElementById('pieza1ConjuntosJuegoDos').parentNode.id == 'cincoConjuntosJuegoDos')) &&
            ((document.getElementById('pieza9ConjuntosJuegoDos').parentNode.id == 'cuatroConjuntosJuegoDos') || (document.getElementById('pieza9ConjuntosJuegoDos').parentNode.id == 'cincoConjuntosJuegoDos')) &&
            (document.getElementById('pieza3ConjuntosJuegoDos').parentNode.id == 'seisConjuntosJuegoDos') &&
            (document.getElementById('pieza7ConjuntosJuegoDos').parentNode.id == 'sieteConjuntosJuegoDos') &&
            (document.getElementById('pieza8ConjuntosJuegoDos').parentNode.id == 'ochoConjuntosJuegoDos') &&
            (document.getElementById('pieza2ConjuntosJuegoDos').parentNode.id == 'nueveConjuntosJuegoDos')) {

            mensajeGeneral('Muy Bien has terminado la actividad satisfactoriamente.');
            correcto.playclip();
        }
    }else{
        
        if ((document.getElementById('pieza5ConjuntosJuegoDos').parentNode.id == 'unoConjuntosJuegoDos') &&
            (document.getElementById('pieza4ConjuntosJuegoDos').parentNode.id == 'dosConjuntosJuegoDos') &&
            (document.getElementById('pieza6ConjuntosJuegoDos').parentNode.id == 'tresConjuntosJuegoDos') &&
            ((document.getElementById('pieza1ConjuntosJuegoDos').parentNode.id == 'cuatroConjuntosJuegoDos') || (document.getElementById('pieza1ConjuntosJuegoDos').parentNode.id == 'cincoConjuntosJuegoDos')) &&
            ((document.getElementById('pieza9ConjuntosJuegoDos').parentNode.id == 'cuatroConjuntosJuegoDos') || (document.getElementById('pieza9ConjuntosJuegoDos').parentNode.id == 'cincoConjuntosJuegoDos')) &&
            (document.getElementById('pieza3ConjuntosJuegoDos').parentNode.id == 'seisConjuntosJuegoDos') &&
            (document.getElementById('pieza7ConjuntosJuegoDos').parentNode.id == 'sieteConjuntosJuegoDos') &&
            (document.getElementById('pieza8ConjuntosJuegoDos').parentNode.id == 'ochoConjuntosJuegoDos') &&
            (document.getElementById('pieza2ConjuntosJuegoDos').parentNode.id == 'nueveConjuntosJuegoDos')) {

            mensajeGeneral('Muy Bien has terminado la actividad satisfactoriamente.');
            avanzar('diversidadColombia');
            correcto.playclip();
        }else{
            mensajeError('Recuerda que no has terminado la actividad')
            error.playclip();            
        }
    }
}






function comprobarPuzzleDiversidadColombiaEvaluacion(tipo) {    
    if (tipo == 1) {
        if ((document.getElementById('pieza10DiversidadColombiaEvaluacion').parentNode.id == 'diesiceisDiversidadColombiaEvaluacion') &&
            (document.getElementById('pieza11DiversidadColombiaEvaluacion').parentNode.id == 'onceDiversidadColombiaEvaluacion') &&
            (document.getElementById('pieza15DiversidadColombiaEvaluacion').parentNode.id == 'nueveDiversidadColombiaEvaluacion') &&
            (document.getElementById('pieza16DiversidadColombiaEvaluacion').parentNode.id == 'diezDiversidadColombiaEvaluacion') &&
            (document.getElementById('pieza14DiversidadColombiaEvaluacion').parentNode.id == 'treceDiversidadColombiaEvaluacion') &&
            (document.getElementById('pieza9DiversidadColombiaEvaluacion').parentNode.id == 'catorceDiversidadColombiaEvaluacion') &&
            (document.getElementById('pieza12DiversidadColombiaEvaluacion').parentNode.id == 'doceDiversidadColombiaEvaluacion') &&
            (document.getElementById('pieza13DiversidadColombiaEvaluacion').parentNode.id == 'quinceDiversidadColombiaEvaluacion')
            ) {

            mensajeGeneral('Muy Bien has terminado la actividad satisfactoriamente.');
            correcto.playclip();
        }
    }else{
        if ((document.getElementById('pieza10DiversidadColombiaEvaluacion').parentNode.id == 'diesiceisDiversidadColombiaEvaluacion') &&
            (document.getElementById('pieza11DiversidadColombiaEvaluacion').parentNode.id == 'onceDiversidadColombiaEvaluacion') &&
            (document.getElementById('pieza15DiversidadColombiaEvaluacion').parentNode.id == 'nueveDiversidadColombiaEvaluacion') &&
            (document.getElementById('pieza16DiversidadColombiaEvaluacion').parentNode.id == 'diezDiversidadColombiaEvaluacion') &&
            (document.getElementById('pieza14DiversidadColombiaEvaluacion').parentNode.id == 'treceDiversidadColombiaEvaluacion') &&
            (document.getElementById('pieza9DiversidadColombiaEvaluacion').parentNode.id == 'catorceDiversidadColombiaEvaluacion') &&
            (document.getElementById('pieza12DiversidadColombiaEvaluacion').parentNode.id == 'doceDiversidadColombiaEvaluacion') &&
            (document.getElementById('pieza13DiversidadColombiaEvaluacion').parentNode.id == 'quinceDiversidadColombiaEvaluacion')
            ) {

            mensajeGeneral('Muy Bien has terminado la actividad satisfactoriamente.');
            avanzar('diversidadColombia');
            correcto.playclip();
        }else{
            mensajeGeneral('Recuerda que no has terminado la actividad.');
            error.playclip();
        }
    }
}



