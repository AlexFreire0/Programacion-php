<?php 
class Rectangulo {
    public $base;
    public $altura;
    public function calcularArea() {
       $area = $this->base * $this->altura;
        echo "El area del rectangulo es ". $area;
    }
}
$mirectangulo = new Rectangulo;
$mirectangulo->base = 10;
$mirectangulo->altura = 5;
$mirectangulo->calcularArea();
?>