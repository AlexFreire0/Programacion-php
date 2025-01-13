<?php
class Calculadora {
    public $numero1;
    public $numero2;
    public function sumar() {
        echo " El resultado de la suma ". $this->numero1. " + ". $this->numero2 . " es ". $this->numero1+$this->numero2. "\n";
    }
    public function restar() {
        echo " El resultado de la resta ".  $this->numero1. " - ". $this->numero2 . " es ". $this->numero1-$this->numero2. "\n";
    }
    public function dividir() {
        if($this->numero2 == 0) {
            echo " No se puede dividir entre ". $this->numero2. "\n";
        }
        else{
            echo " El resultado de la división ".  $this->numero1. " / ". $this->numero2  ." es " . $this->numero1/$this->numero2. "\n";
        }
    }
    public function multiplicar() {
        echo " El resultado de la multiplicación ".  $this->numero1. " + ". $this->numero2  ." es " . $this->numero1*$this->numero2. "\n";
    }
}
$prueba1 = new Calculadora;
$prueba1->numero1 = 5;
$prueba1->numero2 = 10;
$prueba1->sumar();
$prueba1->restar();
$prueba1->dividir();
$prueba1->multiplicar();
?>