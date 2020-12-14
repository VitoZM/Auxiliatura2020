<?php
    $voto = $_GET['voto'];
    for($i=1; $i<=4; $i++){
        if($voto == "candidato$i"){
            if(isset($_COOKIE["candidato$i"])){
                $votos = $_COOKIE["candidato$i"];
                setcookie("candidato$i",$votos + 1, time() + 60 * 60 * 24);
            }
            else{
                setcookie("candidato$i",'1',time() + 60 * 60 * 24);
            }
        }
    }   
    header("Location: resultados.php");
?>