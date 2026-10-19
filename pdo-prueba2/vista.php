<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- Bulma CDN -->
    <link rel="stylesheet" href="bulma.min.css">
</head>
<body>

  <?php if(!empty($mensajeError)) : ?> 
     <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-one-third">
                    
                    <!-- CARD ROJA -->
                    <div class="card has-background-danger has-text-white">
                        <header class="card-header">
                            <p class="card-header-title has-text-white is-size-5">
                                <span class="icon-text">
                                    <span class="icon"><i class="fas fa-exclamation-circle"></i></span>
                                    <span>Notificación Importante</span>
                                </span>
                            </p>
                        </header>
                        
                        <div class="card-content">
                            <div class="content has-text-white">
                                <p><?php echo $mensajeError ?></p>
                                <p class="is-size-7 has-text-white-ter">Última actualización: 26/05/2026</p>
                            </div>
                        </div>
                        <footer class="card-footer">
                            <a href="#" class="card-footer-item has-text-white">Aceptar</a>
                            <a href="#" class="card-footer-item has-text-white">Cerrar</a>
                        </footer>
                    
                    </div>

                </div>
            </div>
        </div>
    </section>
  <?php endif; ?>

    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half-desktop is-three-quarters-tablet">
                    <h1 class="title has-text-centered">Registro</h1>
                    <form action="procesar.php" method="POST">
                        
                        <!-- Campo Título -->
                        <div class="field">
                            <label class="label" for="titulo">Título</label>
                            <div class="control has-icons-left">
                                <input class="input" type="text" id="titulo" name="titulo" placeholder="Ej: Mi primera publicación">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-heading"></i> <!-- Opcional: Font Awesome -->
                                </span>
                            </div>
                        </div>

                        <!-- Campo Texto Amplio -->
                        <div class="field">
                            <label class="label" for="descripcion">Descripción</label>
                            <div class="control">
                                <textarea class="textarea" id="descripcion" name="descripcion" placeholder="Escribe aquí el contenido..." ></textarea>
                            </div>
                        </div>

                        <!-- Botón -->
                        <div class="field is-grouped is-justify-content-center mt-5">
                            <div class="control">
                                <button class="button is-link is-medium" type="submit">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>