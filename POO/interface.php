<?php

// interfaces
interface MetodoPago {
public function pagar(float $monto): bool;
public function obtenerNombre(): string;
}

class  TarjetaCredito implements MetodoPago {
public function pagar(float $monto): bool {
echo "Pagando $$monto con tarjeta\n";
return true;
}
public function obtenerNombre(): string {
return "Tarjeta de Crédito";
}
}

class TransferenciaBancaria implements MetodoPago {
public function pagar(float$monto): bool {
echo "Transfiriendo $$monto\n";
return true;
}
public function obtenerNombre(): string {
return "Transferencia Bancaria";
}

}

function procesarPago(MetodoPago $metodo, float$monto) {
echo "Usando: " . $metodo->obtenerNombre() . "\n";
return $metodo->pagar($monto);
}

$tarjeta = new TarjetaCredito();
procesarPago($tarjeta, 100);




?>