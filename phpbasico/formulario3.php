<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container center">
         <h3 class="title">Formulario de Validacion - AJAX</h3>
    </div>

    <div class="container">
        <form method="POST" action="procesarFormulario3.php" id="formulario">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" aria-describedby="name"
                    name="txtNombre">
             <span data-key="nombre" class="badge bg-danger text-dark"></span>
            </div>
            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="txtCorreo">
                <div id="emailHelp" class="form-text">No olvides tu correo, pelotudo.</div>
                 <span data-key="correo" class="badge bg-danger text-dark"></span>
            </div>
            <div class="mb-3">
                <label for="web"> Mi pagina web </label>
                <input type="text" name="txtWeb" id="" class="form-control">
                 <span data-key="web" class="badge bg-danger text-dark"></span>
            </div>
            <div class="mb-3">
                <label for="fechaNac" class="form-label">Mi fecha de nacimiento : </label>
                <input type="text" name="txtFecha" class="form-control">
                 <span data-key="fechanac" class="badge bg-danger text-dark"></span>
            </div>
            <div class="mb-3 form-check">
                <label for=""><input type="checkbox" name="txtAcepto" id="" value="1"> Acepto las condiciones de registro</label>
            </div> 
             <span data-key="acepto" class="badge bg-danger text-dark"></span>
            <button type="submit" class="btn btn-primary">Enviar</button>
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
         form.find('bg-danger').text('');
            $.ajax({
                url: "procesarFormulario3.php",
                method: "POST",
                data: form.serialize(),
                success : function(r) {
                  if (!r.response) {
                     for(var k in r.errors) {
                         $("span[data-key='" + k +  "']").text(r.errors[k]);
                     }
                  
                  }
                },
                dataType: "json"
            })
            return false;
        })
    })
</script>

</html>