<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los valores del formulario
  $nombre = $_POST["nombre"];
  $marca = $_POST["marca"];
  $descripcion = $_POST["descripcion"];
  $precio = $_POST["precio"];

  // Procesar la imagen
  $imagen = $_FILES["imagen"];
  $imagen_nombre = $imagen["name"];
  $imagen_temporal = $imagen["tmp_name"];
  $imagen_destino = "../recourses/db/img/" . $imagen_nombre;

  // Mover la imagen del directorio temporal al destino final
  move_uploaded_file($imagen_temporal, $imagen_destino);

  // Incluir el archivo de conexión a la base de datos
  include "../recourses\db\methods\conexion.php";

  // Consulta SQL para insertar los datos en la tabla correspondiente
  $sql = "INSERT INTO productos (nombre, marca, descripcion, precio, imagen) VALUES ('$nombre', '$marca', '$descripcion', '$precio', '$imagen_destino')";

  $res = $conexion->query($sql);

  if (!$res) {
    echo "Error al insertar los datos: " . $res->error;
  }else{
    echo "<script>
              alert('Datos guardados correctamente.');
          </script>";
  }
  $conexion->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar producto</title>
    <!--Cambiar titulo dependiendo lo que les toco-->

    <!--Archivos necesarios para bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />

    <style>
        .colorB{
            background: #6CAFFF;
        }
    </style>

</head>

<body>

    <!--Navbar-->
    <?php
    include "navbar.php";
    ?>

    <!--A continuacion coloquen todo su codigo-->

    <div class="container">
        <div class="row mt-4">
            <div class="col-12 d-flex justify-content-center">
                <h1>Guardar</h1>
            </div>
        </div>
        <div class="row ps-3 mt-4 mb-5">
            <form class="was-validated row pb-sm-5" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="validationServer01" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tenis" required>
                        <div class="invalid-feedback">
                            Por favor ingrese un nombre
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="validationServer02" class="form-label">Marca</label>
                        <input type="text" class="form-control" id="marca" name="marca" placeholder="Nike" required>
                        <div class="invalid-feedback">
                            Por favor ingrese una marca de tenis
                        </div>
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="mb-3">
                        <label for="validationServer02" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="precio" name="precio" step="1" placeholder="100" required>
                        <div class="invalid-feedback">
                            Por favor ingrese el precio del producto
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-3">
                        <label for="validationTextarea" class="form-label">Descripcion</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion"
                            required></textarea>
                        <div class="invalid-feedback">
                            Por favor ingrese una descripción
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-3">
                        <input type="file" id="imagen" name="imagen" accept="image/*" class="form-control" aria-label="file example" required>
                        <div class="invalid-feedback">Ingrese una imagen</div>
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

</body>

</html>