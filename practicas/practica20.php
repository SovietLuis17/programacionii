<?php
// Datos de ejemplo: arreglo de platos
$platos = [
    ['nombre' => 'Salmón', 'precio' => 30, 'disponible' => true, 'vegetariano' => false, 'tieneMariscos' => true],
    ['nombre' => 'Ensalada', 'precio' => 15, 'disponible' => true, 'vegetariano' => true, 'tieneMariscos' => false],
    ['nombre' => 'Pasta', 'precio' => 20, 'disponible' => true, 'vegetariano' => false, 'tieneMariscos' => false],
    ['nombre' => 'Sushi', 'precio' => 28, 'disponible' => true, 'vegetariano' => false, 'tieneMariscos' => true],
    ['nombre' => 'Pizza', 'precio' => 22, 'disponible' => false, 'vegetariano' => false, 'tieneMariscos' => false],
    ['nombre' => 'Hamburguesa', 'precio' => 18, 'disponible' => true, 'vegetariano' => false, 'tieneMariscos' => false],
    ['nombre' => 'Tofu Salteado', 'precio' => 24, 'disponible' => true, 'vegetariano' => true, 'tieneMariscos' => false],
];

// Calcular estadísticas
$total_platos = count($platos);
$disponibles = array_filter($platos, fn($p) => $p['disponible']);
$vegetarianos = array_filter($platos, fn($p) => $p['vegetariano']);
$con_mariscos = array_filter($platos, fn($p) => $p['tieneMariscos']);
$precio_promedio = array_sum(array_column($platos, 'precio')) / $total_platos;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🍽️ Menú del Restaurante - Bootstrap</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 20px;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }
        
        .header-bg {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            padding: 2rem 0;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }
        
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        .table-container {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .badge-vegetariano {
            background: linear-gradient(135deg, #28a745, #20c997);
            border: none;
        }
        
        .badge-mariscos {
            background: linear-gradient(135deg, #17a2b8, #1abc9c);
            border: none;
        }
        
        .status-disponible {
            background: linear-gradient(135deg, #28a745, #20c997);
        }
        
        .status-agotado {
            background: linear-gradient(135deg, #dc3545, #e83e8c);
            opacity: 0.9;
        }
        
        .precio-highlight {
            color: #e63946;
            font-weight: 700;
            font-size: 1.1rem;
        }
        
        .plato-nombre {
            font-weight: 600;
            color: #2c3e50;
            font-size: 1.15rem;
        }
        
        footer {
            background: #2c3e50;
            color: rgba(255, 255, 255, 0.8);
            padding: 20px 0;
            margin-top: 40px;
            border-radius: 15px 15px 0 0;
        }
        
        @media (max-width: 768px) {
            .stats-container .col-md-3 {
                margin-bottom: 15px;
            }
            
            .header-bg h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header con título y estadísticas -->
    <header class="header-bg mb-4">
        <div class="container">
            <div class="text-center mb-4">
                <h1 class="display-4 fw-bold">
                    <i class="bi bi-cup-straw"></i> Menú del Restaurante Chroma Lab
                </h1>
                <p class="lead opacity-90">Descubre nuestros deliciosos platos cuidadosamente preparados</p>
            </div>
            
            <!-- Tarjetas de estadísticas -->
            <div class="stats-container">
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="card bg-white text-center card-hover border-0 shadow-sm">
                            <div class="card-body p-3">
                                <div class="display-6 fw-bold text-primary mb-1"><?php echo $total_platos; ?></div>
                                <small class="text-muted">Total de Platos</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-white text-center card-hover border-0 shadow-sm">
                            <div class="card-body p-3">
                                <div class="display-6 fw-bold text-success mb-1"><?php echo count($disponibles); ?></div>
                                <small class="text-muted">Disponibles</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-white text-center card-hover border-0 shadow-sm">
                            <div class="card-body p-3">
                                <div class="display-6 fw-bold text-success mb-1"><?php echo count($vegetarianos); ?></div>
                                <small class="text-muted">Vegetarianos</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-white text-center card-hover border-0 shadow-sm">
                            <div class="card-body p-3">
                                <div class="display-6 fw-bold text-warning mb-1">$<?php echo number_format($precio_promedio, 1); ?></div>
                                <small class="text-muted">Precio Promedio</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Contenedor principal -->
    <div class="container">
        <!-- Filtro de visualización (opcional) -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-primary fw-bold">
                <i class="bi bi-list-ul me-2"></i>Lista de Platos
            </h2>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-outline-primary btn-sm">
                    <i class="bi bi-funnel me-1"></i>Filtrar
                </button>
                <button type="button" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-clockwise me-1"></i>Actualizar
                </button>
            </div>
        </div>

        <!-- Tabla responsive -->
        <div class="table-container bg-white p-3 mb-5">
            <div class="table-responsive">
                <table class="table table-hover table-striped align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th scope="col" class="ps-3">Plato</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Disponibilidad</th>
                            <th scope="col">Categoría</th>
                            <th scope="col">Alérgenos</th>
                            <th scope="col" class="text-end pe-3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($platos)): ?>
                            <tr>
                                <td colspan="6" class="text-center py-5">
                                    <div class="text-muted">
                                        <i class="bi bi-emoji-frown display-1 mb-3 d-block"></i>
                                        <h4>No hay platos disponibles</h4>
                                        <p class="mb-0">El menú está actualmente vacío</p>
                                    </div>
                                </td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($platos as $plato): ?>
                                <tr>
                                    <td class="ps-3">
                                        <div class="d-flex align-items-center">
                                            <div class="me-3">
                                                <?php if ($plato['vegetariano']): ?>
                                                    <i class="bi bi-leaf text-success fs-4"></i>
                                                <?php elseif ($plato['tieneMariscos']): ?>
                                                    <i class="bi bi-fish text-info fs-4"></i>
                                                <?php else: ?>
                                                    <i class="bi bi-cup-straw text-primary fs-4"></i>
                                                <?php endif; ?>
                                            </div>
                                            <div>
                                                <div class="plato-nombre"><?php echo htmlspecialchars($plato['nombre']); ?></div>
                                                <small class="text-muted">
                                                    <?php 
                                                        $tags = [];
                                                        if ($plato['vegetariano']) $tags[] = "🌱 Vegetariano";
                                                        if ($plato['tieneMariscos']) $tags[] = "🦐 Mariscos";
                                                        echo implode(" • ", $tags);
                                                    ?>
                                                </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="precio-highlight">$<?php echo number_format($plato['precio'], 2); ?></td>
                                    <td>
                                        <?php if ($plato['disponible']): ?>
                                            <span class="badge bg-success px-3 py-2 status-disponible">
                                                <i class="bi bi-check-circle me-1"></i>Disponible
                                            </span>
                                        <?php else: ?>
                                            <span class="badge bg-secondary px-3 py-2 status-agotado">
                                                <i class="bi bi-x-circle me-1"></i>Agotado
                                            </span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if ($plato['vegetariano']): ?>
                                            <span class="badge bg-success badge-vegetariano px-3 py-2">
                                                <i class="bi bi-leaf me-1"></i>Veg
                                            </span>
                                        <?php else: ?>
                                            <span class="badge bg-secondary px-3 py-2">
                                                <i class="bi bi-meat me-1"></i>Tradicional
                                            </span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if ($plato['tieneMariscos']): ?>
                                            <span class="badge bg-info badge-mariscos px-3 py-2">
                                                <i class="bi bi-exclamation-triangle me-1"></i>Mariscos
                                            </span>
                                        <?php else: ?>
                                            <span class="badge bg-success px-3 py-2">
                                                <i class="bi bi-check-circle me-1"></i>Sin alérgenos
                                            </span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-end pe-3">
                                        <div class="d-flex justify-content-end gap-2">
                                            <button class="btn btn-sm btn-outline-primary" title="Ver detalles">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success" title="Agregar a favoritos">
                                                <i class="bi bi-heart"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Leyenda de colores -->
        <div class="card border-0 mb-5">
            <div class="card-body bg-light rounded-3">
                <h5 class="mb-3 fw-bold text-muted"><i class="bi bi-info-circle me-2"></i>Leyenda</h5>
                <div class="d-flex flex-wrap gap-4">
                    <div>
                        <span class="badge bg-success me-2 mb-2"><i class="bi bi-check-circle me-1"></i>Disponible</span>
                    </div>
                    <div>
                        <span class="badge bg-secondary me-2 mb-2"><i class="bi bi-x-circle me-1"></i>Agotado</span>
                    </div>
                    <div>
                        <span class="badge bg-success badge-vegetariano me-2 mb-2"><i class="bi bi-leaf me-1"></i>Veg</span>
                    </div>
                    <div>
                        <span class="badge bg-info badge-mariscos me-2 mb-2"><i class="bi bi-fish me-1"></i>Mariscos</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-4">
        <div class="container">
            <p class="mb-2">
                <i class="bi bi-cup-straw me-2"></i>Chroma Lab Restaurante © <?php echo date('Y'); ?>
            </p>
            <p class="mb-0 small">
                <i class="bi bi-clock me-1"></i> Menú actualizado el <?php echo date('d/m/Y \a \l\a\s H:i'); ?>
            </p>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle (incluye Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Script para tooltips (opcional) -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        });
    </script>
</body>
</html>