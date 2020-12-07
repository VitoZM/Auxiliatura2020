<?php
    $numero = $_COOKIE['numero'];
    $random = rand(1,100);
    $division = $numero/$random;
    echo "$numero/$random = $division";
?>