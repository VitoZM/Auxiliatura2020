<?php
    for($i=1;$i<=4;$i++){
        if(isset($_COOKIE["candidato$i"])){
            $votos = $_COOKIE["candidato$i"];
            echo "Candidato $i votos: $votos";
        }
        else
            echo "Candidato $i votos: 0";
        echo"<br>";
    }
?>