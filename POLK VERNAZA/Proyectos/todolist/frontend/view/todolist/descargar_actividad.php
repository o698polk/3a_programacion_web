<!DOCTYPE html>
<html lang="es">
<?php include '../componet/head.php'; ?>
<body>
<?php include '../componet/nav.php'; ?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <!-- Loading State -->
            <div id="loadingState" class="text-center py-5">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="visually-hidden">Cargando...</span>
                </div>
                <p class="mt-3 text-muted">Preparando actividad para descargar...</p>
            </div>

            <!-- Content (Hidden initially) -->
            <div id="contentDownload" style="display: none;">
                <!-- Header Actions -->
                <div class="d-flex justify-content-between align-items-center mb-4 no-print">
                    <h2 class="mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-printer text-primary me-2" viewBox="0 0 16 16">
                            <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                            <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
                        </svg>
                        Descargar / Imprimir Actividad
                    </h2>
                    <div>
                        <button onclick="imprimirActividad()" class="btn btn-primary btn-lg me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-printer-fill me-2" viewBox="0 0 16 16">
                                <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                                <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                            </svg>
                            Imprimir
                        </button>
                        <a href="index.php" class="btn btn-outline-secondary btn-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left me-1" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                            </svg>
                            Volver
                        </a>
                    </div>
                </div>

                <!-- Printable Content -->
                <div id="DescargarActividad" class="print-area">
                    <div class="card shadow-lg border-0">
                        <!-- Header -->
                        <div class="card-header bg-gradient-primary text-white py-4 print-header">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h1 class="mb-2 h3" id="print_actividad_title">Actividad</h1>
                                    <p class="mb-0 opacity-75">Reporte de Actividad</p>
                                </div>
                                <div class="col-md-4 text-md-end">
                                    <div class="badge-container">
                                        <span class="badge bg-light text-dark mb-2 d-inline-block" id="print_estado_badge">Estado</span>
                                        <div><small class="opacity-75">ID: <span id="print_actividad_id">#000</span></small></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card-body p-4 p-md-5">
                            <!-- Info Grid -->
                            <div class="row mb-4">
                                <div class="col-md-6 mb-3">
                                    <div class="info-item">
                                        <strong class="text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-tags me-1" viewBox="0 0 16 16">
                                                <path d="M3 2v4.586l7 7L14.586 9l-7-7H3zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2z"/>
                                                <path d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z"/>
                                            </svg>
                                            Tipo:
                                        </strong>
                                        <span id="print_tipo">-</span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="info-item">
                                        <strong class="text-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-clipboard-check me-1" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                            </svg>
                                            Estado:
                                        </strong>
                                        <span id="print_estado">-</span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="info-item">
                                        <strong class="text-info">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-calendar-plus me-1" viewBox="0 0 16 16">
                                                <path d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
                                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                            </svg>
                                            Creación:
                                        </strong>
                                        <span id="print_fecha_creacion">-</span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="info-item">
                                        <strong class="text-warning">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-clock-history me-1" viewBox="0 0 16 16">
                                                <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                                                <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                                                <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                                            </svg>
                                            Actualización:
                                        </strong>
                                        <span id="print_fecha_actualizacion">-</span>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4">

                            <!-- Description -->
                            <div class="description-section">
                                <h5 class="text-primary mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-file-text me-2" viewBox="0 0 16 16">
                                        <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                                    </svg>
                                    Descripción Detallada
                                </h5>
                                <div class="description-box p-4 bg-light rounded">
                                    <p class="mb-0 text-justify" id="print_descripcion">Descripción de la actividad...</p>
                                </div>
                            </div>

                            <!-- Footer Info (Only for Print) -->
                            <div class="print-only mt-5 pt-4 border-top">
                                <div class="row">
                                    <div class="col-6">
                                        <small class="text-muted">Generado el: <span id="print_fecha_generacion"></span></small>
                                    </div>
                                    <div class="col-6 text-end">
                                        <small class="text-muted">Sistema de Gestión de Tareas</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../componet/footer.php'; ?>

