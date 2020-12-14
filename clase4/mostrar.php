<?php
    session_start();
    class Operaciones{
        private $a;
        private $b;

        function __construct($a,$b){
            $this->a = $a;
            $this->b = $b;
        }

        function sumar(){
            return $this->a+$this->b;
        }
        function restar(){
            return $this->a-$this->b;
        }
        function multiplicar(){
            return $this->a*$this->b;
        }
        function dividir(){
            if($this->b == "0")
                return "Division entre 0";
            return $this->a/$this->b;
        }
    }

    $operacion = $_POST['operacion'];
    $a = $_SESSION['a'];
    $b = $_SESSION['b'];

    $operaciones = new Operaciones($a,$b);
    switch($operacion){
        case "sumar":
            echo $operaciones->sumar();
            break;
        case "restar":
            echo $operaciones->restar();
            break;
        case "multiplicar":
            echo $operaciones->multiplicar();
            break;
        case "dividir":
            echo $operaciones->dividir();
            break;
    }
?>