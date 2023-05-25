<?php

include "../recourses/db/methods/conexion.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    include "../recourses/db/methods/conexion.php";
    $sql = "SELECT nombre, marca, descripcion, imagen, precio FROM productos WHERE id = $id";
    $resultado = $conexion->query($sql);
    if($fila = $resultado -> fetch_assoc()){
        $nombreA = $fila["nombre"];
        $descA = $fila["descripcion"];
        $marcaA = $fila["marca"];
        $imagenA = $fila["imagen"];
        $precioA = $fila["precio"];
    }else{
        echo "Datos no obtenidos";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $id = intval($_POST["idP"]);
    $nombre = mysqli_real_escape_string($conexion, $_POST["nombre"]);
    $marca = mysqli_real_escape_string($conexion, $_POST["marca"]);
    $descripcion = mysqli_real_escape_string($conexion, $_POST["descripcion"]);
    $precio = floatval($_POST["precio"]);

    // Procesar la imagen
    $imagen = $_FILES["imagen"];
    $imagen_nombre = mysqli_real_escape_string($conexion, $imagen["name"]);
    $imagen_temporal = $imagen["tmp_name"];
    $imagen_destino = "recourses/db/img/" . $imagen_nombre;

    if($imagen_destino == "recourses/db/img/"){
        $sql = "UPDATE productos SET nombre = '$nombre', marca = '$marca', descripcion = '$descripcion', precio = $precio WHERE id = $id";
        $res = $conexion->query($sql);

        if (!$res) {
            echo "Error al actualizar los datos: " . $conexion->error;
        } else {
            echo "<script>
              alert('Datos actualizados correctamente.');
              window.location.href = 'inventario.php';
          </script>";
        }
    }else{
        // Mover la imagen del directorio temporal al destino final
        move_uploaded_file($imagen_temporal, $imagen_destino);

        // Consulta SQL para actualizar los datos en la tabla correspondiente
        $sql = "UPDATE productos SET nombre = '$nombre', marca = '$marca', descripcion = '$descripcion', precio = $precio, imagen = '$imagen_destino' WHERE id = $id";
        $res = $conexion->query($sql);

        if (!$res) {
            echo "Error al actualizar los datos: " . $conexion->error;
            $conexion->close();
        } else {
            $conexion->close();
            echo "<script>
              alert('Datos actualizados correctamente.');
              window.location.href = 'inventario.php';
            </script>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar producto</title>
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
    <?php
    

    ?>

    <div class="container">
        <div class="row mt-4">
            <div class="col-12 d-flex justify-content-center">
                <h1>Actualizar</h1>
            </div>
        </div>
        <div class="row ps-3 mt-4 mb-5">
            <form class="was-validated row pb-sm-5" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
            <input type="number" id="idP" name="idP" value=<?php echo $id; ?> hidden>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="validationServer01" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombreA; ?>" required>
                        <div class="invalid-feedback">
                            Por favor ingrese un nombre
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="validationServer02" class="form-label">Marca</label>
                        <input type="text" class="form-control" id="marca" name="marca" value="<?php echo $marcaA; ?>" required>
                        <div class="invalid-feedback">
                            Por favor ingrese una marca de tenis
                        </div>
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="mb-3">
                        <label for="validationServer02" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="precio" name="precio" step="1" value=<?php echo $precioA; ?> required>
                        <div class="invalid-feedback">
                            Por favor ingrese el precio del producto
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-3">
                        <label for="validationTextarea" class="form-label">Descripcion</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Required example textarea"
                            required><?php echo $descA; ?></textarea>
                        <div class="invalid-feedback">
                            Por favor ingrese una descripción
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-3">
                        <label for="imagen" class="form-label">Imagen</label>
                        <img src="<?php echo $imagenA; ?>" class="img-thumbnail" alt="">
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-3">
                        <input type="file" id="imagen" name="imagen" accept="image/*" class="form-control" aria-label="file example">
                    </div>
                </div>

                <div class="col-12 d-flex justify-content-evenly">
                    <input type="submit" value="Enviar" class="btn btn-primary text-white" />
                    <input type="button" onclick="back()" value="Regresar" class="btn btn-primary text-white" />
                </div>
            </form>
        </div>
    </div>

    <!--Arriba de este comentario en esta seccion-->

    <!--Footer-->
    <br>
    <?php
    include "footer.php";
    ?>


    <!--Funciones-->
    <script>
    function back() {
        window.location.href = 'inventario.php';
    }
    </script>

    <!--Archivos necesarios para bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"
        integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous">
    </script>
</body>

</html>