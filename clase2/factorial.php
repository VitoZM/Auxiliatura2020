<?php
    //factorial de '4' = 1 * 2 * 3 * 4 = 24
    //factorial de 0 y 1 = 1
    $numero = $_COOKIE['numero'];
    $factorial = 1;
    for($i=1; $i<=$numero;$i++)
        $factorial *= $i;
    echo "El factorial de $numero es: $factorial";
?>