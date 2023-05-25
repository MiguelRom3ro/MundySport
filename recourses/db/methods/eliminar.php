<?php

if(isset($_GET['id'])) {
    $id = $_GET['id'];
}

include("conexion.php");

$sql = "DELETE FROM productos WHERE id = $id";

$res = $conexion->query($sql);

if(!$res){
    echo "Eliminacion fallida";
}else{
    $confirmation = true;
    include "../../../inventario.php";
}

?>