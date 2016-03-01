<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


        <!--JAVASCRIPTS PROPIOS DE LA OVA-->
        <script type="text/javascript" src="Vista/js/ovaNavegacion.js"></script>  
        <script type="text/javascript" src="Vista/js/efectos/dragAndDrop.js"></script>          

        <title></title>      
    </head>
    <body>




        <!--OVA ETNOEDUCACION-->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->

        <!--PRIMER NIVEL-->
        <div style="display: none;">
            <div id="div1diversidadColombia" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>

                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">INFORMACIÓN OVA</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 


                        <tr>
                            <td colspan="3" width="100%">
                                <table width="100%" border="0">
                                    <tr>
                                        <td width="15%" colspan="1" class="alineacionIzquierda">
                                            <label class="subtituloDorado">TÍTULO:</label>
                                        </td>
                                        <td colspan="2" class="alineacionIzquierda">
                                            <label class="texto">La Diversidad en Colombia </label>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td colspan="1" class="alineacionIzquierda"> 
                                            <label class="subtituloDorado">DESCRIPCIÓN:</label>
                                        </td>
                                        <td colspan="2" class="alineacionIzquierda">
                                            <label class="texto"></label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="1" class="alineacionIzquierda"> 
                                            <label class="subtituloDorado">Idioma:</label>
                                        </td>
                                        <td colspan="2" class="alineacionIzquierda">
                                            <label class="texto">Español</label>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td colspan="1" class="alineacionIzquierda"> 
                                            <label class="subtituloDorado">Palabras Clave:</label>
                                        </td>
                                        <td colspan="2" class="alineacionIzquierda">
                                            <label class="texto">Diversidad, Pueblos, Etnias, Derechos, Memoria histórica, Alternativas.</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="1" class="alineacionIzquierda"> 
                                            <label class="subtituloDorado">Autor(a):</label>
                                        </td>
                                        <td colspan="2" class="alineacionIzquierda">
                                            <label class="texto">Erika Milena Muñoz Villarreal</label>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td colspan="1" class="alineacionIzquierda"> 
                                            <label class="subtituloDorado">Entidad:</label>
                                        </td>
                                        <td colspan="2" class="alineacionIzquierda">
                                            <label class="texto">Universidad de Caldas</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <br/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="linea" colspan="3">
                                            <label class="titulo">PROCESOS FORMATIVOS</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br/>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="1" class="alineacionIzquierda"> 
                                            <label class="subtituloDorado">Tipo:</label>
                                        </td>
                                        <td colspan="2" class="alineacionIzquierda">
                                            <label class="texto">Auto aprendizaje, presencial y semipresencial. </label>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td colspan="1" class="alineacionIzquierda"> 
                                            <label class="subtituloDorado">Tipo <br/> Interactividad:</label>
                                        </td>
                                        <td colspan="2" class="alineacionIzquierda">
                                            <label class="texto"> 
                                                Mixto</label>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td colspan="1" class="alineacionIzquierda"> 
                                            <label class="subtituloDorado">Recurso:</label>
                                        </td>
                                        <td colspan="2" class="alineacionIzquierda">
                                            <label class="texto">ejercicio, texto y autoevaluación.</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="1" class="alineacionIzquierda"> 
                                            <label class="subtituloDorado">Nivel <br/> Interactividad:</label>
                                        </td>
                                        <td colspan="2" class="alineacionIzquierda">
                                            <label class="texto">Medio</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="1" class="alineacionIzquierda"> 
                                            <label class="subtituloDorado">Población:</label>
                                        </td>
                                        <td colspan="2" class="alineacionIzquierda">
                                            <label class="texto">Estudiantes de primer y segundo semestre de la Universidad de Caldas.</label>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td colspan="1" class="alineacionIzquierda"> 
                                            <label class="subtituloDorado">Contexto:</label>
                                        </td>
                                        <td colspan="2" class="alineacionIzquierda">
                                            <label class="texto">Educación superior</label>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>




                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--SEGUNDO NIVEL-->
        <div style="display: none;">
            <div id="div2diversidadColombia" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">Bienvenido y Bienvenida</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -------------------------------------------------------------------
                            </td>
                        </tr> 




                        <tr>
                            <td colspan="3">
                                <img id="avatarBienvenidadiversidadColombia" src="Vista/imagenes/universo/diversidadColombia/AvatarDerecha.png" class="avatar"/>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>






        <!--TERCER NIVEL-->
        <div style="display: none;">
            <div id="div3diversidadColombia" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">OBJETIVOS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtituloDorado">
                                    Objetivo general
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="texto">
                                    Apropiar conocimientos en torno a la Diversidad Cultural de Colombia.
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtituloDorado">
                                    Objetivos específicos
                                </label>
                            </td>
                        </tr>

                        <tr>                            
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="texto">
                                    &nbsp;&nbsp;&nbsp;* Reconocer el contexto histórico, geográfico y normativo en el que se manifiesta la diversidad étnica en Colombia. <br/>
                                    &nbsp;&nbsp;&nbsp;* Identificar las alternativas de vida que recrean los grupos étnicos ante los diversos conflictos que afrontan.<br/>
                                </label>                                                                
                            </td>
                        </tr>

