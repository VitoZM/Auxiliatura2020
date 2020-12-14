<?php
    session_start();
    $a = $_GET['a'];
    $b = $_GET['b'];
    $_SESSION['a'] = $a;
    $_SESSION['b'] = $b;
?>

<form action="mostrar.php" method="POST">
    Sumar: <input type="radio" name="operacion" value="sumar"><br>
	Restar: <input type="radio" name="operacion" value="restar"><br>
    Multiplicar: <input type="radio" name="operacion" value="multiplicar"><br>
    Dividir: <input type="radio" name="operacion" value="dividir"><br>
    <input type="submit" value="Calcular">
</form>