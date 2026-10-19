<?php

// crear la conexion con la base de datos
$dsn = "mysql:host=localhost;dbname=tienda;charset=utf8mb4";
$user = "root";
$password = "";

// arreglo con constantes de configuracion de PDO
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
];

// instanciamos la clase PDO
try {
    $pdo = new PDO($dsn, $user, $password, $options);
    echo "Conexion establecida";

} catch (PDOException $e) {
    die("Error de conexion : " . $e->getMessage());
}


//guardar en la base de datos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre']);
    $precio = (float) $_POST['precio'];
    $stock = (int) $_POST['stock'];

    if (!empty($nombre) && $precio > 0 && $stock > 0) {

        // llamar a la base de datos
        $stmt = $pdo->prepare("INSERT INTO productos (nombre,precio,stock) VALUES (:nombre,:precio,:stock)");
        $stmt->execute([
            ':nombre' => $nombre,
            ':precio' => $precio,
            ':stock' => $stock
        ]);
    } 
    else {
        echo "Error al guardar producto";
    }

}

// hacer consulta a la base de datos
$stmt = $pdo->query("SELECT * FROM productos ORDER BY id DESC"); 
$productos = $stmt->fetchAll();

?>
<!-- -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer CRUD con PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">

        <h2>Gestion de productos</h2>
        <!-- FORMULARIO DE CREACION DE PRODUCTOS  -->
        <form action="ejercicio1.php" method="post">

            <label>Nombre del producto: </label>
            <input type="text" name="nombre" id="" placeholder="Nombre del producto">

            <label>Precio ($): </label>
            <input type="number" name="precio" id="" placeholder="Precio del producto">

            <label>Stock: </label>
            <input type="number" name="stock" id="" placeholder="Cantidad del producto">
            <br> <br>
            <button type="submit" class="btn-guardar">Guardar producto</button>
        </form>

    <!--TABLA PARA VISUALIZAR INFORMACION-->
    <h3>Lista de productos guardados</h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Creado_en</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($productos) >0)  : ?>
                <?php foreach ($productos as $item) : ?>
                 <tr>
                    <td><?= $item['id']?></td>
                    <td><?= htmlspecialchars($item['nombre'])?></td>
                    <td><?= number_format($item['precio'], 2)?></td>
                    <td><?= $item['stock']?></td>
                    <td><?= $item['creado_en'] ?></td>
                 </tr>
                <?php endforeach;?>    
             <?php else: ?>  
                <tr>
                  <td colspan="5" style="text-align : center;">No hay productos registrados</td>
                </tr>
             <?php endif; ?>
        </tbody>
    </table>



    </div>


</body>

</html>