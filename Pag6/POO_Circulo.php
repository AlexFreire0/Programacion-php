<?php 
class circulo {
    public $radio;
    public function mostrarinfo() {
        $area = pi() * ($this->radio * $this->radio);
        echo "El área del círculo es: " . $area;
    }
}
$micirculo = new circulo;
$micirculo->radio = 5;
$micirculo->mostrarinfo()
?>