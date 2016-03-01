var posicionSecuencia = parseInt(1);//maneja la posicion de la secuancia de la ova
var limiteOva; // almacena cuantos niveles de navegacion tiene la ova
var script = document.createElement('script');
var head = document.getElementsByTagName('head').item(0);

$(document).ready(function() {

});



/**
 * Carga el script respectivo de la ova
 * 
 * @param {String} tema : El tema de la ova que se va a buscar
 * @return {String} Nothing.
 */
function cargarScript(tema) {

    switch (tema) {
        case "diversidadColombia":
            script.src = 'Vista/js/ovas/diversidadColombia.js';
            script.type = 'text/javascript';
            script.defer = true;
            script.id = 'scriptID'; // Esto es para poder borrar el objeto despues for removal
            // Ahora se inserta el objeto creado en el elemento HEAD del html                        
            head.appendChild(script);
            break;
    }
    calcularLimite(tema);
}


/**
 * Restablece la posicion del nivel de navegacion de una ova, ademas quita el script de dicha ova
 * 
 * 
 * @return {String} Nothing.
 */
function cerrar() {
    //posicionSecuencia=parseInt(1);
    var old = document.getElementById('scriptID');
    if (old)
        head.removeChild(old);
}




/**
 * Calcula cuantas paginas hay de la ova
 * 
 * @param {String} tema : El tema de la ova que se va a buscar
 * @return {String} Nothing.
 */
function calcularLimite(tema) {
    var cont = 1;

    try {
        while (cont < 100) {
            myvar = document.getElementById('div' + cont + tema).value;
            cont++;
        }
    } catch (elError) {
        limiteOva = --cont;
        //alert(limiteOva);
        secuenciaOva(tema);
    }
}




/**
 * Define cual es la siguiente pagina a la cual debemos avanzar
 * 
 * @param {String} tema : el numero de la imagen que debe mostrar.
 * @return {String} Nothing.
 */
function avanzar(tema) {
    if (posicionSecuencia < limiteOva) {
        posicionSecuencia++;
    } else {
        apprise('Hasta la proxima!!!', {
            'animate': true
        });
        $.fancybox.close();
        posicionSecuencia = parseInt(1);
    }
    secuenciaOva(tema);
}

/**
 * Define cual es la anterior pagina a la cual debemos avanzar
 * 
 * @param {String} tema : el numero de la imagen que debe mostrar.
 * @return {String} Nothing.
 */
function retroceder(tema) {
    if (posicionSecuencia > 1) {
        posicionSecuencia--;
        secuenciaOva(tema);
    } else {
        $.fancybox.close();
    }

}


/**
 * Abre una determinada pagina de una ova, segun el tema y la pagina en la que se encuentre.
 * 
 * @param {String} tema : El tema de la OVA que se ha seleccionado.
 * @return {String} Nothing.
 */
