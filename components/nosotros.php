<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Template</title>
    <!--Cambiar titulo dependiendo lo que les toco-->

    <!--Archivos necesarios para bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
</head>

<body>

    <!--Navbar-->
    <?php
      include "navbar.php";
    ?>

    <!--A continuacion coloquen todo su codigo-->

    <div class="container mt-4">
        <div class="row mb-3">
            <h1 class="d-flex justify-content-center">Nosotros</h1>
        </div>
        <div class="card">
            <figure class="d-flex justify-content-center">
                <img src="../recourses/img/nosotros.png" width="280rem">
            </figure>
            <div class="contenido">
                <h3>¿Quienes somos?</h3>
                <p id="textoOculto4" class="d-none"> Somos una tienda en línea especializada en la venta de tenis
                    deportivos de alta calidad. En nuestra tienda, encontrarás una amplia selección de marcas
                    reconocidas y productos que se adaptan a tus necesidades y preferencias.<br>
                    Nos apasiona el deporte y creemos en el poder transformador de los tenis adecuados para mejorar tu
                    rendimiento y disfrutar al máximo de tus actividades deportivas. Nos enorgullece ofrecer productos
                    de calidad y un excelente servicio al cliente.</p>
                <button id="botonVerMas4" class="btn btn-primary"
                    onclick="mostrarTexto('textoOculto4', 'botonVerMas4')">Ver más</button>
            </div>
        </div>

        <div class="card">
            <figure class="d-flex justify-content-center">
                <img src="../recourses/img/mision.png">
            </figure>
            <div class="contenido">
                <h3>Mision</h3>
                <p id="textoOculto1" class="d-none">Nuestra misión es proporcionar a nuestros clientes los mejores tenis
                    deportivos del mercado, ofreciendo una experiencia de compra excepcional. Nos esforzamos por brindar
                    una amplia variedad de opciones para que encuentres el calzado perfecto que se ajuste a tus
                    necesidades, estilo y presupuesto. Además, nos comprometemos a garantizar la satisfacción de
                    nuestros clientes, brindando un servicio amigable, eficiente y confiable en todo momento.</p>
                <button id="botonVerMas1" class="btn btn-primary"
                    onclick="mostrarTexto('textoOculto1', 'botonVerMas1')">Ver más</button>
            </div>
        </div>
        <div class="card">
            <figure class="d-flex justify-content-center">
                <img src="../recourses/img/vision.png">
            </figure>
            <div class="contenido">
                <h3>Vision</h3>
                <p id="textoOculto2" class="d-none">Nuestra visión es convertirnos en la tienda en línea líder en la
                    venta de tenis deportivos, reconocida por ofrecer productos de calidad y una experiencia de compra
                    inigualable. Aspiramos a ser el destino preferido de los entusiastas del deporte y atletas de todas
                    las disciplinas, proporcionándoles una amplia gama de opciones y asesoramiento experto para
                    encontrar los tenis perfectos. Además, nos esforzamos por expandir nuestra oferta y establecer
                    alianzas estratégicas con las principales marcas del mercado para brindar lo mejor a nuestros
                    clientes.</p>
                <button id="botonVerMas2" class="btn btn-primary"
                    onclick="mostrarTexto('textoOculto2', 'botonVerMas2')">Ver más</button>
            </div>
        </div>
        <div class="card">
            <figure class="d-flex justify-content-center">
                <img src="../recourses/img/valores.png">
            </figure>
            <div class="contenido">
                <h3>Valores</h3>

                <p id="textoOculto3" class="d-none">1.- Calidad: Nos enfocamos en ofrecer tenis deportivos de alta
                    calidad que cumplan con los estándares más exigentes de rendimiento, durabilidad y comodidad.<br>
                    2.- Pasión: Nos apasiona el deporte y nos entusiasma ayudar a nuestros clientes a encontrar el
                    calzado adecuado que les permita alcanzar sus metas y disfrutar de su actividad favorita al
                    máximo.<br>
                    3.- Servicio al cliente: Valoramos a nuestros clientes y nos esforzamos por brindarles un servicio
                    excepcional. Estamos comprometidos en responder a sus preguntas, resolver cualquier problema y
                    asegurarnos de que su experiencia de compra sea satisfactoria.<br>
                    4.- Variedad: Creemos en la importancia de ofrecer una amplia variedad de marcas, estilos y opciones
                    de tenis deportivos para que nuestros clientes encuentren exactamente lo que están buscando.<br>
                    5.- Honestidad: Mantenemos una relación transparente y honesta con nuestros clientes. Brindamos
                    información precisa y detallada sobre nuestros productos, políticas y procesos para generar
                    confianza y satisfacción en cada interacción.</p>
                <button id="botonVerMas3" class="btn btn-primary"
                    onclick="mostrarTexto('textoOculto3', 'botonVerMas3')">Ver más</button>
            </div>
        </div>
    </div>

    <!--Arriba de este comentario en esta seccion-->

    <!--Footer-->
    <br><br> <br>
    <?php
      include "footer.php";
    ?>

    <!--Ocultar y mostrar texto-->
    <script>
    function mostrarTexto(idTexto, idBoton) {
        var texto = document.getElementById(idTexto);
        var boton = document.getElementById(idBoton);

        if (texto.classList.contains('d-none')) {
            texto.classList.remove('d-none');
            boton.textContent = 'Ver menos';
        } else {
            texto.classList.add('d-none');
            boton.textContent = 'Ver más';
        }
    }
    </script>
</body>

</html>