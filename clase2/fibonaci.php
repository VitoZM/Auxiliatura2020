<?php
    //fibonacci es la siguiente serie: 
    //0 - 1 - 1 - 2 - 3 - 5 - 8 - 13 ........
    $numero = $_COOKIE['numero'];
    $fibonaci = fibonaci($numero);
    echo "Fibonaci: $fibonaci";

    function fibonaci($n){
        if($n == 0)
            return 0;
        if($n == 1)
            return 1;
        return fibonaci($n-1)+fibonaci($n-2);
    }
?>