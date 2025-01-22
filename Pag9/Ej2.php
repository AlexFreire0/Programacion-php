<?php 
class CuentaBancaria {
    private $titular;
    private $saldo;
    private $tipoCuenta;
    public function __construct($titular_ext, $saldo_ext, $tipoCuenta_ext)
    {
        $this->titular= $titular_ext;
        $this->saldo= 0;
        $this->tipoCuenta= $tipoCuenta_ext;

    }
    public function depositar($cantidad) {
        $this->saldo += $cantidad;
    }
    public function retirar($cantidad) {
        if ($this->verificarSaldoSuficiente($cantidad)) {
            $this->saldo -= $cantidad;
        } else {
            echo "No puede retirar esa cantidad de dinero debido a que no hay suficiente dinero.\n";
        }
    }
    private function verificarSaldoSuficiente($cantidad) {
        return $this->saldo >= $cantidad;
    }
    public function mostrarInfo() {
        echo "El titular de la cuenta bancaria es: " . $this->titular . "\nTipo de cuenta: ". $this->tipoCuenta. "\nSaldo actual: " .$this->saldo. "€";
    }
}
$cuentaBancariaAlex = new CuentaBancaria("Alex Freire Barriga", 100, "Ahorros");
$cuentaBancariaAlex->depositar(150);
$cuentaBancariaAlex->retirar(180);
$cuentaBancariaAlex->retirar(110);
$cuentaBancariaAlex->mostrarInfo();
?>