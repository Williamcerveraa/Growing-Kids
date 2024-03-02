<?php
require '../conexion.php';

// $usuario = $_POST["usuario"];
$usuario = addslashes( $_POST["usuario"]);
$contrasena = addslashes( $_POST["contrasena"]); //PARA EVITAR INYECCIONES SQL
// $contrasena = $_POST["contrasena"];
 
//  echo $usuario. "<br>". $contrasena;


$comparar = "SELECT * FROM usuarios WHERE usuario ='$usuario' AND contrasena ='$contrasena'";

$resultado = mysqli_query($conectar, $comparar);

if(mysqli_num_rows($resultado) > 0){
    session_start();
    $_SESSION["autentificado"] = "SI";
    header("location:veralumnos.php");
}else{
    echo "
        <script>
            alert('ERROR EN LA AUTENTIFICACIÓN');
            location.href = 'login.php?errorusuario=SI';
        </script>
    ";
}
mysqli_free_result($resultado);
mysqli_close($conectar);