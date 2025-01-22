<?php
class Carrito {
    public $productos;
    public function agregarProducto($nombre, $precio, $cantidad) {
        $this->productos[] = [
            'nombre' => $nombre,
            'precio' => $precio,
            'cantidad' => $cantidad
        ];
    }
    public function quitarProducto($nombre) {
        foreach ($this->productos as $indice => $producto) {
            if ($producto['nombre']=== $nombre) {
                unset($this->productos[$indice]); 
                $this->productos = array_values($this->productos); 
            }
        }
    }
    public function calcularTotal() {
        $total = 0;
        foreach ($this->productos as $indice => $producto) {
            $total += $producto['precio'] * $producto['cantidad'];
        }
        return $total;
    }
    public function mostrarDetalleCarrito() {
        if ($this->productos === []) {
            echo "El carrito está vacio";
    }   else {
        echo "Detalles del carrito: \n";
        foreach ($this->productos as $nombre => $producto) {
            echo "Producto: " . $producto['nombre'] .", Precio: ".$producto['precio'] . "€, Cantidad: " . $producto['cantidad'] . "\n";
        }
    }
    }
}
    $carrito = new Carrito;
    $carrito->agregarProducto("Manzana", 1.50, 4);
    $carrito->agregarProducto("Leche", 1.20, 2);
    $carrito->agregarProducto("Pan", 0.85, 1);
    $carrito->mostrarDetalleCarrito();
    
    echo "Total del carrito: " . $carrito->calcularTotal() . "€\n";
    
    $carrito->quitarProducto("Leche");
    $carrito->mostrarDetalleCarrito();
    
?>
