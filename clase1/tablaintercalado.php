<?php
    $fils = $_GET['fils'];
    $cols = $_GET['cols'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <table border="1">
        <?php
            include('Bolivia.php');
            include('Chuquisaca.php');
            $Chuquisaca = new Chuquisaca();
            $Bolivia = new Bolivia();
            $banderaChu = 0;
            $banderaBol = 0;
            for($i=1; $i<=$fils; $i++){
                echo "<tr>";//apertura de etiqueta <tr> mediante php
                $banderaBol++;
                $banderaChu++;
                $banderaColumna = 1;
                for($j=1; $j<=$cols; $j++){
                    if($banderaColumna == 1){
                        if($banderaBol == 1)
                            $Bolivia->cambiarColor("rojo");
                        if($banderaBol == 2)
                            $Bolivia->cambiarColor("amarillo");
                        if($banderaBol == 3)
                            $Bolivia->cambiarColor("verde");

                        $banderaColumna = 0;
                        $color = $Bolivia->getColor();
                        echo "<td class='$color'>------</td>";
                    }
                    else{
                        if($banderaChu == 1)
                            $Chuquisaca->cambiarColor("rojo");
                        if($banderaChu == 2)
                            $Chuquisaca->cambiarColor("blanco");

                        $banderaColumna = 1;
                        $color = $Chuquisaca->getColor();
                        echo "<td class='$color'>------</td>";
                    }
                    
                }
                if($banderaBol == 3)
                    $banderaBol = 0;
                if($banderaChu == 2)
                    $banderaChu = 0;
                echo "</tr>";//cierre de etiqueta <tr> mediante php
            }
        ?>
    </table>
</body>
</html>