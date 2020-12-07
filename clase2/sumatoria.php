<?php
    //sumatoria de '3' = 1 + 2 + '3' = 6
    $numero = $_COOKIE['numero'];
    $suma = 0;
    for($i=1; $i<=$numero;$i++)
        $suma += $i;
    echo "La sumatoria de $numero es: $suma";
?>