function secuenciaOva(tema) {

    switch (tema) {

        case "diversidadColombia":

            switch (posicionSecuencia) {
                case 1:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {

                        },
                        'onClosed': function() {
                            cerrar();
                        }

                    });
                    break;


                case 2:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {
                            startAnimacionIniciodiversidadColombia();
                            //                            reproducirAudio('audioBienvenida');
                        },
                        'onClosed': function() {
                            stopAnimacionIniciodiversidadColombia();
                            //                            detenerAudio('audioBienvenida');
                            cerrar();
                        }
                    });
                    break;

                case 3:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {
                        },
                        'onClosed': function() {
                            cerrar();
                        }

                    });
                    break;


                case 4:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {
                            //                            reproducirAudio('audio2Organica');
                        },
                        'onClosed': function() {
                            //                            detenerAudio('audio2Organica');
                            cerrar();
                        }

                    });
                    break;


                case 5:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {
                        },
                        'onClosed': function() {
                            cerrar();
                        }

                    });
                    break;



                case 6:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {
                            //                            reproducirAudio('audio3Organica');
                        },
                        'onClosed': function() {
                            //                            detenerAudio('audio3Organica');
                            cerrar();
                        }

                    });
                    break;


                case 7:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {
                            detenerAudio('audio1diversidadColombia');
                        },
                        'onClosed': function() {
                            cerrar();
                        }

                    });
                    break;


                case 8:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {
                            reproducirAudio('audio1diversidadColombia');

                            $('.secuencia1img1').css('display', 'none');
                            $('.secuencia1img2').css('display', 'none');
                            $('.secuencia1img3').css('display', 'none');

                            setTimeout(verSecuencia, 1000, 'secuencia1img1');
                            setTimeout(verSecuencia, 5000, 'secuencia1img2');
                            setTimeout(verSecuencia, 10000, 'secuencia1img3');

                        },
                        'onClosed': function() {
                            cerrar();
                        }

                    });
                    break;



                case 9:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {
                            continuarAudio('audio1diversidadColombia');
                            $('.poema1sec2img1').css('display', 'none');
                            $('.poema1sec2img2').css('display', 'none');
                            $('.poema1sec2img3').css('display', 'none');
                            $('.poema1sec2img4').css('display', 'none');
                            $('.poema1sec2img5').css('display', 'none');
                            $('.poema1sec2img6').css('display', 'none');
                            $('.poema1sec2img7').css('display', 'none');

                            setTimeout(verSecuencia, 1000, 'poema1sec2img1');
                            setTimeout(verSecuencia, 5000, 'poema1sec2img2');
                            setTimeout(verSecuencia, 10000, 'poema1sec2img3');
                            setTimeout(verSecuencia, 15000, 'poema1sec2img4');
                            setTimeout(verSecuencia, 20000, 'poema1sec2img5');
                            setTimeout(verSecuencia, 25000, 'poema1sec2img6');
                            setTimeout(verSecuencia, 30000, 'poema1sec2img7');


                            detenerAudio('audio2diversidadColombia');

                        },
                        'onClosed': function() {
                            //                            detenerAudio('audio6Organica');
                            cerrar();
                        }
                    });
                    break;



                case 10:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {
                            detenerAudio('audio1diversidadColombia');
                            reproducirAudio('audio2diversidadColombia');

                            $('.secuencia2img1').css('display', 'none');
                            $('.secuencia2img2').css('display', 'none');
                            $('.secuencia2img3').css('display', 'none');

                            setTimeout(verSecuencia, 1000, 'secuencia2img1');
                            setTimeout(verSecuencia, 5000, 'secuencia2img2');
                            setTimeout(verSecuencia, 10000, 'secuencia2img3');

                        },
                        'onClosed': function() {
                            cerrar();
                        }

                    });
                    break;




                case 11:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {
                            continuarAudio('audio2diversidadColombia');
                            $('.poema2sec2img1').css('display', 'none');
                            $('.poema2sec2img2').css('display', 'none');
                            $('.poema2sec2img3').css('display', 'none');
                            $('.poema2sec2img4').css('display', 'none');
                            $('.poema2sec2img5').css('display', 'none');
                            $('.poema2sec2img6').css('display', 'none');
                            $('.poema2sec2img7').css('display', 'none');
                            $('.poema2sec2img8').css('display', 'none');
                            $('.poema2sec2img9').css('display', 'none');
                            $('.poema2sec2img10').css('display', 'none');
                            $('.poema2sec2img11').css('display', 'none');

                            setTimeout(verSecuencia, 1000, 'poema2sec2img1');
                            setTimeout(verSecuencia, 5000, 'poema2sec2img2');
                            setTimeout(verSecuencia, 10000, 'poema2sec2img3');
                            setTimeout(verSecuencia, 15000, 'poema2sec2img4');
                            setTimeout(verSecuencia, 20000, 'poema2sec2img5');
                            setTimeout(verSecuencia, 25000, 'poema2sec2img6');
                            setTimeout(verSecuencia, 30000, 'poema2sec2img7');
                            setTimeout(verSecuencia, 35000, 'poema2sec2img8');
                            setTimeout(verSecuencia, 40000, 'poema2sec2img9');
                            setTimeout(verSecuencia, 45000, 'poema2sec2img10');
                            setTimeout(verSecuencia, 50000, 'poema2sec2img11');
                            detenerAudio('audio3diversidadColombia');
                        },
                        'onClosed': function() {
                            //                            detenerAudio('audio6Organica');
                            cerrar();
                        }
                    });
                    break;



                case 12:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {
                            reproducirAudio('audio3diversidadColombia');
                            detenerAudio('audio2diversidadColombia');

                            $('.secuencia3img1').css('display', 'none');
                            $('.secuencia3img2').css('display', 'none');
                            $('.secuencia3img3').css('display', 'none');

                            setTimeout(verSecuencia, 1000, 'secuencia3img1');
                            setTimeout(verSecuencia, 5000, 'secuencia3img2');
                            setTimeout(verSecuencia, 10000, 'secuencia3img3');

                        },
                        'onClosed': function() {

                            cerrar();
                        }

                    });
                    break;



                case 13:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {
                            continuarAudio('audio3diversidadColombia');
                            $('.poema3sec2img1').css('display', 'none');
                            $('.poema3sec2img2').css('display', 'none');
                            $('.poema3sec2img3').css('display', 'none');
                            $('.poema3sec2img4').css('display', 'none');
                            $('.poema3sec2img5').css('display', 'none');
                            $('.poema3sec2img6').css('display', 'none');
                            $('.poema3sec2img7').css('display', 'none');

                            setTimeout(verSecuencia, 1000, 'poema3sec2img1');
                            setTimeout(verSecuencia, 5000, 'poema3sec2img2');
                            setTimeout(verSecuencia, 10000, 'poema3sec2img3');
                            setTimeout(verSecuencia, 15000, 'poema3sec2img4');
                            setTimeout(verSecuencia, 20000, 'poema3sec2img5');
                            setTimeout(verSecuencia, 25000, 'poema3sec2img6');
                            setTimeout(verSecuencia, 30000, 'poema3sec2img7');



                        },
                        'onClosed': function() {
                            //                            detenerAudio('audio6Organica');
                            cerrar();
                        }
                    });
                    break;




                case 14:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {
                            detenerAudio('audio3diversidadColombia');
                            //                            reproducirAudio('audio4Organica');
                        },
                        'onClosed': function() {
                            //                            detenerAudio('audio4Organica');
                            cerrar();
                        }

                    });
                    break;


                case 15:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {
                            //                            reproducirAudio('audio4Organica');
                        },
                        'onClosed': function() {
                            //                            detenerAudio('audio4Organica');
                            cerrar();
                        }

                    });
                    break;



                case 16:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {
                            //                            reproducirAudio('audio4Organica');
                        },
                        'onClosed': function() {
                            //                            detenerAudio('audio4Organica');
                            cerrar();
                        }

                    });
                    break;



                case 17:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {
                            //                            reproducirAudio('audio4Organica');
                        },
                        'onClosed': function() {
                            //                            detenerAudio('audio4Organica');
                            cerrar();
                        }

                    });
                    break;





                case 18:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {
                            //                            reproducirAudio('audio4Organica');
                        },
                        'onClosed': function() {
                            //                            detenerAudio('audio4Organica');
                            cerrar();
                        }

                    });
                    break;




                case 19:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {
                            $('.tema2sec1img1').css('display', 'none');
                            $('.tema2sec1img2').css('display', 'none');
                            $('.tema2sec1img3').css('display', 'none');
                            $('.tema2sec1img4').css('display', 'none');
                            $('.tema2sec1img5').css('display', 'none');
                            $('.tema2sec1img6').css('display', 'none');
                            $('.tema2sec1img7').css('display', 'none');

                            setTimeout(verSecuencia, 1000, 'tema2sec1img1');
                            setTimeout(verSecuencia, 5000, 'tema2sec1img2');
                            setTimeout(verSecuencia, 10000, 'tema2sec1img3');
                            setTimeout(verSecuencia, 15000, 'tema2sec1img4');
                            setTimeout(verSecuencia, 20000, 'tema2sec1img5');
                            setTimeout(verSecuencia, 25000, 'tema2sec1img6');
                            setTimeout(verSecuencia, 30000, 'tema2sec1img7');

                        },
                        'onClosed': function() {
                            //                            detenerAudio('audio6Organica');
                            cerrar();
                        }
                    });
                    break;



                case 20:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {
                            //                            reproducirAudio('audio4Organica');
                        },
                        'onClosed': function() {
                            //                            detenerAudio('audio4Organica');
                            cerrar();
                        }

                    });
                    break;




                case 21:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {
                            $('.tema2sec2img1').css('display', 'none');
                            $('.tema2sec2img2').css('display', 'none');
                            $('.tema2sec2img3').css('display', 'none');
                            $('.tema2sec2img4').css('display', 'none');
                            $('.tema2sec2img5').css('display', 'none');
                            $('.tema2sec2img6').css('display', 'none');
                            $('.tema2sec2img7').css('display', 'none');

                            setTimeout(verSecuencia, 1000, 'tema2sec2img1');
                            setTimeout(verSecuencia, 5000, 'tema2sec2img2');
                            setTimeout(verSecuencia, 10000, 'tema2sec2img3');
                            setTimeout(verSecuencia, 15000, 'tema2sec2img4');
                            setTimeout(verSecuencia, 20000, 'tema2sec2img5');
                            setTimeout(verSecuencia, 25000, 'tema2sec2img6');
                            setTimeout(verSecuencia, 30000, 'tema2sec2img7');

                        },
                        'onClosed': function() {
                            //                            detenerAudio('audio6Organica');
                            cerrar();
                        }
                    });
                    break;





                case 22:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {
                            //                            reproducirAudio('audio4Organica');
                        },
                        'onClosed': function() {
                            //                            detenerAudio('audio4Organica');
                            cerrar();
                        }

                    });
                    break;





                case 23:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {
                            $('.tema2sec3img1').css('display', 'none');
                            $('.tema2sec3img2').css('display', 'none');
                            $('.tema2sec3img3').css('display', 'none');
                            $('.tema2sec3img4').css('display', 'none');
                            $('.tema2sec3img5').css('display', 'none');

                            setTimeout(verSecuencia, 1000, 'tema2sec3img1');
                            setTimeout(verSecuencia, 5000, 'tema2sec3img2');
                            setTimeout(verSecuencia, 10000, 'tema2sec3img3');
                            setTimeout(verSecuencia, 15000, 'tema2sec3img4');
                            setTimeout(verSecuencia, 20000, 'tema2sec3img5');


                        },
                        'onClosed': function() {
                            //                            detenerAudio('audio6Organica');
                            cerrar();
                        }
                    });
                    break;



                case 24:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {
                            //                            reproducirAudio('audio4Organica');
                        },
                        'onClosed': function() {
                            //                            detenerAudio('audio4Organica');
                            cerrar();
                        }

                    });
                    break;




                case 25:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {
                            //                            reproducirAudio('audio4Organica');
                        },
                        'onClosed': function() {
                            //                            detenerAudio('audio4Organica');
                            cerrar();
                        }

                    });
                    break;



                case 26:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {
                            //                            reproducirAudio('audio4Organica');
                        },
                        'onClosed': function() {
                            //                            detenerAudio('audio4Organica');
                            cerrar();
                        }

                    });
                    break;



                case 27:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {
                            //                            reproducirAudio('audio4Organica');
                        },
                        'onClosed': function() {
                            //                            detenerAudio('audio4Organica');
                            cerrar();
                        }

                    });
                    break;



                case 28:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick': false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div' + posicionSecuencia + tema,
                        'onComplete': function() {
                            //                            reproducirAudio('audio4Organica');
                        },
                        'onClosed': function() {
                            //                            detenerAudio('audio4Organica');
                            cerrar();
                        }

                    });
                    break;
            }
    }
}