<!--                        <tr>
                            <td colspan="3">
                                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10.0.0.0" width="550" height="400">
                                    <param name="movie" value="archivoflash.swf" />
                                    <param name="quality" value="high" />
                                    <embed src="Vista/flash/animacion1.swf" quality="high" type="application/x-shockwave-flash" width="350" height="100" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
                                </object>
                            </td>
                        </tr>-->

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div4diversidadColombia" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">¿Qué sabes sobre las poblaciones diversas del país?</span>
                            </td>    
                            <td>
                                <img onclick="calificarTestdiversidadColombia(1);
                                    clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>   


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>   

                        <tr>
                            <td class="alineacionCentro" colspan="3">
                                <label class="subtituloDorado">
                                    TEST DE SELECCIÓN MÚLTIPLE CON ÚNICA RESPUESTA
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtitulo">1.¿Cuáles son las poblaciones étnicas reconocidas por el Estado colombiano?</label>
                            </td>                            
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table class="alineacionIzquierda">
                                    <tr>
                                        <td>
                                            <input type="radio" name="testDivColPreg1" value="1">

                                            <label class="texto">A. Campesinado, indígenas, negritudes, mestizos, mulatos.</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="testDivColPreg1" value="2">
                                            <label class="texto">B. Blancos, negros, indios, campesinos.</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="testDivColPreg1" value="3">
                                            <label class="texto">C. Pueblos Originarios (Indígenas), Afrocolombianos (negros, palenqueros, raizales), Rom (gitanos).</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="testDivColPreg1" value="4">
                                            <label class="texto">D. Mulatos, Indígenas, Afrodescendientes y Mestizos.</label>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>



                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div5diversidadColombia" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">¿Qué sabes sobre las poblaciones diversas del país?</span>
                            </td>    
                            <td>
                                <img onclick="calificarTestdiversidadColombia(2);
                                    clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>   


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>   

                        <tr>
                            <td class="alineacionCentro" colspan="3">
                                <label class="subtituloDorado">
                                    TEST DE SELECCIÓN MULTIPLE CON UNICA RESPUESTA
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtitulo">2. ¿A partir de cuál acontecimiento se reconocen las comunidades étnicas en Colombia?</label>
                            </td>                            
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table class="alineacionIzquierda">
                                    <tr>
                                        <td>
                                            <input type="radio" name="testDivColPreg2" value="1">

                                            <label class="texto">A. La instauración de la Primera República, conocida como La Patria Boba (1810-1816).</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="testDivColPreg2" value="2">
                                            <label class="texto">B. La Constitución Política de Colombia de 1991.</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="testDivColPreg2" value="3">
                                            <label class="texto">C. La Constitución Política de Colombia de 1886.</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="testDivColPreg2" value="4">
                                            <label class="texto">D. La Declaratoria de Palenque de San Basilio como primer pueblo libre de América, en 1713.</label>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>



                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>





        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div6diversidadColombia" style="overflow: hidden;" class="ventanaSinFin">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo"></span>
                            </td>    
                            <td>
                                <img onclick="avanzar('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr> 

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>   

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img src="Vista/imagenes/universo/diversidadColombia/paralamemoria1.png" class="imagenOva"/>
                            </td>
                        </tr>                    

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div7diversidadColombia" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">Tema 1: MEMORIA HISTÓRICA</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    Según fechas de radiocarbono del Valle de Pubenza-Cauca, los primeros pobladores llegaron a América 20.000 años antes de la era común. <br/><br/>
                                    Antes de la invasión europea, América era denominada por sus habitantes como Abya Yala, tierra de sangre vital. Colombia, por su parte, se conocía como Caribá, ya que gran parte de sus pobladores eran del pueblo Caribe.<br/><br/>
                                    Un acontecimiento que marca la historia de este territorio de sangre vital es la invasión europea. Durante esta época surgen las categorías de “indígena”, “negro” y “gitano”. Y se crean nuevas relaciones sociales: colonizadores/colonizados, amos/esclavos.<br/><br/>                                    
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div8diversidadColombia" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">Espiral de los Pueblos Originarios</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td>
                                <audio id="audio1diversidadColombia" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaEtnoeducacion/Vista/audio/diversidadColombia/Track1.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  

                        <tr>
                            <td colspan="3">
                                <table width="100%">
                                    <tr>

                                        <td width="50%" class="alineacionCentro">
                                            <img class="imagenOvaSinEfecto" src="Vista/imagenes/universo/diversidadColombia/poema1.png">
                                        </td>

                                        <td width="50%" class="alineacionCentro">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <img  onmouseover="mouseoversound.playclip();" class="secuencia1img1 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img  onmouseover="mouseoversound.playclip();" class="secuencia1img2 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                                    </td>
                                                </tr>                                                
                                                <tr>
                                                    <td>
                                                        <img  onmouseover="mouseoversound.playclip();" class="secuencia1img3 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                                    </td>
                                                </tr>
                                            </table>                                                                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <br/>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div9diversidadColombia" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">Espiral de los Pueblos Originarios</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>   



                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>       


                        <tr>
                            <td colspan="3" class="poema1">
                                <table width="100%" height="100%" border="0">
                                    <tr>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="poema1sec2img6 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="poema1sec2img7 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="poema1sec2img2 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="33%" height="33%">

                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="poema1sec2img1 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">

                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="poema1sec2img5 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="poema1sec2img4 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="poema1sec2img3 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div10diversidadColombia" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">el sonido del tambor</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td>
                                <audio id="audio2diversidadColombia" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaEtnoeducacion/Vista/audio/diversidadColombia/Track2.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  

                        <tr>
                            <td colspan="3">
                                <table width="100%">
                                    <tr>

                                        <td width="33%" class="alineacionCentro">
                                            <img  onmouseover="mouseoversound.playclip();" class="secuencia2img1 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>

                                        <td width="33%" class="alineacionCentro">
                                            <img class="imagenOvaSinEfecto" src="Vista/imagenes/universo/diversidadColombia/poema2.png">
                                        </td>

                                        <td width="33%">
                                            <table>                                              
                                                <tr>
                                                    <td>
                                                        <img onmouseover="mouseoversound.playclip();" class="secuencia2img2 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                                    </td>
                                                </tr>                                                
                                                <tr>
                                                    <td>
                                                        <img  onmouseover="mouseoversound.playclip();" class="secuencia2img3 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                                    </td>
                                                </tr>
                                            </table>                                                                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <br/>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div11diversidadColombia" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">El sonido del tambor</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>   



                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>                                           

                        <tr>
                            <td colspan="3" class="poema2">
                                <table width="100%" height="100%" border="0">
                                    <tr>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="poema2sec2img5 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="poema2sec2img8 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="poema2sec2img7 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="33%" height="33%">

                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="poema2sec2img6 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">

                                        </td>
                                    </tr>


                                    <tr>
                                        <td width="33%" height="33%">

                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="poema2sec2img1 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">

                                        </td>
                                    </tr>


                                    <tr>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="poema2sec2img4 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="poema2sec2img3 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="poema2sec2img2 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>





        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div12diversidadColombia" style="overflow: hidden;" class="ventana" width="1000px">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">El camino libertario</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td>
                                <audio id="audio3diversidadColombia" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaEtnoeducacion/Vista/audio/diversidadColombia/Track3.mp3">
                                </audio>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  

                        <tr>
                            <td colspan="3">
                                <table width="100%">
                                    <tr>

                                        <td width="50%" class="alineacionCentro">
                                            <img class="imagenOvaSinEfecto" src="Vista/imagenes/universo/diversidadColombia/poema3.png">
                                        </td>

                                        <td width="50%" height="50%" class="alineacionCentro">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <img  onmouseover="mouseoversound.playclip();" class="secuencia3img1 imagenOva" src="Vista/imagenes/secuenciacion/diversidadColombia/secuencia3img1.png">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img  onmouseover="mouseoversound.playclip();" class="secuencia3img2 imagenOva" src="Vista/imagenes/secuenciacion/diversidadColombia/secuencia3img2.png">
                                                    </td>
                                                </tr>                                                
                                                <tr>
                                                    <td>
                                                        <img  onmouseover="mouseoversound.playclip();" class="secuencia3img3 imagenOva" src="Vista/imagenes/secuenciacion/diversidadColombia/secuencia3img3.png">
                                                    </td>
                                                </tr>
                                            </table>                                                                                                
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <br/>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>






        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div13diversidadColombia" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">El camino libertario</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>   



                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>       


                        <tr>
                            <td colspan="3" class="poema3">
                                <table width="100%" height="100%" border="0">
                                    <tr>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="poema3sec2img5 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">

                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="poema3sec2img6 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="poema3sec2img4 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="poema3sec2img1 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="poema3sec2img7 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="poema3sec2img3 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">

                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="poema3sec2img2 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div14diversidadColombia" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">Actividad 1 <br/>
                                    Memoria histórica de las poblaciones diversas
                                </span>
                            </td>    
                            <td>
                                <img onclick="comprobarPuzzleConjuntosJuegoUno(2);                                    
                                    clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>                                           

                        <tr>
                            <td colspan="3" class="texto">
                                Arrastra la respuesta correcta debajo de la pregunta que corresponda. 
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" width="100%" height="100%">
                                <table border="0" class="fondoJuego01">
                                    <tr>
                                        <td class="alineacionVecticialAlInicio" width="40%" height="100%">                                            
                                            <table border="1" id="puzzle" class="estiloTabla">
                                                <tr>                                                    
                                                    <td width="25%" class="alineacionJustificafa">
                                                        <label class="textoNegro">
                                                            1.	¿Cómo nombraban los pueblos originarios el continente americano antes de la invasión europea? 
                                                        </label>
                                                    </td>

                                                    <td width="25%" class="alineacionJustificafa">
                                                        <label class="textoNegro">
                                                            2.	¿Qué acontecimiento se conmemora el 12 de octubre?
                                                        </label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div  class="contenedorPieza" id="unoConjuntosJuegoUno" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 1)">                                                
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div  class="contenedorPieza" id="dosConjuntosJuegoUno" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 1)">                                                
                                                        </div>
                                                    </td>
                                                </tr>


                                                <tr>                                                    
                                                    <td class="alineacionJustificafa">
                                                        <label class="textoNegro">
                                                            3.	¿De cuál continente es originario el Pueblo Rom?
                                                        </label>
                                                    </td>

                                                    <td class="alineacionJustificafa">
                                                        <label class="textoNegro">
                                                            4.	¿En qué fecha se constituyen los Resguardos?
                                                        </label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div  class="contenedorPieza" id="tresConjuntosJuegoUno" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 1)">                                                
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div  class="contenedorPieza" id="cuatroConjuntosJuegoUno" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 1)">                                                
                                                        </div>
                                                    </td>
                                                </tr>


                                                <tr>                                                    
                                                    <td class="alineacionJustificafa">
                                                        <label class="textoNegro">
                                                            5.	Qué acontecimiento se conmemora el 08 de abril?
                                                        </label>
                                                    </td>

                                                    <td class="alineacionJustificafa">
                                                        <label class="textoNegro">
                                                            6.	¿Qué grupos componen el pueblo Afrocolombiano? 
                                                        </label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div  class="contenedorPieza" id="cincoConjuntosJuegoUno" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 1)">                                                
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div  class="contenedorPieza" id="seisConjuntosJuegoUno" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 1)">                                                
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>                                                    
                                                    <td class="alineacionJustificafa">
                                                        <label class="textoNegro">
                                                            7.	¿En qué fecha se declara el Palenque de San Basilio como primer Pueblo libre de América? 
                                                        </label>
                                                    </td>

                                                    <td class="alineacionJustificafa">
                                                        <label class="textoNegro">
                                                            8.	¿Qué acontecimiento se conmemora el 21 de mayo?
                                                        </label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div  class="contenedorPieza" id="sieteConjuntosJuegoUno" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 1)">                                                
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div  class="contenedorPieza" id="ochoConjuntosJuegoUno" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 1)">                                                
                                                        </div>
                                                    </td>
                                                </tr>

                                            </table>                                            
                                        </td>



                                        <td colspan="2" width="60%" height="100%" class="alineacionVerticalCentro">
                                            <table width="100%" height="100%" border="0">  
                                                <tr>
                                                    <td width="100%" height="100%">
                                                        <div id="contenedoresJuego01" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 1)">                                                                                                            
                                                            <img width="200px" onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza1ConjuntosJuegoUno" src="Vista/imagenes/juegos/diversidadColombia/actividad01/1.png" alt="pieza1ConjuntosJuegoUno" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img width="200px" onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza2ConjuntosJuegoUno" src="Vista/imagenes/juegos/diversidadColombia/actividad01/2.png" alt="pieza2ConjuntosJuegoUno" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                                                                                                                                
                                                            <img width="200px" onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza3ConjuntosJuegoUno" src="Vista/imagenes/juegos/diversidadColombia/actividad01/3.png" alt="pieza3ConjuntosJuegoUno" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                
                                                            <img width="200px" onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza4ConjuntosJuegoUno" src="Vista/imagenes/juegos/diversidadColombia/actividad01/4.png" alt="pieza4ConjuntosJuegoUno" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                            
                                                            <img width="200px" onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza5ConjuntosJuegoUno" src="Vista/imagenes/juegos/diversidadColombia/actividad01/5.png" alt="pieza5ConjuntosJuegoUno" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img width="200px" onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza6ConjuntosJuegoUno" src="Vista/imagenes/juegos/diversidadColombia/actividad01/6.png" alt="pieza6ConjuntosJuegoUno" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                                                                                                                                
                                                            <img width="200px" onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza7ConjuntosJuegoUno" src="Vista/imagenes/juegos/diversidadColombia/actividad01/7.png" alt="pieza7ConjuntosJuegoUno" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                
                                                            <img width="200px" onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza8ConjuntosJuegoUno" src="Vista/imagenes/juegos/diversidadColombia/actividad01/8.png" alt="pieza8ConjuntosJuegoUno" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                            
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>                            
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div15diversidadColombia" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">Tema 2. CARTOGRAFÍA DE LAS POBLACIONES ÉTNICAS<br/>
                                    Pueblos originarios
                                </span>
                            </td>    
                            <td>
                                <img onclick="avanzar('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>    


                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    Según el último Censo realizado por el DANE en 2005, en Colombia habitan aproximadamente 1.400.000 indígenas.  Se reconocen 87 pueblos originarios, 64 lenguas amerindias, 13 familias lingüísticas, 710 resguardos titulados en 27 departamentos y 228 municipios. No obstante, la Organización Nacional Indígena de Colombia (ONIC) sostiene que en Colombia existen 102 pueblos originarios. 
                                    De esta manera, el 29.8% de territorio nacional lo habitan comunidades indígenas, lo que representa un 3.43% de total de la población colombiana. 
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                                <br/>
                            </td>
                        </tr>



                        <tr>
                            <td colspan="3">
                                <img onmouseover="mouseoversound.playclip();" class="imagenOva" src="Vista/imagenes/universo/diversidadColombia/mapaIndigena.jpg">
                            </td>
                        </tr>


                        <tr>
                            <td class="alineacionDerecha" colspan="3">
                                <label class="textoNegro">
                                    Fuente: Cruz, A. (2010). Pueblos originarios de América.
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>





        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div16diversidadColombia" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">Afrocolombianos
                                </span>
                            </td>    
                            <td>
                                <img onclick="avanzar('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>    


                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    En Colombia existen 132 territorios colectivos titulados para Comunidades Negras. Lo que representa un 4.13% del territorio nacional. La población afrocolombiana representa el 10.62% del total de la población nacional. 
                                    La población afrocolombiana se ubica, principalmente, en el corredor del pacífico colombiano, los raizales en el Archipiélago de San Andrés Providencia y Santa Catalina, los palenqueros en la comunidad de San Basilio de Palenque y otros residen en las cabeceras municipales o en las grandes ciudades.
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                                <br/>
                            </td>
                        </tr>



                        <tr>
                            <td colspan="3">
                                <img onmouseover="mouseoversound.playclip();" class="imagenOva" src="Vista/imagenes/universo/diversidadColombia/mapaAfro.jpg">
                            </td>
                        </tr>


                        <tr>
                            <td class="alineacionDerecha" colspan="3">
                                <label class="textoNegro">
                                    Fuente: Censo General 2005; Marco Geoestadístico Nacional, 2004.
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>







        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div17diversidadColombia" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">Pueblo Rom
                                </span>
                            </td>    
                            <td>
                                <img onclick="avanzar('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>    


                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    El pueblo Rrom se organiza en comunidades comunitarias llamadas kumpanias. Su población representa el 0.01% del total de la población colombiana. Las principales kumpanias del país se encuentran en Cúcuta, Girón, Bogotá D.C., Cartagena, Cali, Envigado, Sampués, San Pelayo y Fusagasuga. 
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                                <br/>
                            </td>
                        </tr>



                        <tr>
                            <td colspan="3">
                                <img onmouseover="mouseoversound.playclip();" class="imagenOva" src="Vista/imagenes/universo/diversidadColombia/mapaRom.jpg">
                            </td>
                        </tr>



                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>






        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div18diversidadColombia" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">Actividad 2 <br/>
                                    Cartografía del origen étnico de los estudiantes de la Universidad de Caldas.
                                </span>
                            </td>    
                            <td>
                                <img onclick="comprobarPuzzleConjuntosJuegoDos(2);                                    
                                    clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>                                           

                        <tr>
                            <td colspan="3" class="texto">
                                En este mapa de Colombia, ubicarás los distintos grupos étnicos de donde provienen algunos y algunas estudiantes de la Universidad de Caldas.
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" width="100%" height="100%">
                                <table border="0" class="fondoJuego02">
                                    <tr>
                                        <td width="85%" height="100%">                                            
                                            <table width="100%" border="0">                                               

                                                <tr>
                                                    <td width="175px" height="175px">

                                                    </td>

                                                    <td width="175px" height="175px">

                                                    </td>
                                                    <td width="175px" height="175px">

                                                    </td>

                                                    <td width="175px" height="175px">

                                                    </td>

                                                    <td width="175px" height="175px">

                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaJuego02" id="unoConjuntosJuegoDos" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 2)">                                                
                                                        </div>
                                                    </td>

                                                    <td>

                                                    </td>


                                                    <td>

                                                    </td>


                                                </tr>




                                                <tr>
                                                    <td>

                                                    </td>

                                                    <td>
                                                        <div  class="contenedorPiezaJuego02" id="dosConjuntosJuegoDos" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 2)">                                                
                                                        </div>
                                                    </td>
                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                </tr>


                                                <tr>
                                                    <td>

                                                    </td>

                                                    <td>
                                                        <div  class="contenedorPiezaJuego02" id="tresConjuntosJuegoDos" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 2)">                                                
                                                        </div>
                                                    </td>
                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                </tr>


                                                <tr>
                                                    <td>
                                                        <div  class="contenedorPiezaJuego02" id="cuatroConjuntosJuegoDos" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 2)">                                                
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div  class="contenedorPiezaJuego02" id="cincoConjuntosJuegoDos" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 2)">                                                
                                                        </div>
                                                    </td>
                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                </tr>



                                                <tr>
                                                    <td>
                                                        <div  class="contenedorPiezaJuego02" id="seisConjuntosJuegoDos" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 2)">                                                
                                                        </div>
                                                    </td>

                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>

                                                    <td>
                                                        <div  class="contenedorPiezaJuego02" id="sieteConjuntosJuegoDos" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 2);">                                                
                                                        </div>
                                                    </td>

                                                    <td>

                                                    </td>

                                                </tr>


                                                <tr>
                                                    <td>

                                                    </td>

                                                    <td>
                                                        <div  class="contenedorPiezaJuego02" id="ochoConjuntosJuegoDos" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 2)">                                                
                                                        </div>
                                                    </td>
                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>


                                                    <td>

                                                    </td>

                                                </tr>

                                                <tr>
                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaJuego02" id="nueveConjuntosJuegoDos" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 2)">                                                
                                                        </div>
                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                </tr>


                                                <tr>
                                                    <td width="175px" height="175px">

                                                    </td>

                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>
                                                        <div style="width: 175px; height: 175px" >                                                
                                                        </div>
                                                    </td>

                                                </tr>

                                            </table>                                            
                                        </td>


                                        <td colspan="2" width="15%" height="100%" class="alineacionVecticialAlInicio">
                                            <table width="100%" height="100%" border="0" class="alineacionVecticialAlInicio">  
                                                <tr>
                                                    <td width="100%" height="100%" class="alineacionVerticalCentro">
                                                        <div class="alineacionVerticalCentro" id="contenedoresJuego02" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 2)">                                                                                                            
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza1ConjuntosJuegoDos" src="Vista/imagenes/juegos/diversidadColombia/actividad02/1.png" alt="pieza1ConjuntosJuegoDos" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza2ConjuntosJuegoDos" src="Vista/imagenes/juegos/diversidadColombia/actividad02/2.png" alt="pieza2ConjuntosJuegoDos" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                                                                                                                                
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza3ConjuntosJuegoDos" src="Vista/imagenes/juegos/diversidadColombia/actividad02/3.png" alt="pieza3ConjuntosJuegoDos" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza4ConjuntosJuegoDos" src="Vista/imagenes/juegos/diversidadColombia/actividad02/4.png" alt="pieza4ConjuntosJuegoDos" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                            
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza5ConjuntosJuegoDos" src="Vista/imagenes/juegos/diversidadColombia/actividad02/5.png" alt="pieza5ConjuntosJuegoDos" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza6ConjuntosJuegoDos" src="Vista/imagenes/juegos/diversidadColombia/actividad02/6.png" alt="pieza6ConjuntosJuegoDos" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                                                                                                                                
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza7ConjuntosJuegoDos" src="Vista/imagenes/juegos/diversidadColombia/actividad02/7.png" alt="pieza7ConjuntosJuegoDos" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza8ConjuntosJuegoDos" src="Vista/imagenes/juegos/diversidadColombia/actividad02/8.png" alt="pieza8ConjuntosJuegoDos" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                            
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza9ConjuntosJuegoDos" src="Vista/imagenes/juegos/diversidadColombia/actividad02/9.png" alt="pieza9ConjuntosJuegoDos" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                            
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>                            
                                        </td>
                                    </tr>

                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>








        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div19diversidadColombia" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">Tema 3. DERECHOS DE LOS PUEBLOS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 


                        <tr>
                            <td colspan="3">
                                <label class="titulo">Pueblos originarios</label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    A pesar que la Constitución del 1991 reconoce y brinda herramientas de protección a los Derechos de las poblaciones étnicas, las poblaciones continúan demandando mayores garantías y respeto a sus identidades culturales. 
                                    En esta sección, encontrarás las disposiciones normativas y constitucionales que amparan a las comunidades étnicas. También escucharás, desde las voces de las mismas comunidades, la percepción que tienen sobre el estado actual de sus derechos. 
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="tema2Sec1">
                                <table width="100%" height="100%" border="0">
                                    <tr>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="tema2sec1img7 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="tema2sec1img2 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="tema2sec1img3 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="33%" height="33%">

                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="tema2sec1img1 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">

                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="tema2sec1img6 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="tema2sec1img4 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="tema2sec1img5 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div20diversidadColombia" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">Pueblos originarios</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  

                        <tr>
                            <td colspan="3">
                                <video poster controls width="600px" height="400px" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaEtnoeducacion/Vista/videos/diversidadColombia/video1.mp4" type="video/mp4">
                                </video>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro texto">
                                Fuente: Canal Youtube. Campaña pervivencia, ONIC.
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div21diversidadColombia" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">Afrocolombianos</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>



                        <tr>
                            <td colspan="3" class="tema2Sec2">
                                <table width="100%" height="100%" border="0">
                                    <tr>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="tema2sec2img7 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="tema2sec2img2 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="tema2sec2img3 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="33%" height="33%">

                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="tema2sec2img1 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">

                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="tema2sec2img6 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="tema2sec2img4 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="tema2sec2img5 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>





        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div22diversidadColombia" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">AFROCOLOMBIANOS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  

                        <tr>
                            <td colspan="3">
                                <video poster controls width="600px" height="400px" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaEtnoeducacion/Vista/videos/diversidadColombia/video2.mp4" type="video/mp4">
                                </video>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro texto">
                                Fuente: Canal youtube. Documental: Sin territorio no hay vida, Tikal producciones.
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>







        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div23diversidadColombia" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">Pueblo Rom</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>



                        <tr>
                            <td colspan="3" class="tema2Sec3">
                                <table width="100%" height="100%" border="0">
                                    <tr>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="tema2sec3img1 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="tema2sec3img2 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="tema2sec3img3 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="tema2sec3img4 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                        <td width="33%" height="33%">

                                        </td>
                                        <td width="33%" height="33%">
                                            <img  onmouseover="mouseoversound.playclip();" class="tema2sec3img5 imagenOva" src="Vista/imagenes/secuenciacion/blanco.png">
                                        </td>
                                    </tr>                                 
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>








        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div24diversidadColombia" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">Pueblo Rom</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  

                        <tr>
                            <td colspan="3">
                                <video poster controls width="600px" height="400px" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaEtnoeducacion/Vista/videos/diversidadColombia/video3.mp4" type="video/mp4">
                                </video>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro texto">
                                Fuente: Cantal youtube. Riqueza Gitana, Programadora CMI, 2010.
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div25diversidadColombia" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">Actividad 3

                                </span>
                            </td>    
                            <td>
                                <img onclick="verificarCrucigramadiversidadColombia(2);
                                    clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" >

                                <table border="0" class="fondoJuego03">
                                    <tr>
                                        <td width="50%" class="alineacionCentro">
                                            <table border="0" width="100%" class="crucigrama">

                                                <tr>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>

                                                    <td>
                                                        <label class="textoNegro">
                                                            2
                                                        </label>
                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                </tr>

                                                <tr>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="a10" class="cajaCrucigrama">
                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="b10" class="cajaCrucigrama">
                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                </tr>


                                                <tr>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="c10" class="cajaCrucigrama">
                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                </tr>

                                                <tr>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="d10" class="cajaCrucigrama">
                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>                                      
                                                </tr>

                                                <tr>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="e10" class="cajaCrucigrama">
                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                </tr>


                                                <tr>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="f10" class="cajaCrucigrama">
                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>
                                                        <label class="textoNegro">
                                                            3
                                                        </label>
                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                </tr>


                                                <tr>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="g10" class="cajaCrucigrama">
                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="g17" class="cajaCrucigrama">
                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                </tr>



                                                <tr>   
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>
                                                        <label class="textoNegro">
                                                            1
                                                        </label>
                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>
                                                        <label class="textoNegro">
                                                            2
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="h10" class="cajaCrucigrama">
                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="h11" class="cajaCrucigrama">
                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="h12" class="cajaCrucigrama">
                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="h13" class="cajaCrucigrama">
                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="h14" class="cajaCrucigrama">
                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="h15" class="cajaCrucigrama">
                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="h16" class="cajaCrucigrama">
                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="h17" class="cajaCrucigrama">
                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="h18" class="cajaCrucigrama">
                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="h19" class="cajaCrucigrama">
                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="h20" class="cajaCrucigrama">
                                                    </td>
                                                </tr>




                                                <tr>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="i4" class="cajaCrucigrama">
                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="i10" class="cajaCrucigrama">
                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="i17" class="cajaCrucigrama">
                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                </tr>




                                                <tr>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>
                                                        <label class="textoNegro">
                                                            4
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="j3" class="cajaCrucigrama">
                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="j4" class="cajaCrucigrama">
                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="j5" class="cajaCrucigrama">
                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="j10" class="cajaCrucigrama">
                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="j17" class="cajaCrucigrama">
                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);" type="text" maxlength="1" id="k4" class="cajaCrucigrama">
                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="k10" class="cajaCrucigrama">
                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="k17" class="cajaCrucigrama">
                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="l4" class="cajaCrucigrama">
                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="l10" class="cajaCrucigrama">
                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="l17" class="cajaCrucigrama">
                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>
                                                </tr>





                                                <tr>
                                                    <td>
                                                        <label class="textoNegro">
                                                            1
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="m1" class="cajaCrucigrama">
                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);" type="text" maxlength="1" id="m2" class="cajaCrucigrama">
                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);" type="text" maxlength="1" id="m3" class="cajaCrucigrama">
                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="m4" class="cajaCrucigrama">
                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="m5" class="cajaCrucigrama">
                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="m6" class="cajaCrucigrama">
                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="m7" class="cajaCrucigrama">
                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="m8" class="cajaCrucigrama">
                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="m9" class="cajaCrucigrama">
                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="m10" class="cajaCrucigrama">
                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="m11" class="cajaCrucigrama">
                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="m12" class="cajaCrucigrama">
                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);" type="text" maxlength="1" id="m13" class="cajaCrucigrama">
                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);" type="text" maxlength="1" id="m14" class="cajaCrucigrama">
                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="m17" class="cajaCrucigrama">
                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>
                                                </tr>



                                                <tr>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="n4" class="cajaCrucigrama">
                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);" type="text" maxlength="1" id="n10" class="cajaCrucigrama">
                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="n17" class="cajaCrucigrama">
                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>
                                                </tr>




                                                <tr>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="o4" class="cajaCrucigrama">
                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="o10" class="cajaCrucigrama">
                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="o17" class="cajaCrucigrama">
                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>
                                                </tr>



                                                <tr>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);" type="text" maxlength="1" id="p4" class="cajaCrucigrama">
                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="p17" class="cajaCrucigrama">
                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);" type="text" maxlength="1" id="q4" class="cajaCrucigrama">
                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);" type="text" maxlength="1" id="r4" class="cajaCrucigrama">
                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>
                                                </tr>



                                                <tr>
                                                    <td>
                                                        <label class="textoNegro">
                                                            3
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="s1" class="cajaCrucigrama">
                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="s2" class="cajaCrucigrama">
                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="s3" class="cajaCrucigrama">
                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="s4" class="cajaCrucigrama">
                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="s5" class="cajaCrucigrama">
                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="s6" class="cajaCrucigrama">
                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="s7" class="cajaCrucigrama"> 
                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="s8" class="cajaCrucigrama">
                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="s9" class="cajaCrucigrama">
                                                    </td>

                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="s10" class="cajaCrucigrama">
                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>
                                                </tr>




                                                <tr>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="t4" class="cajaCrucigrama">
                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>
                                                </tr>



                                                <tr>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);"  type="text" maxlength="1" id="u4" class="cajaCrucigrama">
                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>
                                                </tr>



                                                <tr>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>
                                                        <input onkeyup="verificarCrucigramadiversidadColombia(1);" type="text" maxlength="1" id="v4" class="cajaCrucigrama">
                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>
                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>

                                                    <td>

                                                    </td>
                                                </tr>

                                            </table>

                                        </td>

                                        <td class="alineacionIzquierda alineacionVecticialAlInicio">

                                        </td>
                                    </tr>
                                </table>

                            </td> 
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div26diversidadColombia" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">EVALUACIÓN</span>
                            </td>    
                            <td>
                                <img onclick="comprobarPuzzleDiversidadColombiaEvaluacion(2);clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>            

                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    A continuación, escucharás y verás estudiantes provenientes de comunidades étnicas del país. En este video relatan algunas de las problemáticas más sentidas en sus territorios y las alternativas de vida que vienen construyendo para superarlas.   
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img class="efectoAumento" src="Vista/imagenes/otros/ver_video.png" onclick="abrirSubTema('26-1');">
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    A partir de lo que aprendiste en el curso y de lo que observaste en el video construye el siguiente Mandala. Aquí aparecen las problemáticas que afrontan las poblaciones étnicas en Colombia y las alternativas que vienen construyendo para pervivir en dignidad. De acuerdo a la indicación de las frases enumeradas arrastra las palabras en la dirección de las flechas y así podrás armar la secuencia.
                                </label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" width="100%" height="100%">
                                <table border="0"  class="fondoEvaluacion">
                                    <tr>
                                        <td width="100%" height="100%" class="alineacionVecticialAlInicio">
                                            <table width="100%" height="100%" border="0" class="alineacionVecticialAlInicio">  
                                                <tr>
                                                    <td width="100%" height="100%" class="alineacionVerticalCentro">
                                                        <div class="alineacionVerticalCentro" id="contenedoresJuego03" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 3)">                                                                                                            
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza9DiversidadColombiaEvaluacion" src="Vista/imagenes/juegos/diversidadColombia/evaluacion/9.png" alt="pieza9ConjuntosJuegoDos" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza10DiversidadColombiaEvaluacion" src="Vista/imagenes/juegos/diversidadColombia/evaluacion/10.png" alt="pieza10ConjuntosJuegoDos" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                                                                                                                                
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza11DiversidadColombiaEvaluacion" src="Vista/imagenes/juegos/diversidadColombia/evaluacion/11.png" alt="pieza11ConjuntosJuegoDos" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza12DiversidadColombiaEvaluacion" src="Vista/imagenes/juegos/diversidadColombia/evaluacion/12.png" alt="pieza12ConjuntosJuegoDos" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                            
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza13DiversidadColombiaEvaluacion" src="Vista/imagenes/juegos/diversidadColombia/evaluacion/13.png" alt="pieza13ConjuntosJuegoDos" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza14DiversidadColombiaEvaluacion" src="Vista/imagenes/juegos/diversidadColombia/evaluacion/14.png" alt="pieza14ConjuntosJuegoDos" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                                                                                                                                
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza15DiversidadColombiaEvaluacion" src="Vista/imagenes/juegos/diversidadColombia/evaluacion/15.png" alt="pieza15ConjuntosJuegoDos" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                
                                                            <img onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza16DiversidadColombiaEvaluacion" src="Vista/imagenes/juegos/diversidadColombia/evaluacion/16.png" alt="pieza16ConjuntosJuegoDos" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                                                                                        
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="85%" height="100%">                                            
                                            <table width="100%" border="0" > 

                                                <tr>
                                                    <td>

                                                    </td>

                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacion" id="diezDiversidadColombiaEvaluacion" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 3)">                                                
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacion" id="onceDiversidadColombiaEvaluacion" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 3)">                                                
                                                        </div>
                                                    </td>

                                                    <td>
                                                        
                                                    </td>                                                 
                                                </tr>

                                                <tr>
                                                    <td>

                                                    </td>

                                                    <td>
                                                       
                                                    </td>
                                                    <td>
                                                         <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        
                                                    </td>                                                 
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>                                                    
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacion" id="nueveDiversidadColombiaEvaluacion" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 3)">                                                
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacion" id="diesiceisDiversidadColombiaEvaluacion" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 3)">                                                
                                                        </div>
                                                    </td>                                                    
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>                                                    
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacion" id="treceDiversidadColombiaEvaluacion" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 3)">                                                
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>
                                                    <td>
                                                       <div  class="contenedorPiezaEvaluacion" id="quinceDiversidadColombiaEvaluacion" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 3)">                                                
                                                        </div>
                                                    </td>                                                    
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>                                                    
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacion" id="catorceDiversidadColombiaEvaluacion" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 3)">                                                
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacion" id="doceDiversidadColombiaEvaluacion" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropEtnoeducacion(event, 3)">                                                
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>                                                    
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>                                                    
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>                                                    
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>                                                    
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div  class="contenedorPiezaEvaluacionSinFondo">
                                                        </div>
                                                    </td>                                                    
                                                </tr>

                                            </table>                                            
                                        </td>



                                    </tr>

                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>








        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div26-1diversidadColombia" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                //include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>

                            </td>
                        </tr>

