<?php
    class Cuadrado{
        private $cadena;

        function __construct($cadena){
            $this->cadena = $cadena;
        }

        function dibujar(){
            $cadena = $this->cadena;
            $longitud = strlen($cadena);
            $espacios = strlen($cadena) - 2;
            echo "<tr>";
            for($i=0; $i<$longitud; $i++)
                echo "<td>$cadena[$i]</td>";
            echo "</tr>";
            for($i=1; $i<$longitud-1; $i++){
                echo "<tr>";
                echo "<td>$cadena[$i]</td>";
                for($j=0;$j<$espacios;$j++)
                    echo "<td>&nbsp</td>";
                $indice = $longitud-$i-1;
                echo "<td>$cadena[$indice]</td>";
                echo "</tr>";
            }
            echo "<tr>";
            for($i=$longitud-1; $i>=0; $i--)
                echo "<td>$cadena[$i]</td>";
            echo "</tr>";
        }
    }

?>
<table>
    <?php
        $cadena = $_POST['cadena'];
        $cuadrado = new Cuadrado($cadena);
        $cuadrado->dibujar();
    ?>
</table>