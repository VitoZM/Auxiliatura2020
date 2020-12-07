<?php
class Bolivia{
    private $color;

    function __construc(){
        $this->color = "red";
    }

    function cambiarColor($color){
        $this->color = $color;
    }

    function getColor(){
        return $this->color;
    }
}
?>