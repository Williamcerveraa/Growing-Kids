<?php
    session_start();
    session_destroy();
    echo "<script>
    alert('AHORA YA SALISTE DEL SISTEMA');
    location.href= '../index.php';
    </script>
    ";

?>