<!--                        <tr>
       <td>
           <audio id="audioxOrganica">
               <source src="Vista/audio/diversidadColombia/Trackx.mp3">
           </audio>
       </td>
   </tr>-->

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3">
                                <video poster controls width="600px" height="400px" preload="none">
                                    <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaEtnoeducacion/Vista/videos/diversidadColombia/video4.mp4" type="video/mp4">
                                </video>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <label class="texto">
                                    Entrevista: Erika Muñoz Villarreal. Grabación y edición: Prensa Universidad de Caldas.
                                </label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img class="efectoAumento" src="Vista/imagenes/otros/regresar.png" onclick="abrirTema(26, 'diversidadColombia');">
                            </td>
                        </tr>
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>






        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div27diversidadColombia" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">MATERIAL</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
<!--                        <tr>
                            <td>
                                <audio id="audioxOrganica">
                                    <source src="Vista/audio/diversidadColombia/Trackx.mp3">
                                </audio>
                            </td>
                        </tr>-->

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionIzquierda" width="100%" height="100%">
                                <table class="fondoDocumentosExternos imagenOvaSinEfecto" border="0">
                                    <tr>                                        
                                        <td class="alineacionIzquierda">
                                            <a target="_blank" class="textoBlancoGrande efectoAumento" href="http://www.dane.gov.co/files/censo2005/etnia/sys/colombia_nacion.pdf"><span>1. DANE. (2005). Colombia una nación multicultural. </span></a> <br/>

                                            <a target="_blank" class="textoBlancoGrande efectoAumento" href="https://www.dnp.gov.co/LinkClick.aspx?fileticket=d69DIYUqNhw%3D&tabid=273"><span>2. DNP. (2012). Guía para la incorporación de la variable étnica y el enfoque  </span></a> <br/> 
                                            &nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" class="textoBlancoGrande efectoAumento" href="https://www.dnp.gov.co/LinkClick.aspx?fileticket=d69DIYUqNhw%3D&tabid=273"><span>diferencial en la formulación e implementación de planes y políticas a nivel</span></a> <br/> 
                                            &nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" class="textoBlancoGrande efectoAumento" href="https://www.dnp.gov.co/LinkClick.aspx?fileticket=d69DIYUqNhw%3D&tabid=273"><span>nacional y territorial</span></a> <br/> 

                                            <a target="_blank" class="textoBlancoGrande efectoAumento" href="http://cms.onic.org.co/"><span>3. Organización Nacional Indígena de Colombia </span></a> <br/>

                                            <a target="_blank" class="textoBlancoGrande efectoAumento" href="http://gitanosdcolombia.org/"><span>4. Gitanos de Colombia </span></a> <br/>

                                            <a target="_blank" class="textoBlancoGrande efectoAumento" href="http://www.renacientes.org/"><span>5. Proceso Colombiano de Comunidades Negras </span></a> <br/>                                            
                                        </td>
                                    </tr>                                  
                                </table>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div28diversidadColombia" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("Vista/menusNavegacion/menudiversidadColombia.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">Agradecimientos</span>
                            </td>    
                            <td>
                                <img onclick="avanzar('diversidadColombia');
                                    clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
