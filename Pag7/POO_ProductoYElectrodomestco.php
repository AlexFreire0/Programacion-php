<?php
class Producto {
    public $nombre;
    public $precio;
    public function mostrarDettales() {
        echo "El producto ". $this->nombre . "tiene un valor por unidad de " . $this->precio . "€";
    }
}
class Elecrodomesticos extends Producto {
    public $consumo;
    public function mostrarDettales()
    {
        echo "El producto ". $this->nombre . " con un consumo electrico de " . $this->consumo ."W tiene un valor por unidad de " . $this->precio . "€";
    }
}
$Electrodomesticos1 = new Elecrodomesticos;
$Electrodomesticos1->nombre = "Lavadora";
$Electrodomesticos1->precio = 500;
$Electrodomesticos1->consumo = 80;
$Electrodomesticos1->mostrarDettales();
?>