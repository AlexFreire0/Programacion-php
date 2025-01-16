<?php 
class CuentaBancaria {
    public $titular;
    public $saldo;
    public $tipoDeCuenta;
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
        echo "El titular de la cuenta bancaria es: " . $this->titular . "\nTipo de cuenta: ". $this->tipoDeCuenta. "\nSaldo actual: " .$this->saldo. "€";
    }
}
$cuentaBancariaAlex = new CuentaBancaria;
$cuentaBancariaAlex->titular = "Alex Freire Barriga";
$cuentaBancariaAlex->saldo = 100;
$cuentaBancariaAlex->tipoDeCuenta = "Ahorros";
$cuentaBancariaAlex->depositar(150);
$cuentaBancariaAlex->retirar(100);
$cuentaBancariaAlex->mostrarInfo();
?>