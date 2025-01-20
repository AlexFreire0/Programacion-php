<?php 
class CuentaBancaria {
    private $titular;
    private $saldo;
    private $tipoCuenta;
    public function __construct($titular_ext, $saldo_ext, $tipoCuenta_ext)
    {
        $this->titular= $titular_ext;
        $this->saldo= $saldo_ext;
        $this->tipoCuenta= $tipoCuenta_ext;

    }
    public function depositar($cantidad) {
        $this->saldo += $cantidad;
    }
    public function retirar($cantidad) {
        if ($this->saldo >= $cantidad) {
            $this->saldo -= $cantidad;
        } else {
            echo "No puede retirar esa cantidad de dinero";
        }

    }
    public function mostrarInfo() {
        echo "El titular de la cuenta bancaria es: " . $this->titular . "\nTipo de cuenta: ". $this->tipoCuenta. "\nSaldo actual: " .$this->saldo. "€";
    }
}
$cuentaBancariaAlex = new CuentaBancaria("Alex Freire Barriga", 100, "Ahorros");
$cuentaBancariaAlex->depositar(150);
$cuentaBancariaAlex->retirar(100);
$cuentaBancariaAlex->mostrarInfo();
?>