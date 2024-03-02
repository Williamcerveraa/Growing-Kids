<?php

include '../conexion.php';

$id_alumno = $_GET['id_alumno'];

$eliminar = "DELETE FROM inscripcion WHERE id_alumno = '$id_alumno'";

$resultado = mysqli_query($conectar, $eliminar);

if($resultado){
    echo
    '<script>
    alert("SE ELIMINÓ EL ALUMNO CORRECTAMENTE");
    location.href="veralumnos.php";
    </script>';
}else{
    echo "FALLO";
}

// echo $id_usuario;
