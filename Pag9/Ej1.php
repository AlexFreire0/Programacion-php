<?php 
class Producto {
    private $nombre;
    private $precio;
    private $cantidad;
    public function __construct($nombre_ext, $precio_ext, $cantidad_ext)
    {
        $this->nombre = $nombre_ext;
        $this->precio = $precio_ext;
        $this->cantidad = $cantidad_ext;
    } 
    public function getNombre() {
        return $this->nombre;
    }
    public function getPrecio() {
        return $this->precio;
    }
    public function getCantidad() {
        return $this->cantidad;
    }
}
class ProductoImportado extends Producto {
    private $impuestoAdicional;
    public function __construct($nombre_ext, $precio_ext, $cantidad_ext, $impuestoAdicional_ext)
    {
        parent::__construct($nombre_ext, $precio_ext, $cantidad_ext);
        $this->impuestoAdicional = $impuestoAdicional_ext;
    }
    public function calcularPrecioFinal() {
        return $this->getPrecio() + $this->impuestoAdicional;
    }
    public function mostrarDetalles() {
        return "Producto Importado: " . $this->getNombre() . ", Precio Base: " . $this->getPrecio() . "€, Cantidad: " . $this->getCantidad() . ", Impuesto Adicional: " . $this->impuestoAdicional . "€, Precio Final: " . $this->calcularPrecioFinal() . "€";
    }
}
$producto = new Producto("Camisa", 20, 5);
echo "Producto: " . $producto->getNombre() . ", Precio: " . $producto->getPrecio() . "€, Cantidad: " . $producto->getCantidad() . "\n";

$productoImportado = new ProductoImportado("Reloj", 100, 2, 20);
echo $productoImportado->mostrarDetalles();
?>