<style>
    body {
        background-color: #f8f9fa;
    }
    
    .bg-gradient-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    
    .card {
        border-radius: 15px;
    }
    
    .info-item {
        padding: 10px;
        background-color: #f8f9fa;
        border-left: 3px solid #667eea;
        border-radius: 5px;
    }
    
    .description-box {
        border-left: 4px solid #667eea;
    }
    
    .text-justify {
        text-align: justify;
        line-height: 1.8;
    }
    
    /* Print Styles */
    @media print {
        body {
            background-color: white !important;
        }
        
        .no-print {
            display: none !important;
        }
        
        .print-only {
            display: block !important;
        }
        
        .card {
            box-shadow: none !important;
            border: 1px solid #ddd !important;
            page-break-inside: avoid;
        }
        
        .print-header {
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
            color-adjust: exact;
        }
        
        .bg-gradient-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }
        
        .info-item {
            page-break-inside: avoid;
            background-color: #f8f9fa !important;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }
        
        .description-box {
            background-color: #f8f9fa !important;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }
    }
    
    .print-only {
        display: none;
    }
</style>

<script>
    (function() {
        'use strict';
        
        // Get ID from URL
        const urlParams = new URLSearchParams(window.location.search);
        const id = urlParams.get('id');
        
        if (!id) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'No se proporcionó un ID válido',
                confirmButtonText: 'Aceptar'
            }).then(() => {
                window.location.href = 'index.php';
            });
            return;
        }
        
        // Load activity data
        $.ajax({
            url: '../../../backend/api/endpoint.php',
            type: 'GET',
            dataType: 'json',
            data: {
                obtener_actividad_por_id: true,
                id: id
            },
            success: function(response) {
                console.log(response);
                if (response.success) {
                    const actividad = response.data;
                    
                    // Populate data
                    $('#print_actividad_id').text('#' + actividad.id);
                    $('#print_actividad_title').text(actividad.actividad);
                    $('#print_descripcion').text(actividad.descripcion);
                    $('#print_tipo').text(actividad.tipo);
                    $('#print_estado').text(actividad.estado);
                    $('#print_fecha_creacion').text(actividad.fecha_de_creacion);
                    $('#print_fecha_actualizacion').text(actividad.fecha_de_actualizacion);
                    
                    // Estado badge with colors
                    const estadoBadge = $('#print_estado_badge');
                    estadoBadge.text(actividad.estado);
                    switch(actividad.estado.toLowerCase()) {
                        case 'completado':
                            estadoBadge.removeClass().addClass('badge bg-success mb-2 d-inline-block');
                            break;
                        case 'pendiente':
                            estadoBadge.removeClass().addClass('badge bg-warning text-dark mb-2 d-inline-block');
                            break;
                        case 'en progreso':
                            estadoBadge.removeClass().addClass('badge bg-info mb-2 d-inline-block');
                            break;
                        default:
                            estadoBadge.removeClass().addClass('badge bg-secondary mb-2 d-inline-block');
                    }
                    
                    // Set generation date
                    const now = new Date();
                    const dateStr = now.toLocaleDateString('es-ES', { 
                        year: 'numeric', 
                        month: 'long', 
                        day: 'numeric',
                        hour: '2-digit',
                        minute: '2-digit'
                    });
                    $('#print_fecha_generacion').text(dateStr);
                    
                    // Show content, hide loading
                    $('#loadingState').hide();
                    $('#contentDownload').fadeIn();
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Actividad no encontrada',
                        confirmButtonText: 'Aceptar'
                    }).then(() => {
                        window.location.href = 'index.php';
                    });
                }
            },
            error: function(error) {
                console.log(error);
                Swal.fire({
                    icon: 'error',
                    title: 'Error de conexión',
                    text: 'No se pudo cargar la actividad',
                    confirmButtonText: 'Aceptar'
                }).then(() => {
                    window.location.href = 'index.php';
                });
            }
        });
    })();
    
    // Print function
    function imprimirActividad() {
        window.print();
    }
</script>

</body>
</html>
