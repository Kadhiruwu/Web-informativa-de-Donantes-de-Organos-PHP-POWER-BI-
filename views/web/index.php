<?php
require __DIR__ . '/../templates/header.php';

?>


<div class="contenido_medio">
    <div class="contenido_izquierdo">
        <h2>En el Perú</h2>
        <p>La donación de órganos en Perú enfrenta una crisis significativa debido a la baja tasa de donantes, situándose en solo 2 por cada millón de habitantes, una de las más bajas de América Latina. A pesar de los esfuerzos del Ministerio de Salud y diversas campañas de sensibilización, la lista de espera para trasplantes supera las 7,000 personas, con una alarmante cifra de entre dos a tres muertes diarias de pacientes en espera de un órgano.
        </p>

    </div>
    <div class="contenido_derecho">
        <img src="/imagenes/donacionnn.jpg" alt="imagen">
    </div>
</div>


<article class="articulo_general">
    <div class="articulo_izquierda">
        <div class="contenido_articulo">
            <h2>Dato Interesante</h2>
            <p>Miles de personas en Perú están en la lista de espera para un trasplante de órgano. Las listas más largas suelen ser para trasplantes de riñón y hígado.</p>
        </div>

    </div>
    <div class="articulo_derecha">
        <div class="contenido_articulo">
            <p> La mayoría de los donantes de órganos en Perú están en el rango de 18 a 50 años.</p>
            <h4>Animate a ser Donante</h4>
        </div>

    </div>
</article>


<article class="articulo_secundario">
    <div class="articulo_secundario_izquierda">
        <div class="contenido_secundario_articulo1" data-aos="flip-left">
            <h2>¿Qué debo hacer para ser donante?</h2>
            <ul class="mi-lista">
                <li>Solo podrán donar órganos y tejidos las personas mayores de 18 años.</li>
                <li>Solicita en el Registro Nacional de Identificación y Estado Civil (RENIEC) que en tu DNI se exprese tu voluntad de ser donante de órganos.</li>
                <li>Inscríbete en el Acta del Donante llamando al teléfono (01) 315 6699 de lunes a viernes de 7:00 a. m. a 5:00 p. m.</li>
                <li>Comunica a tu familia tu decisión de ser donante de órganos para que, si llegado el momento, respeten tu decisión y autoricen la donación.</li>
            </ul>
        </div>

        <div class="contenido_secundario_articulo2">
            <h2>¿Quiénes NO pueden donar??</h2>
            <p>No pueden donar las personas que padecen enfermedades que contraindiquen la donación de órganos y tejidos como son el VIH, HTLV, cáncer, enfermedades autoinmunes, entre otras enfermedades.</p>
            <div class="corazonp">
                <img src="/imagenes/corazonp.png" alt="">
            </div>

        </div>


    </div>
    <div class="articulo_secundario_derecha">
        <div class="contenido_secundario_articulo">
            <h3>Video Informativo</h3>

            <iframe data-aos="zoom-in-left" src="https://www.youtube.com/embed/KpL2u6CX7p4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>



            <!-- <source src="ruta/del/video.webm" type="video/webm">
        <source src="ruta/del/video.ogv" type="video/ogg"> -->

        </div>
    </div>
</article>

<article class="articulo_tres">
    <div class="articulo_izquierda_tres">
        <div class="contenido_articulo_tres">
            <h3>Esperemos estés interesado...</h3>
            <p> Tu decisión de donar puede marcar la diferencia entre la vida y la muerte para muchas personas, demostrando que la humanidad y la compasión trascienden más allá de nuestra existencia. ¡Sé un héroe en la vida de alguien más y considera la donación de órganos!</p>
            <h3>Más información</h3>
            <p>Para que tengas más información del caso de donación de organos presiona el siguiente enlace: <a href="https://portal.essalud.gob.pe/index.php/donacion-de-organos/" target="_blank">Presiona aquí</a></p>
        </div>

    </div>
    <div class="articulo_derecha_tres " data-aos="zoom-out-left">
        <div class="contenido_articulo_tress" >
            <p> 5 cosas que no sabías sobre los trasplantes de órganos</p>
            <ul class="mi-lista">
                <li>Un donante puede salvar la vida de 8 personas.</li>
                <li>El cuerpo no queda dañado después de la donación.</li>
                <li>El donante puede estar vivo.</li>
                <li>El equipo que extrae el órgano puede ser de otro hospital.</li>
                <li>El órgano dañado puede mantenerse en el cuerpo tras el trasplante.</li>
            </ul>
        </div>

    </div>
</article>


<?php
require __DIR__ . '/../templates/footer.php';
?>
<script src="/build/js/opciones.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
   <!--Animaciones AOS ABAJO -->
   <script>
      AOS.init({
            // Aquí puedes agregar configuraciones adicionales de AOS si es necesario.
            offset: 120, // desplazamiento (en px) desde el punto de activación original
            delay: 0, // valores de 0 a 3000, con un paso de 50ms
            duration: 1000, // valores de 0 a 3000, con un paso de 50ms
            easing: 'ease', // easing predeterminado para las animaciones de AOS
            once: false, // si la animación debe ocurrir solo una vez - al desplazarse hacia abajo
            mirror: false, // si los elementos deben animarse al desplazarse más allá de ellos
            anchorPlacement: 'top-bottom', // define qué posición del elemento con respecto a la ventana debe activar la animación
});
    </script>

    <!--Animaciones AOS ARRIBA -->