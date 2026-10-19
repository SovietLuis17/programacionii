<?php

// definir la clase

class Producto {

//propiedades

private $nombre;
private $precio;

private $stock;


//Metodos o comportamientos

//metodo constructor 

/*
El método constructor es una función especial dentro de una clase que se ejecuta 
automáticamente en el momento exacto en que se crea un nuevo objeto (instancia) de esa clase. */

public function __construct($nombre , $precio , $stock) {

$this->nombre = $nombre;
$this->precio = $precio;
$this->stock = $stock;

}

public function mostrarInfo() {
    return "{$this->nombre} - {$this->precio} <br>";
}

public function vender($cantidad) {
 if ($this->stock >= $cantidad) {
    $this->stock -= $cantidad;
    return "Venta existosa <br>";
 }
 else {
    return "Stock Insuficiente <br> ";
 }

}

}


// instanciar la clase 

$producto = new Producto("Telefono",1200,40);
echo $producto->mostrarInfo();
echo $producto->vender(2);



?>