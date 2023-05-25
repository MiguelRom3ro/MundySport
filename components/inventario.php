<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
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

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-4">
                <h1 class="newsport">Inventario</h1>
            </div>
        </div>
        <div class="row mt-4">
            <a href="agregar.php" class="btn btn-primary">Agregar producto</a>
            <div class="col-12 mt-2 table-responsive-sm mb-5">
                <table class="table">
                    <thead>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Modificar</th>
                        <th scope="col">Eliminar</th>
                    </thead>
                    <tbody>
                        <?php

                        // Incluir el archivo de conexión a la base de datos
                        include "../recourses/db/methods/conexion.php";

                        // Consulta SQL para obtener los datos de la tabla
                        $sql = "SELECT id, nombre, marca, precio FROM productos";
                        $resultado = $conexion->query($sql);

                        // Verificar si hay resultados
                        if ($resultado->num_rows > 0) {
                            // Recorrer los resultados y mostrar los datos en la tabla
                            $i = 1;
                            while ($fila = $resultado->fetch_assoc()) {
                              echo "<tr>
                              <th scope='row'>".$i."</th>
                              <td>".$fila["nombre"]."</td>
                              <td>".$fila["marca"]."</td>
                              <td>".$fila["precio"]."</td>
                              <td> <a class='btn btn-primary' href='actualizar.php?id=".$fila["id"]."' role='button'>Modificar</a> </td>
                              <td><a class='btn btn-danger' onclick='eliminarProducto(".$fila["id"].");' role='button'>Eliminar</a></td>
                              </tr>";
                              $i = $i + 1;
                            }
                        } else {
                          echo "No se encontraron registros.";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--Arriba de este comentario en esta seccion-->

    <!--Footer-->
    <?php
    include "footer.php";
    ?>

    <!--Funcion para llamar al archivo eliminar sin abrirlo y mandandole el ID-->
    <script>
    //eliminar producto
    function eliminarProducto(id) {
        // Mostrar una alerta de confirmación antes de eliminar el producto
        var confirmacion = confirm("¿Estás seguro que deseas eliminar el producto?");

        // Si el usuario selecciona "Aceptar" en la alerta de confirmación, ejecutar el código de eliminación
        if (confirmacion) {
            // Realizar una solicitud AJAX para ejecutar eliminar.php con el ID como parámetro
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    // Procesar la respuesta del servidor si es necesario
                    console.log(this.responseText);
                }
            };
            xhttp.open("GET", "../recourses/db/methods/eliminar.php?id=" + id, true);
            xhttp.send();
            alert('Datos eliminados correctamente.');
            location.href = window.location.href;
        }
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