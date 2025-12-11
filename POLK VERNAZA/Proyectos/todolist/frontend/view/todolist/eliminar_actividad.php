<!DOCTYPE html>
<html lang="es">
<?php include '../componet/head.php'; ?>
<body>
<?php include '../componet/nav.php'; ?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Loading State -->
            <div id="loadingState" class="text-center py-5">
                <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;" role="status">
                    <span class="visually-hidden">Cargando...</span>
                </div>
                <p class="mt-3 text-muted">Cargando información de la actividad...</p>
            </div>

            <!-- Content (Hidden initially) -->
            <div id="contentDelete" style="display: none;">
                <!-- Header -->
                <div class="text-center mb-4">
                    <div class="warning-icon mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-exclamation-triangle-fill text-danger" viewBox="0 0 16 16">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                    </div>
                    <h2 class="text-danger mb-2">¿Eliminar Actividad?</h2>
                    <p class="text-muted">Esta acción no se puede deshacer. Por favor, revisa los detalles antes de confirmar.</p>
                </div>

                <!-- Activity Details Card -->
                <div class="card shadow-lg border-danger mb-4">
                    <div class="card-header bg-danger text-white py-3">
                        <h5 class="mb-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-info-circle me-2" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                            </svg>
                            Información de la Actividad
                        </h5>
                    </div>
                    
                    <div class="card-body p-4">
                        <!-- Activity Info -->
                        <div class="activity-detail mb-3">
                            <div class="row">
                                <div class="col-4 col-md-3">
                                    <strong class="text-muted">ID:</strong>
                                </div>
                                <div class="col-8 col-md-9">
                                    <span id="delete_actividad_id">#000</span>
                                </div>
                            </div>
                        </div>

                        <div class="activity-detail mb-3">
                            <div class="row">
                                <div class="col-4 col-md-3">
                                    <strong class="text-muted">Título:</strong>
                                </div>
                                <div class="col-8 col-md-9">
                                    <span id="delete_actividad_title" class="fw-bold">-</span>
                                </div>
                            </div>
                        </div>

                        <div class="activity-detail mb-3">
                            <div class="row">
                                <div class="col-4 col-md-3">
                                    <strong class="text-muted">Descripción:</strong>
                                </div>
                                <div class="col-8 col-md-9">
                                    <span id="delete_descripcion">-</span>
                                </div>
                            </div>
                        </div>

                        <div class="activity-detail mb-3">
                            <div class="row">
                                <div class="col-4 col-md-3">
                                    <strong class="text-muted">Tipo:</strong>
                                </div>
                                <div class="col-8 col-md-9">
                                    <span id="delete_tipo" class="badge bg-secondary">-</span>
                                </div>
                            </div>
                        </div>

                        <div class="activity-detail mb-3">
                            <div class="row">
                                <div class="col-4 col-md-3">
                                    <strong class="text-muted">Estado:</strong>
                                </div>
                                <div class="col-8 col-md-9">
                                    <span id="delete_estado_badge" class="badge bg-secondary">-</span>
                                </div>
                            </div>
                        </div>

                        <div class="activity-detail mb-3">
                            <div class="row">
                                <div class="col-4 col-md-3">
                                    <strong class="text-muted">Creada:</strong>
                                </div>
                                <div class="col-8 col-md-9">
                                    <span id="delete_fecha_creacion">-</span>
                                </div>
                            </div>
                        </div>

                        <div class="activity-detail">
                            <div class="row">
                                <div class="col-4 col-md-3">
                                    <strong class="text-muted">Actualizada:</strong>
                                </div>
                                <div class="col-8 col-md-9">
                                    <span id="delete_fecha_actualizacion">-</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Confirmation Section -->
                <div class="card shadow border-0 mb-4">
                    <div class="card-body p-4">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="confirmCheck">
                            <label class="form-check-label fw-bold" for="confirmCheck">
                                Confirmo que deseo eliminar esta actividad permanentemente
                            </label>
                        </div>
                        
                        <div class="alert alert-warning d-flex align-items-center" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-shield-exclamation flex-shrink-0 me-2" viewBox="0 0 16 16">
                                <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                                <path d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.553.553 0 0 1-1.1 0L7.1 4.995z"/>
                            </svg>
                            <div>
                                <strong>¡Advertencia!</strong> Esta acción es irreversible. Una vez eliminada, no podrás recuperar esta actividad.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="d-grid gap-3 d-md-flex justify-content-md-center">
                    <button type="button" id="btnConfirmDelete" class="btn btn-danger btn-lg px-5" disabled>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill me-2" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                        </svg>
                        Sí, eliminar actividad
                    </button>
                    <a href="index.php" class="btn btn-outline-secondary btn-lg px-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-circle me-2" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                        Cancelar
                    </a>
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
    
    .warning-icon {
        animation: pulse 2s infinite;
    }
    
    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
    }
    
    .card {
        border-radius: 15px;
    }
    
    .activity-detail {
        padding: 12px;
        border-bottom: 1px solid #e9ecef;
    }
    
    .activity-detail:last-child {
        border-bottom: none;
    }
    
    .form-check-input:checked {
        background-color: #dc3545;
        border-color: #dc3545;
    }
    
    .btn-lg {
        padding: 12px 30px;
        font-size: 1.1rem;
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
        
        // Checkbox confirmation
        const confirmCheck = document.getElementById('confirmCheck');
        const btnConfirmDelete = document.getElementById('btnConfirmDelete');
        
        if (confirmCheck && btnConfirmDelete) {
            confirmCheck.addEventListener('change', function() {
                btnConfirmDelete.disabled = !this.checked;
            });
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
                    $('#delete_actividad_id').text('#' + actividad.id);
                    $('#delete_actividad_title').text(actividad.actividad);
                    $('#delete_descripcion').text(actividad.descripcion);
                    $('#delete_tipo').text(actividad.tipo);
                    $('#delete_fecha_creacion').text(actividad.fecha_de_creacion);
                    $('#delete_fecha_actualizacion').text(actividad.fecha_de_actualizacion);
                    
                    // Estado badge with colors
                    const estadoBadge = $('#delete_estado_badge');
                    estadoBadge.text(actividad.estado);
                    switch(actividad.estado.toLowerCase()) {
                        case 'completado':
                            estadoBadge.removeClass().addClass('badge bg-success');
                            break;
                        case 'pendiente':
                            estadoBadge.removeClass().addClass('badge bg-warning text-dark');
                            break;
                        case 'en progreso':
                            estadoBadge.removeClass().addClass('badge bg-info');
                            break;
                        default:
                            estadoBadge.removeClass().addClass('badge bg-secondary');
                    }
                    
                    // Show content, hide loading
                    $('#loadingState').hide();
                    $('#contentDelete').fadeIn();
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
        
        // Delete button click handler
        if (btnConfirmDelete && !btnConfirmDelete.dataset.initialized) {
            btnConfirmDelete.dataset.initialized = 'true';
            btnConfirmDelete.addEventListener('click', function() {
                // Disable button and show loading
                this.disabled = true;
                this.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Eliminando...';
                
                // Make delete request
                $.ajax({
                    url: '../../../backend/api/endpoint.php',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        eliminar_actividad: true,
                        id: id
                    },
                    timeout: 10000,
                    success: function(response) {
                        console.log(response);
                        if (response.success) {
                            Swal.fire({
                                icon: 'success',
                                title: '¡Eliminada!',
                                text: 'La actividad ha sido eliminada exitosamente',
                                confirmButtonText: 'Aceptar',
                                timer: 2000
                            }).then(() => {
                                window.location.href = 'index.php';
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: response.message || 'No se pudo eliminar la actividad',
                                confirmButtonText: 'Aceptar'
                            });
                            // Re-enable button
                            btnConfirmDelete.disabled = false;
                            btnConfirmDelete.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill me-2" viewBox="0 0 16 16"><path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/></svg>Sí, eliminar actividad';
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                        let errorMsg = 'Error de conexión';
                        if (status === 'timeout') {
                            errorMsg = 'La solicitud ha tardado demasiado. Por favor, intenta nuevamente.';
                        }
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: errorMsg,
                            confirmButtonText: 'Aceptar'
                        });
                        // Re-enable button
                        btnConfirmDelete.disabled = false;
                        btnConfirmDelete.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill me-2" viewBox="0 0 16 16"><path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/></svg>Sí, eliminar actividad';
                    }
                });
            });
        }
    })();
</script>

</body>
</html>
