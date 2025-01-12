<?php 
class libro {
    public $titulo;
    public $autor;
    public $numeropaginas;
    public function mostrarinfo() {
        echo "Libro: " . $this->titulo . " Autor: " . $this->autor . " Número de páginas: " . $this->numeropaginas;
    }
}
$milibro = new libro;
$milibro->titulo = "El guardián entre el centeno";
$milibro->autor = "J.D Salinger";
$milibro->numeropaginas = 400;
$milibro->mostrarinfo();

?>