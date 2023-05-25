<?php
    $conexion = new mysqli("programacionWeb", "root", "", "mundysport");

    if (!$conexion) {
        echo "la conexion fallo.";
    }

?>