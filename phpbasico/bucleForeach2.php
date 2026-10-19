<?php
$equipos = [
    "rojo" => ["Ana", "Luis"],
    "azul" => ["Carlos", "María"]
];

foreach ($equipos as $color => $miembros) {
    echo "Equipo $color: <br>";
    foreach ($miembros as $nombre) {
        echo "  - $nombre <br>";
    }
}
?>