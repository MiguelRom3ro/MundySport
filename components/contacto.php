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
    
    <div class="redes">
        <h2> <br> Siguenos en : </h2>
        <ul class="Sociales">
            <li><a href="https://www.facebook.com/profile.php?id=100088228058533&mibextid=ZbWKwL/" target="blank">
                    <img src="../recourses/img/FaceIcon.png" width="70" height="70"></a></li>

            <li><a href="https://www.instagram.com/">
                    <img src="../recourses/img/Instagram_logo.png" width="70" height="70"></a></li>

            <li><a
                    href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZXMifQ%3D%3D%22%7D">
                    <img src="../recourses/img/TwitterIcon.png" width="70" height="70"></a></li>

            <li><a href="https://www.tiktok.com/es/">
                    <img src="../recourses/img/descarga.png" width="70" height="70"></a></li>

            <li><a href="https://wa.me/5214662120292">
                    <img src="../recourses/img/whatssap.png" width="70" height="70"></a></li>
            </li>
        </ul>

        <!--Arriba de este comentario en esta seccion-->

        <!--Footer-->
        <?php
      include "footer.php";
    ?>

        <!--Archivos necesarios para bootstrap-->
        
</body>

</html>