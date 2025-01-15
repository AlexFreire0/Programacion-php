<?php
#class coche {
#    private $sonido;
#    private $ruedas;
#
#    public function __construct() 
#    {
#        echo "Mec Mec";
#        $this->ruedas = 4;
#    }
#    public function getRuedas() {
#        echo "\n". $this->ruedas;
#    }
#}

class bicho{
    private $sonido;
    private $patas;
    private $tipobicho;

    public function __construct($sonido_ext, $patas_ext, $tipobicho_ext){
        $this->sonido = $sonido_ext;
        $this->patas = $patas_ext;
        $this->tipobicho= $tipobicho_ext;
        
    }
    public function verdetalles()
    {
        echo "sonido: ". $this->sonido. "\npatas: ". $this->patas. "\nTipo bicho: ". $this->tipobicho;
    }
}
class perro extends bicho {

    private $frase;

    public function __construct($sonido_ext,$patas_ext, $tipobicho_ext, $frase_ext)
    {
        $this->frase = $frase_ext; 
    }
    public function verdetalles()
    {
        parent::verdetalles();
        echo $this->frase;
    }
}
$miperro = new bicho("guau", 4, "Perro");
$miperro-> verdetalles();

$paco = new perro("Miau", 4, "perro");
?>