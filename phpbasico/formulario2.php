<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario , enviando archivos al servidor </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h2 class="page-header">Formulario con archivos</h2>
        <form action="procesarFormulario2.php" method="post" id="formulario" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Nombre : </label>
                <input type="text" name="nombre" id="" class="form-control">
            </div>
            <?php for ($i = 1 ;$i <=3;$i++): ?>
            <div class="form-group">
                <label for="">Archivo <?php echo $i; ?></label>
                <input type="file" name="archivo[]" id="" class="form-control">
            </div>
           <?php endfor; ?>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>



    </div>

</body>

</html>