<?php
    session_start();
    echo $_SESSION['usuario'];
    $usuario = $_SESSION['usuario'];

    if($usuario == "admin"){
        echo "<br><ul>
            <li>crear</li>
            <li>listar</li>
            <li>borrar</li>
            <li>salir</li>
            </ul>";
    }
    else{
        echo "<br><ul>
            <li>listar</li>
            </ul>";
    }
?>