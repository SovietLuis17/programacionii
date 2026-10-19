<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Boostrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <h1 class="page-header">Primer formulario </h1>

        <form action="procesarFormulario.php" method="POST" id="formulario">
            <div class="form-group">
                <label for="">Nombre : </label>
                <input type="text" name="txtNombre" id="nombre" required class="form-control">
            </div>
            <div class="form-group">
                <label for="">Ocupacion : </label>
                <select name="ocupacion" id="" class="form-control">
                    <option value="ingInformatica">Ingeniero en Informatica </option>
                    <option value="medico">Medico</option>
                    <option value="abogado">Abogado</option>
                    <option value="arquitecto">Arquitecto</option>
                    <option value="contador">Contador</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Sexo : </label>
                <div class="radio">
                    <label for=""><input type="radio" name="sexo" value="Hombre"> Hombre </label>
                </div>
                <div class="radio">
                    <label for=""><input type="radio" name="sexo" value="Mujer"> Mujer </label>
                </div>
            </div>
            <div class="form-group">
                <label for=""> Acerca de mí :</label>
                <textarea name="acerca_de_mi" class="form-control"
                    placeholder="Soy divertido, sociable y me gusta programar"></textarea>
            </div>
            <div class="well well-sm">
                <h6>Ingrese los datos de sus hijos : </h6>
                <?php for ($i = 1; $i <= 3; $i++): ?>
                    <div class="form-group">
                        <label for="">Hijo | N°<?php echo $i; ?> </label>
                        <input type="text" name="hijos[]" class="form-control" placeholder="Nombre y Apellido">
                    </div>
                <?php endfor; ?>
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label for=""><input type="checkbox" name="acepto" id="" value="acepto" required> Aceptar los
                        terminos</label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {

       var form = $("#formulario")
       form.submit(function(){
            $.ajax({
                url: "procesarFormulario.php",
                method: "POST",
                data: form.serialize(),
                //data: {
                //    nombre: $("input[name='txtNombre']").val(),
                //    ocupacion: $("select[name='ocupacion']").val(),
                //    sexo: $("input[name='sexo']").val(),
                //    acerca_de_mi: $("textarea[name='acerca_de_mi']").val(),
                //},
                success : function(r) {
                  alert(r.response)
                },
                dataType: "json"
            })
            return false;
        })
    })
</script>

</html>