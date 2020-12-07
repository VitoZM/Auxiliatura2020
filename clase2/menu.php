<?php
    $numero = $_GET['numero'];
    setcookie('numero',$numero,time() + 60 * 60);
?>
<ul>
    <li><a href="sumatoria.php">Sumatoria</a></li>
    <li><a href="factorial.php">Factorial</a></li>
    <li><a href="fibonaci.php">Fibonaci</a></li>
    <li><a href="dividir.php">Dividir</a></li>
</ul>