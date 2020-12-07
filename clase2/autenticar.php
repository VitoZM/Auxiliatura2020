<?php
    session_start();
    $usuario = $_POST['usuario'];
    $contra = $_POST['contra'];

    $_SESSION['usuario'] = $usuario;
    $_SESSION['contra'] = $contra;
    echo $_SESSION['usuario'];
?>
<br>
<a href="acceso.php">Acceder</a>