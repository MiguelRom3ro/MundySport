<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
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

    <main>
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center mt-3">
                    <h1>Catalogo</h1>
                </div>
            </div>
            <div class="row mt-4 mb-5">
                <?php
                    include "../recourses/db/methods/conexion.php";
                    if ($conexion->connect_error) {
                        die("Error de conexión: " . $conexion->connect_error);
                    }

                    // Consulta para obtener los productos
                    $sql = "SELECT imagen, nombre, marca, precio FROM productos";
                    $result = $conexion->query($sql);
                    $i = 1;

                    // Generar las tarjetas de producto
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $productoImagen = $row["imagen"]; // Convertir la imagen a base64
                            $productoNombre = $row["nombre"];
                            $productoMarca = $row["marca"];
                            $productoPrecio = $row["precio"];

                            echo '<div class="col-md-4 mt-3">';
                            echo '<div class="card">';
                            echo '<a href="#!" data-bs-toggle="modal" data-bs-target="#modalImage'.$i.'">';
                            echo '<img class="card-img-top" height="200rem" src="' . $productoImagen . '" alt="' . $productoNombre . '">';
                            echo '</a>';
                            echo '<div class="card-body">';
                            echo '<h5 class="card-title">' . $productoNombre . '</h5>';
                            echo '<p class="card-text">'. $productoMarca .'</p>';
                            echo '<p class="card-description">$' . $productoPrecio . '</p>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';

                            echo '<div tabindex="-1" aria-labelledby="modalImage1" aria-hidden="true" class="modal fade" id="modalImage'.$i.'">';
                            echo '<div class="modal-dialog modal-lg modal-dialog-centered">';
                            echo '<div class="modal-content">';
                            echo '<img src="'. $productoImagen .'" alt="" />';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';

                            $i = $i + 1;

                        }
                    }

                    $conexion->close();
                ?>
            </div>
        </div>
    </main>

    <!--Arriba de este comentario en esta seccion-->

    <!--Footer-->
    <br>
    <?php
    include "footer.php";
    ?>

    <!--Archivos necesarios para bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"
        integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous">
    </script>
</body>

</html>