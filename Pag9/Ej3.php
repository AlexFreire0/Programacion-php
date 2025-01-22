<?php
class Usuario {
    private $nombre;
    private $email;
    public function __construct($nombre_ext, $email_ext){
        $this->nombre = $nombre_ext;
        $this->email = $email_ext;
    }
    public function mostrarInfo() {
        echo "Nombre: $this->nombre \n Email: $this->email\n";
    }
}
class Administrador extends Usuario {
    public $nivelAcceso;
    public function __construct($nombre_ext, $email_ext, $nivelAcceso_ext){
        parent:: __construct($nombre_ext, $email_ext);
        $this->nivelAcceso = $nivelAcceso_ext;
    }
    public function mostrarInfo() {
        parent::mostrarInfo(); 
        echo "Nivel de acesso: $this->nivelAcceso";
    }
}
$Persona1 = new Usuario("Agustin", "agus@hotmail.com");
$Persona2 = new Administrador("Alex", "Alex@gmail.com", 5);
$Persona1->mostrarInfo();
$Persona2->mostrarInfo();
?>