<!--                        <tr>
                            <td>
                                <audio id="audioxOrganica">
                                    <source src="Vista/audio/diversidadColombia/Trackx.mp3">
                                </audio>
                            </td>
                        </tr>-->

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  

                        <tr>
                            <td colspan="3" class="alineacionCentro">
                                <img class="imagenOva" src="Vista/imagenes/fondo/fondoAgradecimientos.png">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>







        <!--XXX NIVEL-->
        <!--        <div style="display: none;">
                    <div id="div?diversidadColombia" style="overflow: hidden;" class="ventana">
                        <table border="0">
                            <tbody>
         <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
        <?php
        //include("Vista/menusNavegacion/menudiversidadColombia.php");
        ?>

                            </td>
                        </tr>

                                <tr>
                                    <td>
                                        <img onclick="retroceder('diversidadColombia');clicksound.playclip();" src="Vista/imagenes/otros/retroceder.png" class="botonNavegacion"><br/>
                                        <label class="texto">Anterior</label>
                                    </td> 
                                    <td colspan="1">
                                        <span class="titulo">TITULO</span>
                                    </td>    
                                    <td>
                                        <img onclick="avanzar('diversidadColombia');clicksound.playclip();" src="Vista/imagenes/otros/avanzar.png" class="botonNavegacion"><br/>
                                        <label class="texto">Siguiente</label>
                                    </td>
                                </tr>    
                                <tr>
                            <td>
                                <audio id="audioxOrganica">
                                    <source src="Vista/audio/diversidadColombia/Trackx.mp3">
                                </audio>
                            </td>
                        </tr>

                                <tr>
                                    <td class="linea" colspan="3">
                                        -----------------------------------------------------------------------------------------------------------
                                    </td>
                                </tr>                                           
                                <tr>
                                    <td class="linea" colspan="3">
                                        -----------------------------------------------------------------------------------------------------------
                                    </td>
                                </tr>
                        </table>
                    </div>
                </div>-->


<!--    <tr>
        <td>
            <audio id="audio4Organica">
                <source src="Vista/audio/organica/Track1.mp3">
            </audio>
        </td>
    </tr>-->



    </body>
</html>



