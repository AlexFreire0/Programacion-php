<?php 
class Conversor {
    public $Dolares;
    public $Euros;
    public function convertirDolaresAEuros() {
        $this->Euros = $this->Dolares * 1.03;
        echo $this->Dolares. "$ son equivalentes a " . $this->Euros. "€\n";
    }
    public function convertirEurosADolares() {
        $this->Dolares = $this->Euros * 0.96;
        echo $this->Euros. "$ son equivalentes a " . $this->Dolares. "$\n";
    }
}
$Conversion1 = new Conversor;
$Conversion1->Dolares = 50;
$Conversion1->convertirDolaresAEuros();
$Conversion2 = new Conversor;
$Conversion2->Euros = 100;
$Conversion2->convertirEurosADolares();
?>