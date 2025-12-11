<!DOCTYPE html>
<html lang="es">

<?php include '../componet/head.php'; ?>
<?php include '../componet/nav.php'; ?>

    <body>
        <div class="container cont_todolist">
            <h1 class="text-center mb-4">LISTAS DE ACTIVIDADES  <?php echo $_SESSION['nombre']; ?></h1>
            
            <!-- Search and Filter Section -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregarActividad">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle me-2" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                        Agregar Actividad
                    </button>
                </div>
                <div class="col-md-6 text-end">
                    <div class="d-flex justify-content-end align-items-center gap-2">
                        <label for="itemsPerPage" class="text-white me-2">Mostrar:</label>
                        <select id="itemsPerPage" class="form-select form-select-sm" style="width: auto;">
                            <option value="5">5</option>
                            <option value="10" selected>10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-dark table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Actividad</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            <th>Tipo</th>
                            <th>Fecha de Creación</th>
                            <th>Fecha de Actualización</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <!-- Datos cargados dinámicamente -->
                    </tbody>
                </table>
            </div>

            <!-- Pagination Info and Controls -->
            <div class="row mt-3">
                <div class="col-md-6">
                    <p class="text-white" id="paginationInfo">
                        Mostrando 0 de 0 actividades
                    </p>
                </div>
                <div class="col-md-6">
                    <nav aria-label="Navegación de actividades">
                        <ul class="pagination pagination-sm justify-content-end mb-0" id="paginationControls">
                            <!-- Controles de paginación generados dinámicamente -->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Modal Agregar Actividad -->
        <div class="modal fade" id="modalAgregarActividad" tabindex="-1" aria-labelledby="modalAgregarActividadLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary text-white">
                        <h5 class="modal-title" id="modalAgregarActividadLabel">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-plus-circle me-2" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                            Nueva Actividad
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="formulario_crear_actividad_modal">
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="crear_actividad" class="form-label">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square me-1" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg>
                                        Título de la Actividad
                                    </label>
                                    <input type="text" class="form-control" id="crear_actividad" name="crear_actividad" required placeholder="Ej: Completar informe mensual">
                                </div>

                                <div class="col-12">
                                    <label for="crear_descripcion" class="form-label">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-text-paragraph me-1" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm4-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
                                        </svg>
                                        Descripción
                                    </label>
                                    <textarea class="form-control" id="crear_descripcion" name="crear_descripcion" rows="4" required placeholder="Describe los detalles de la actividad..."></textarea>
                                </div>

                                <div class="col-md-6">
                                    <label for="crear_estado" class="form-label">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check me-1" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                        </svg>
                                        Estado
                                    </label>
                                    <select class="form-select" id="crear_estado" name="crear_estado" required>
                                        <option value="">Seleccione un estado</option>
                                        <option value="Pendiente">Pendiente</option>
                                        <option value="En Progreso">En Progreso</option>
                                        <option value="Completado">Completado</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="crear_tipo" class="form-label">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tags me-1" viewBox="0 0 16 16">
                                            <path d="M3 2v4.586l7 7L14.586 9l-7-7H3zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2z"/>
                                            <path d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z"/>
                                        </svg>
                                        Tipo
                                    </label>
                                    <select class="form-select" id="crear_tipo" name="crear_tipo" required>
                                        <option value="">Seleccione un tipo</option>
                                        <option value="Personal">Personal</option>
                                        <option value="Trabajo">Trabajo</option>
                                        <option value="Estudio">Estudio</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg me-1" viewBox="0 0 16 16">
                                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                </svg>
                                Cancelar
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg me-1" viewBox="0 0 16 16">
                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                </svg>
                                Crear Actividad
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Ver Actividad -->
        <div class="modal fade" id="modalVerActividad" tabindex="-1" aria-labelledby="modalVerActividadLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary text-white">
                        <h5 class="modal-title" id="modalVerActividadLabel">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-earmark-text me-2" viewBox="0 0 16 16">
                                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                            </svg>
                            Detalles de Actividad
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Loading State -->
                        <div id="modalLoadingState" class="text-center py-4">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Cargando...</span>
                            </div>
                            <p class="mt-2 text-muted">Cargando detalles...</p>
                        </div>

                        <!-- Content -->
                        <div id="modalContent" style="display: none;">
                            <!-- Header Info -->
                            <div class="mb-4">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div class="flex-grow-1">
                                        <h4 class="mb-2" id="modal_actividad_title">Actividad</h4>
                                        <div class="d-flex gap-2 flex-wrap">
                                            <span class="badge" id="modal_estado_badge">Estado</span>
                                            <span class="badge bg-secondary" id="modal_tipo_badge">Tipo</span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <small class="text-muted">ID: <span id="modal_actividad_id" class="fw-bold">#000</span></small>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <!-- Description -->
                            <div class="mb-4">
                                <h6 class="text-primary mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-file-text me-1" viewBox="0 0 16 16">
                                        <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                                    </svg>
                                    Descripción
                                </h6>
                                <p class="text-justify mb-0" id="modal_descripcion_text">-</p>
                            </div>

                            <!-- Metadata Grid -->
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="info-card p-3 border rounded">
                                        <div class="d-flex align-items-center">
                                            <div class="icon-box bg-primary bg-opacity-10 text-primary me-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-calendar-plus" viewBox="0 0 16 16">
                                                    <path d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
                                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <small class="text-muted d-block">Fecha de Creación</small>
                                                <strong id="modal_fecha_creacion">-</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="info-card p-3 border rounded">
                                        <div class="d-flex align-items-center">
                                            <div class="icon-box bg-success bg-opacity-10 text-success me-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                                    <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                                                    <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                                                    <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <small class="text-muted d-block">Última Actualización</small>
                                                <strong id="modal_fecha_actualizacion">-</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" id="modal_btn_editar" class="btn btn-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square me-1" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                            Editar
                        </a>
                        <a href="#" id="modal_btn_descargar" class="btn btn-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download me-1" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                            </svg>
                            Descargar
                        </a>
                        <a href="#" id="modal_btn_eliminar" class="btn btn-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash me-1" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                            </svg>
                            Eliminar
                        </a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg me-1" viewBox="0 0 16 16">
                                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                            </svg>
                            Cerrar
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Editar Actividad -->
        <div class="modal fade" id="modalEditarActividad" tabindex="-1" aria-labelledby="modalEditarActividadLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-warning text-dark">
                        <h5 class="modal-title" id="modalEditarActividadLabel">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pencil-square me-2" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                            Editar Actividad
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="formulario_editar_actividad_modal">
                        <div class="modal-body">
                            <input type="hidden" id="editar_id" name="editar_id">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="editar_actividad" class="form-label">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square me-1" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg>
                                        Título de la Actividad
                                    </label>
                                    <input type="text" class="form-control" id="editar_actividad" name="editar_actividad" required placeholder="Ej: Completar informe mensual">
                                </div>

                                <div class="col-12">
                                    <label for="editar_descripcion" class="form-label">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-text-paragraph me-1" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm4-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
                                        </svg>
                                        Descripción
                                    </label>
                                    <textarea class="form-control" id="editar_descripcion" name="editar_descripcion" rows="4" required placeholder="Describe los detalles de la actividad..."></textarea>
                                </div>

                                <div class="col-md-6">
                                    <label for="editar_estado" class="form-label">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check me-1" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                        </svg>
                                        Estado
                                    </label>
                                    <select class="form-select" id="editar_estado" name="editar_estado" required>
                                        <option value="">Seleccione un estado</option>
                                        <option value="Pendiente">Pendiente</option>
                                        <option value="En Progreso">En Progreso</option>
                                        <option value="Completado">Completado</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="editar_tipo" class="form-label">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tags me-1" viewBox="0 0 16 16">
                                            <path d="M3 2v4.586l7 7L14.586 9l-7-7H3zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2z"/>
                                            <path d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z"/>
                                        </svg>
                                        Tipo
                                    </label>
                                    <select class="form-select" id="editar_tipo" name="editar_tipo" required>
                                        <option value="">Seleccione un tipo</option>
                                        <option value="Personal">Personal</option>
                                        <option value="Trabajo">Trabajo</option>
                                        <option value="Estudio">Estudio</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg me-1" viewBox="0 0 16 16">
                                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                </svg>
                                Cancelar
                            </button>
                            <button type="submit" class="btn btn-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg me-1" viewBox="0 0 16 16">
                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                </svg>
                                Guardar Cambios
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Eliminar Actividad -->
        <div class="modal fade" id="modalEliminarActividad" tabindex="-1" aria-labelledby="modalEliminarActividadLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title" id="modalEliminarActividadLabel">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle me-2" viewBox="0 0 16 16">
                                <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                                <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                            </svg>
                            Confirmar Eliminación
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-trash text-danger mb-3" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                            </svg>
                        </div>
                        <h5 class="text-center mb-3">¿Estás seguro de eliminar esta actividad?</h5>
                        <div class="alert alert-danger" role="alert">
                            <strong>Advertencia:</strong> Esta acción no se puede deshacer.
                        </div>
                        <div class="p-3 bg-light rounded">
                            <p class="mb-1"><strong>ID:</strong> <span id="eliminar_id_display">#000</span></p>
                            <p class="mb-1"><strong>Actividad:</strong> <span id="eliminar_actividad_nombre">-</span></p>
                            <p class="mb-0"><strong>Estado:</strong> <span id="eliminar_estado_badge" class="badge bg-secondary">-</span></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg me-1" viewBox="0 0 16 16">
                                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                            </svg>
                            Cancelar
                        </button>
                        <button type="button" class="btn btn-danger" id="btnConfirmarEliminar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill me-1" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                            Sí, eliminar
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Descargar Actividad -->
        <div class="modal fade" id="modalDescargarActividad" tabindex="-1" aria-labelledby="modalDescargarActividadLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-info text-white">
                        <h5 class="modal-title" id="modalDescargarActividadLabel">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-printer me-2" viewBox="0 0 16 16">
                                <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                                <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
                            </svg>
                            Vista Previa - Imprimir
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="areaImpresion">
                        <div id="descargarLoadingState" class="text-center py-4">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Cargando...</span>
                            </div>
                            <p class="mt-2 text-muted">Preparando documento...</p>
                        </div>

                        <div id="descargarContent" style="display: none;">
                            <div class="p-4">
                                <div class="text-center mb-4">
                                    <h2 id="descargar_titulo">Actividad</h2>
                                    <p class="text-muted">ID: <span id="descargar_id">#000</span></p>
                                    <div class="d-flex justify-content-center gap-2">
                                        <span class="badge" id="descargar_estado_badge">Estado</span>
                                        <span class="badge bg-secondary" id="descargar_tipo_badge">Tipo</span>
                                    </div>
                                </div>

                                <hr>

                                <div class="mb-4">
                                    <h5 class="text-primary mb-2">Descripción</h5>
                                    <p class="text-justify" id="descargar_descripcion">-</p>
                                </div>

                                <div class="row g-3">
                                    <div class="col-6">
                                        <div class="p-3 bg-light rounded">
                                            <strong class="d-block text-muted mb-1">Fecha de Creación</strong>
                                            <span id="descargar_fecha_creacion">-</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="p-3 bg-light rounded">
                                            <strong class="d-block text-muted mb-1">Última Actualización</strong>
                                            <span id="descargar_fecha_actualizacion">-</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 text-center text-muted">
                                    <small>Generado el: <span id="descargar_fecha_generacion">-</span></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-info" onclick="imprimirActividad()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill me-1" viewBox="0 0 16 16">
                                <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                                <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                            </svg>
                            Imprimir
                        </button>
                    </div>
                </div>
            </div>
        </div>
      
    <?php include '../componet/footer.php'; ?>
    
    <style>
        /* Pagination Styles */
        .pagination .page-link {
            background-color: #343a40;
            border-color: #454d55;
            color: #fff;
        }
        
        .pagination .page-link:hover {
            background-color: #0d6efd;
            border-color: #0d6efd;
            color: #fff;
        }
        
        .pagination .page-item.active .page-link {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }
        
        .pagination .page-item.disabled .page-link {
            background-color: #212529;
            border-color: #343a40;
            color: #6c757d;
        }
        
        /* Table Actions Column */
        .table tbody td:last-child {
            white-space: nowrap;
        }
        
        .btn-sm {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
        }

        /* Modal Styles */
        .bg-gradient-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .bg-gradient-warning {
            background: linear-gradient(135deg, #f6d365 0%, #fda085 100%);
        }
        
        .bg-gradient-info {
            background: linear-gradient(135deg, #667eea 0%, #2ccce4 100%);
        }
        
        .info-card {
            transition: all 0.3s ease;
        }
        
        .info-card:hover {
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transform: translateY(-2px);
        }
        
        .icon-box {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        
        .text-justify {
            text-align: justify;
        }
        
        .modal-content {
            border-radius: 15px;
            border: none;
        }
        
        .modal-header {
            border-radius: 15px 15px 0 0;
        }
    </style>
    
    <script>
        // Pagination Variables
        let currentPage = 1;
        let itemsPerPage = 10;
        let allActivities = [];
        
        document.addEventListener('DOMContentLoaded', function () {
            console.log('Página cargada, iniciando...');
            console.log('jQuery disponible:', typeof $ !== 'undefined');
            console.log('SweetAlert2 disponible:', typeof Swal !== 'undefined');
            console.log('Bootstrap disponible:', typeof bootstrap !== 'undefined');
            
            MostrarActividadPaginada();
            
            // Items per page change event
            document.getElementById('itemsPerPage').addEventListener('change', function() {
                itemsPerPage = parseInt(this.value);
                currentPage = 1;
                renderTable();
                renderPagination();
            });
        });
        
        function MostrarActividadPaginada() {
            $.ajax({
                url: '../../../backend/api/endpoint.php',
                type: 'GET',
                dataType: 'json',
                data: {
                    mostar_actividades_getmethod: true
                },
                success: function(data) {
                    console.log(data);
                    allActivities = data;
                    renderTable();
                    renderPagination();
                },
                error: function(error) {
                    console.log(error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'No se pudieron cargar las actividades',
                        confirmButtonText: 'Aceptar'
                    });
                }
            });
        }
        
        function renderTable() {
            const tbody = document.getElementById('tableBody');
            tbody.innerHTML = '';
            
            if (allActivities.length === 0) {
                tbody.innerHTML = `
                    <tr>
                        <td colspan="8" class="text-center py-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-inbox mb-2" viewBox="0 0 16 16">
                                <path d="M4.98 4a.5.5 0 0 0-.39.188L1.54 8H6a.5.5 0 0 1 .5.5 1.5 1.5 0 1 0 3 0A.5.5 0 0 1 10 8h4.46l-3.05-3.812A.5.5 0 0 0 11.02 4H4.98zm9.954 5H10.45a2.5 2.5 0 0 1-4.9 0H1.066l.32 2.562a.5.5 0 0 0 .497.438h12.234a.5.5 0 0 0 .496-.438L14.933 9zM3.809 3.563A1.5 1.5 0 0 1 4.981 3h6.038a1.5 1.5 0 0 1 1.172.563l3.7 4.625a.5.5 0 0 1 .105.374l-.39 3.124A1.5 1.5 0 0 1 14.117 13H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .106-.374l3.7-4.625z"/>
                            </svg>
                            <p class="mb-0">No hay actividades para mostrar</p>
                        </td>
                    </tr>
                `;
                document.getElementById('paginationInfo').textContent = 'Mostrando 0 de 0 actividades';
                return;
            }
            
            const start = (currentPage - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const paginatedItems = allActivities.slice(start, end);
            
            paginatedItems.forEach(element => {
                tbody.innerHTML += `
                    <tr>
                        <td>${element.id}</td>
                        <td>${element.actividad}</td>
                        <td>${element.descripcion}</td>
                        <td><span class="badge bg-${getEstadoBadge(element.estado)}">${element.estado}</span></td>
                        <td><span class="badge bg-secondary">${element.tipo}</span></td>
                        <td>${element.fecha_de_creacion}</td>
                        <td>${element.fecha_de_actualizacion}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-sm" role="group">
                                <button type="button" class="btn btn-info" title="Descargar" onclick="descargarActividadModal(${element.id})">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                    </svg>
                                </button>
                                <button type="button" class="btn btn-primary" title="Ver" onclick="verActividadModal(${element.id})">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                    </svg>
                                </button>
                                <button type="button" class="btn btn-warning" title="Editar" onclick="editarActividadModal(${element.id})">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                    </svg>
                                </button>
                                <button type="button" class="btn btn-danger" title="Eliminar" onclick="eliminarActividadModal(${element.id})">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                `;
            });
            
            // Update pagination info
            const showing = paginatedItems.length;
            const total = allActivities.length;
            const from = start + 1;
            const to = Math.min(end, total);
            document.getElementById('paginationInfo').textContent = 
                `Mostrando ${from} - ${to} de ${total} actividades`;
        }
        
        function renderPagination() {
            const totalPages = Math.ceil(allActivities.length / itemsPerPage);
            const paginationControls = document.getElementById('paginationControls');
            paginationControls.innerHTML = '';
            
            if (totalPages <= 1) return;
            
            // Previous button
            paginationControls.innerHTML += `
                <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
                    <a class="page-link" href="#" onclick="changePage(${currentPage - 1}); return false;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </a>
                </li>
            `;
            
            // Page numbers
            let startPage = Math.max(1, currentPage - 2);
            let endPage = Math.min(totalPages, currentPage + 2);
            
            if (startPage > 1) {
                paginationControls.innerHTML += `
                    <li class="page-item">
                        <a class="page-link" href="#" onclick="changePage(1); return false;">1</a>
                    </li>
                `;
                if (startPage > 2) {
                    paginationControls.innerHTML += `<li class="page-item disabled"><span class="page-link">...</span></li>`;
                }
            }
            
            for (let i = startPage; i <= endPage; i++) {
                paginationControls.innerHTML += `
                    <li class="page-item ${i === currentPage ? 'active' : ''}">
                        <a class="page-link" href="#" onclick="changePage(${i}); return false;">${i}</a>
                    </li>
                `;
            }
            
            if (endPage < totalPages) {
                if (endPage < totalPages - 1) {
                    paginationControls.innerHTML += `<li class="page-item disabled"><span class="page-link">...</span></li>`;
                }
                paginationControls.innerHTML += `
                    <li class="page-item">
                        <a class="page-link" href="#" onclick="changePage(${totalPages}); return false;">${totalPages}</a>
                    </li>
                `;
            }
            
            // Next button
            paginationControls.innerHTML += `
                <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
                    <a class="page-link" href="#" onclick="changePage(${currentPage + 1}); return false;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </a>
                </li>
            `;
        }
        
        function changePage(page) {
            const totalPages = Math.ceil(allActivities.length / itemsPerPage);
            if (page < 1 || page > totalPages) return;
            currentPage = page;
            renderTable();
            renderPagination();
            // Scroll to top of table
            document.querySelector('.cont_todolist').scrollIntoView({ behavior: 'smooth' });
        }
        
        function getEstadoBadge(estado) {
            switch(estado.toLowerCase()) {
                case 'completado':
                    return 'success';
                case 'pendiente':
                    return 'warning';
                case 'en progreso':
                    return 'info';
                default:
                    return 'secondary';
            }
        }
        
        // Function to show activity in modal
        function verActividadModal(id) {
            // Show loading state
            document.getElementById('modalLoadingState').style.display = 'block';
            document.getElementById('modalContent').style.display = 'none';
            
            // Show modal
            const modal = new bootstrap.Modal(document.getElementById('modalVerActividad'));
            modal.show();
            
            // Load data
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
                        
                        // Populate modal data
                        $('#modal_actividad_id').text('#' + actividad.id);
                        $('#modal_actividad_title').text(actividad.actividad);
                        $('#modal_descripcion_text').text(actividad.descripcion);
                        $('#modal_tipo_badge').text(actividad.tipo);
                        $('#modal_fecha_creacion').text(actividad.fecha_de_creacion);
                        $('#modal_fecha_actualizacion').text(actividad.fecha_de_actualizacion);
                        
                        // Estado badge with colors
                        const estadoBadge = $('#modal_estado_badge');
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
                        
                        // Action buttons
                        $('#modal_btn_editar').attr('href', 'editar_actividad.php?id=' + id);
                        $('#modal_btn_descargar').attr('href', 'descargar_actividad.php?id=' + id);
                        $('#modal_btn_eliminar').attr('href', 'eliminar_actividad.php?id=' + id);
                        
                        // Show content, hide loading
                        document.getElementById('modalLoadingState').style.display = 'none';
                        document.getElementById('modalContent').style.display = 'block';
                    } else {
                        modal.hide();
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Actividad no encontrada',
                            confirmButtonText: 'Aceptar'
                        });
                    }
                },
                error: function(error) {
                    console.log(error);
                    modal.hide();
                    Swal.fire({
                        icon: 'error',
                        title: 'Error de conexión',
                        text: 'No se pudo cargar la actividad',
                        confirmButtonText: 'Aceptar'
                    });
                }
            });
        }
        
        // Function to edit activity in modal
        function editarActividadModal(id) {
            // Show modal
            const modal = new bootstrap.Modal(document.getElementById('modalEditarActividad'));
            modal.show();
            
            // Load data
            $.ajax({
                url: '../../../backend/api/endpoint.php',
                type: 'GET',
                dataType: 'json',
                data: {
                    obtener_actividad_por_id: true,
                    id: id
                },
                success: function(response) {
                    if (response.success) {
                        const actividad = response.data;
                        $('#editar_id').val(actividad.id);
                        $('#editar_actividad').val(actividad.actividad);
                        $('#editar_descripcion').val(actividad.descripcion);
                        $('#editar_estado').val(actividad.estado);
                        $('#editar_tipo').val(actividad.tipo);
                    } else {
                        modal.hide();
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'No se pudo cargar la actividad',
                            confirmButtonText: 'Aceptar'
                        });
                    }
                },
                error: function(error) {
                    console.log(error);
                    modal.hide();
                    Swal.fire({
                        icon: 'error',
                        title: 'Error de conexión',
                        text: 'No se pudo cargar la actividad',
                        confirmButtonText: 'Aceptar'
                    });
                }
            });
        }
        
        // Function to show delete confirmation modal
        function eliminarActividadModal(id) {
            // Show modal
            const modal = new bootstrap.Modal(document.getElementById('modalEliminarActividad'));
            modal.show();
            
            // Load data
            $.ajax({
                url: '../../../backend/api/endpoint.php',
                type: 'GET',
                dataType: 'json',
                data: {
                    obtener_actividad_por_id: true,
                    id: id
                },
                success: function(response) {
                    if (response.success) {
                        const actividad = response.data;
                        $('#eliminar_id_display').text('#' + actividad.id);
                        $('#eliminar_actividad_nombre').text(actividad.actividad);
                        
                        const estadoBadge = $('#eliminar_estado_badge');
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
                        
                        // Store ID for deletion
                        $('#btnConfirmarEliminar').data('id', id);
                    } else {
                        modal.hide();
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'No se pudo cargar la actividad',
                            confirmButtonText: 'Aceptar'
                        });
                    }
                },
                error: function(error) {
                    console.log(error);
                    modal.hide();
                    Swal.fire({
                        icon: 'error',
                        title: 'Error de conexión',
                        text: 'No se pudo cargar la actividad',
                        confirmButtonText: 'Aceptar'
                    });
                }
            });
        }
        
        // Function to show download/print modal
        function descargarActividadModal(id) {
            // Show loading state
            document.getElementById('descargarLoadingState').style.display = 'block';
            document.getElementById('descargarContent').style.display = 'none';
            
            // Show modal
            const modal = new bootstrap.Modal(document.getElementById('modalDescargarActividad'));
            modal.show();
            
            // Load data
            $.ajax({
                url: '../../../backend/api/endpoint.php',
                type: 'GET',
                dataType: 'json',
                data: {
                    obtener_actividad_por_id: true,
                    id: id
                },
                success: function(response) {
                    if (response.success) {
                        const actividad = response.data;
                        
                        $('#descargar_id').text('#' + actividad.id);
                        $('#descargar_titulo').text(actividad.actividad);
                        $('#descargar_descripcion').text(actividad.descripcion);
                        $('#descargar_tipo_badge').text(actividad.tipo);
                        $('#descargar_fecha_creacion').text(actividad.fecha_de_creacion);
                        $('#descargar_fecha_actualizacion').text(actividad.fecha_de_actualizacion);
                        
                        const estadoBadge = $('#descargar_estado_badge');
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
                        
                        // Set generation date
                        const now = new Date();
                        const dateStr = now.toLocaleString('es-ES');
                        $('#descargar_fecha_generacion').text(dateStr);
                        
                        // Show content, hide loading
                        document.getElementById('descargarLoadingState').style.display = 'none';
                        document.getElementById('descargarContent').style.display = 'block';
                    } else {
                        modal.hide();
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'No se pudo cargar la actividad',
                            confirmButtonText: 'Aceptar'
                        });
                    }
                },
                error: function(error) {
                    console.log(error);
                    modal.hide();
                    Swal.fire({
                        icon: 'error',
                        title: 'Error de conexión',
                        text: 'No se pudo cargar la actividad',
                        confirmButtonText: 'Aceptar'
                    });
                }
            });
        }
        
        // Function to print activity
        function imprimirActividad() {
            window.print();
        }
        
        // Form handlers
        $(document).ready(function() {
            console.log('Inicializando handlers de formularios...');
            
            // Crear Actividad Form Handler
            $('#formulario_crear_actividad_modal').on('submit', function(e) {
                e.preventDefault();
                console.log('Formulario crear actividad enviado');
                
                const submitBtn = $(this).find('button[type="submit"]');
                submitBtn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm me-1"></span>Creando...');
                
                const formData = {
                    crear_actividad_postmethod: true,
                    actividad: $('#crear_actividad').val(),
                    descripcion: $('#crear_descripcion').val(),
                    estado: $('#crear_estado').val(),
                    tipo: $('#crear_tipo').val()
                };
                
                console.log('Datos a enviar:', formData);
                
                $.ajax({
                    url: '../../../backend/api/endpoint.php',
                    type: 'POST',
                    dataType: 'json',
                    data: formData,
                    timeout: 10000,
                    success: function(response) {
                        console.log('Respuesta del servidor:', response);
                        
                        if (response.success) {
                            // Close modal
                            const modalElement = document.getElementById('modalAgregarActividad');
                            const modalInstance = bootstrap.Modal.getInstance(modalElement);
                            if (modalInstance) {
                                modalInstance.hide();
                            }
                            
                            // Reset form
                            $('#formulario_crear_actividad_modal')[0].reset();
                            
                            // Show success message
                            Swal.fire({
                                icon: 'success',
                                title: '¡Creada Exitosamente!',
                                text: 'La actividad ha sido creada correctamente',
                                showConfirmButton: true,
                                confirmButtonText: 'Aceptar',
                                timer: 2000
                            });
                            
                            // Reload table
                            setTimeout(function() {
                                MostrarActividadPaginada();
                            }, 500);
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: response.message || 'No se pudo crear la actividad',
                                confirmButtonText: 'Aceptar'
                            });
                        }
                        
                        submitBtn.prop('disabled', false).html('<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg me-1" viewBox="0 0 16 16"><path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/></svg>Crear Actividad');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error AJAX:', xhr, status, error);
                        console.error('Respuesta del servidor:', xhr.responseText);
                        
                        let errorMsg = 'Error de conexión con el servidor';
                        if (status === 'timeout') {
                            errorMsg = 'La solicitud ha tardado demasiado';
                        } else if (xhr.responseText) {
                            errorMsg = 'Error: ' + xhr.responseText;
                        }
                        
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: errorMsg,
                            confirmButtonText: 'Aceptar'
                        });
                        
                        submitBtn.prop('disabled', false).html('<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg me-1" viewBox="0 0 16 16"><path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/></svg>Crear Actividad');
                    }
                });
            });
            
            // Editar Actividad Form Handler
            $('#formulario_editar_actividad_modal').on('submit', function(e) {
                e.preventDefault();
                console.log('Formulario editar actividad enviado');
                
                const submitBtn = $(this).find('button[type="submit"]');
                submitBtn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm me-1"></span>Guardando...');
                
                const formData = {
                    editar_actividad_postmethod: true,
                    id: $('#editar_id').val(),
                    actividad: $('#editar_actividad').val(),
                    descripcion: $('#editar_descripcion').val(),
                    estado: $('#editar_estado').val(),
                    tipo: $('#editar_tipo').val()
                };
                
                console.log('Datos a enviar:', formData);
                
                $.ajax({
                    url: '../../../backend/api/endpoint.php',
                    type: 'POST',
                    dataType: 'json',
                    data: formData,
                    timeout: 10000,
                    success: function(response) {
                        console.log('Respuesta del servidor:', response);
                        
                        if (response.success) {
                            // Close modal
                            const modalElement = document.getElementById('modalEditarActividad');
                            const modalInstance = bootstrap.Modal.getInstance(modalElement);
                            if (modalInstance) {
                                modalInstance.hide();
                            }
                            
                            // Show success message
                            Swal.fire({
                                icon: 'success',
                                title: '¡Editada Exitosamente!',
                                text: 'La actividad ha sido actualizada correctamente',
                                showConfirmButton: true,
                                confirmButtonText: 'Aceptar',
                                timer: 2000
                            });
                            
                            // Reload table
                            setTimeout(function() {
                                MostrarActividadPaginada();
                            }, 500);
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: response.message || 'No se pudo actualizar la actividad',
                                confirmButtonText: 'Aceptar'
                            });
                        }
                        
                        submitBtn.prop('disabled', false).html('<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg me-1" viewBox="0 0 16 16"><path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/></svg>Guardar Cambios');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error AJAX:', xhr, status, error);
                        console.error('Respuesta del servidor:', xhr.responseText);
                        
                        let errorMsg = 'Error de conexión con el servidor';
                        if (status === 'timeout') {
                            errorMsg = 'La solicitud ha tardado demasiado';
                        } else if (xhr.responseText) {
                            errorMsg = 'Error: ' + xhr.responseText;
                        }
                        
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: errorMsg,
                            confirmButtonText: 'Aceptar'
                        });
                        
                        submitBtn.prop('disabled', false).html('<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg me-1" viewBox="0 0 16 16"><path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/></svg>Guardar Cambios');
                    }
                });
            });
            
            // Confirmar Eliminar Button Handler
            $('#btnConfirmarEliminar').on('click', function() {
                const id = $(this).data('id');
                const btn = $(this);
                
                btn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm me-1"></span>Eliminando...');
                
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
                        if (response.success) {
                            // Close modal
                            bootstrap.Modal.getInstance(document.getElementById('modalEliminarActividad')).hide();
                            
                            // Show success message
                            Swal.fire({
                                icon: 'success',
                                title: '¡Eliminada!',
                                text: 'La actividad ha sido eliminada exitosamente',
                                showConfirmButton: false,
                                timer: 1500
                            });
                            
                            // Reload table
                            MostrarActividadPaginada();
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: response.message || 'No se pudo eliminar la actividad',
                                confirmButtonText: 'Aceptar'
                            });
                        }
                        
                        btn.prop('disabled', false).html('<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill me-1" viewBox="0 0 16 16"><path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/></svg>Sí, eliminar');
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                        let errorMsg = 'Error de conexión';
                        if (status === 'timeout') {
                            errorMsg = 'La solicitud ha tardado demasiado';
                        }
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: errorMsg,
                            confirmButtonText: 'Aceptar'
                        });
                        
                        btn.prop('disabled', false).html('<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill me-1" viewBox="0 0 16 16"><path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/></svg>Sí, eliminar');
                    }
                });
            });
        });
    </script>
    </body>
</html>
