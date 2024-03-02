<?php

include '../conexion.php';

$id_usuario = $_GET['id_usuario'];

$eliminar = "DELETE FROM usuarios WHERE id_usuario = '$id_usuario'";

$resultado = mysqli_query($conectar, $eliminar);

if($resultado){
    echo
    '<script>
    alert("SE ELIMINÓ EL USUARIO CORRECTAMENTE");
    location.href="verusuarios.php";
    </script>';
}else{
    echo "FALLO";
}

// echo $id_usuario;
