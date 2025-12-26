<?php $__env->startSection('title', 'Ver Afiliado'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card" style="background-color: #ffffff; border: 1px solid #808080;">
                <div class="card-header" style="background-color: #ffffff; border-bottom: 1px solid #808080;">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0" style="color: #000000;">Ficha Socioeconómica - <?php echo e($afiliado->nombre_completo); ?></h4>
                        <div>
                            <a href="<?php echo e(route('admin.afiliados.edit', $afiliado)); ?>" class="btn" style="background-color: #dc3545; color: #ffffff; border: none;">
                                <i class="bx bx-edit" style="color: #ffffff;"></i> Editar
                            </a>
                            <a href="<?php echo e(route('admin.afiliados.index')); ?>" class="btn" style="background-color: #808080; color: #ffffff; border: 1px solid #808080;">
                                Volver
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body" style="background-color: #ffffff;">
                    <!-- Datos Personales -->
                    <div class="card mb-3" style="background-color: #f8f9fa; border: 1px solid #808080;">
                        <div class="card-header" style="background-color: #f8f9fa; border-bottom: 1px solid #808080;">
                            <h5 style="color: #000000; margin: 0;"><i class="bx bx-user" style="color: #dc3545;"></i> Datos Personales</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3"><strong style="color: #000000;">Nombre Completo:</strong></div>
                                <div class="col-md-3" style="color: #000000;"><?php echo e($afiliado->nombre_completo); ?></div>
                                <div class="col-md-3"><strong style="color: #000000;">Edad:</strong></div>
                                <div class="col-md-3" style="color: #000000;"><?php echo e($afiliado->edad); ?> años</div>
                            </div>
                            <hr style="border-color: #808080;">
                            <div class="row">
                                <div class="col-md-3"><strong style="color: #000000;">Fecha de Nacimiento:</strong></div>
                                <div class="col-md-3" style="color: #000000;"><?php echo e($afiliado->fecha_nacimiento->format('d/m/Y')); ?></div>
                                <div class="col-md-3"><strong style="color: #000000;">Género:</strong></div>
                                <div class="col-md-3" style="color: #000000;"><?php echo e(ucfirst($afiliado->genero)); ?></div>
                            </div>
                            <hr style="border-color: #808080;">
                            <div class="row">
                                <div class="col-md-3"><strong style="color: #000000;">Estado Civil:</strong></div>
                                <div class="col-md-3" style="color: #000000;"><?php echo e(ucfirst(str_replace('_', ' ', $afiliado->estado_civil))); ?></div>
                                <div class="col-md-3"><strong style="color: #000000;">Nacionalidad:</strong></div>
                                <div class="col-md-3" style="color: #000000;"><?php echo e($afiliado->nacionalidad); ?></div>
                            </div>
                            <hr style="border-color: #808080;">
                            <div class="row">
                                <div class="col-md-3"><strong style="color: #000000;">Tipo de Documento:</strong></div>
                                <div class="col-md-3" style="color: #000000;"><?php echo e(ucfirst(str_replace('_', ' ', $afiliado->tipo_documento))); ?></div>
                                <div class="col-md-3"><strong style="color: #000000;">Número de Documento:</strong></div>
                                <div class="col-md-3" style="color: #000000;"><?php echo e($afiliado->numero_documento); ?></div>
                            </div>
                        </div>
                    </div>

                    <!-- Datos de Contacto -->
                    <div class="card mb-3" style="background-color: #f8f9fa; border: 1px solid #808080;">
                        <div class="card-header" style="background-color: #f8f9fa; border-bottom: 1px solid #808080;">
                            <h5 style="color: #000000; margin: 0;"><i class="bx bx-phone" style="color: #dc3545;"></i> Datos de Contacto</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3"><strong style="color: #000000;">Teléfono:</strong></div>
                                <div class="col-md-3" style="color: #000000;"><?php echo e($afiliado->telefono ?? 'N/A'); ?></div>
                                <div class="col-md-3"><strong style="color: #000000;">Celular:</strong></div>
                                <div class="col-md-3" style="color: #000000;"><?php echo e($afiliado->celular ?? 'N/A'); ?></div>
                            </div>
                            <hr style="border-color: #808080;">
                            <div class="row">
                                <div class="col-md-3"><strong style="color: #000000;">Email:</strong></div>
                                <div class="col-md-3" style="color: #000000;"><?php echo e($afiliado->email ?? 'N/A'); ?></div>
                            </div>
                            <hr style="border-color: #808080;">
                            <div class="row">
                                <div class="col-md-12"><strong style="color: #000000;">Dirección:</strong></div>
                                <div class="col-md-12" style="color: #000000;"><?php echo e($afiliado->direccion_residencia); ?></div>
                            </div>
                            <hr style="border-color: #808080;">
                            <div class="row">
                                <div class="col-md-3"><strong style="color: #000000;">Barrio:</strong></div>
                                <div class="col-md-3" style="color: #000000;"><?php echo e($afiliado->barrio ?? 'N/A'); ?></div>
                                <div class="col-md-3"><strong style="color: #000000;">Ciudad:</strong></div>
                                <div class="col-md-3" style="color: #000000;"><?php echo e($afiliado->ciudad); ?></div>
                            </div>
                            <hr style="border-color: #808080;">
                            <div class="row">
                                <div class="col-md-3"><strong style="color: #000000;">Departamento:</strong></div>
                                <div class="col-md-3" style="color: #000000;"><?php echo e($afiliado->departamento); ?></div>
                                <div class="col-md-3"><strong style="color: #000000;">País:</strong></div>
                                <div class="col-md-3" style="color: #000000;"><?php echo e($afiliado->pais); ?></div>
                            </div>
                        </div>
                    </div>

                    <!-- Datos Familiares -->
                    <div class="card mb-3" style="background-color: #f8f9fa; border: 1px solid #808080;">
                        <div class="card-header" style="background-color: #f8f9fa; border-bottom: 1px solid #808080;">
                            <h5 style="color: #000000; margin: 0;"><i class="bx bx-group" style="color: #dc3545;"></i> Datos Familiares</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3"><strong style="color: #000000;">Cónyuge:</strong></div>
                                <div class="col-md-3" style="color: #000000;"><?php echo e($afiliado->nombre_conyuge ?? 'N/A'); ?></div>
                                <div class="col-md-3"><strong style="color: #000000;">Número de Hijos:</strong></div>
                                <div class="col-md-3" style="color: #000000;"><?php echo e($afiliado->numero_hijos); ?></div>
                            </div>
                            <hr style="border-color: #808080;">
                            <div class="row">
                                <div class="col-md-3"><strong style="color: #000000;">Personas a Cargo:</strong></div>
                                <div class="col-md-9" style="color: #000000;"><?php echo e($afiliado->personas_a_cargo); ?></div>
                            </div>
                            <?php if($afiliado->informacion_familiar): ?>
                                <hr style="border-color: #808080;">
                                <div class="row">
                                    <div class="col-md-12"><strong style="color: #000000;">Información Familiar:</strong></div>
                                    <div class="col-md-12" style="color: #000000;"><?php echo e($afiliado->informacion_familiar); ?></div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Datos Laborales -->
                    <div class="card mb-3" style="background-color: #f8f9fa; border: 1px solid #808080;">
                        <div class="card-header" style="background-color: #f8f9fa; border-bottom: 1px solid #808080;">
                            <h5 style="color: #000000; margin: 0;"><i class="bx bx-briefcase" style="color: #dc3545;"></i> Datos Laborales</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3"><strong style="color: #000000;">Ocupación:</strong></div>
                                <div class="col-md-3" style="color: #000000;"><?php echo e($afiliado->ocupacion ?? 'N/A'); ?></div>
                                <div class="col-md-3"><strong style="color: #000000;">Tipo de Empleo:</strong></div>
                                <div class="col-md-3" style="color: #000000;"><?php echo e($afiliado->tipo_empleo ? ucfirst($afiliado->tipo_empleo) : 'N/A'); ?></div>
                            </div>
                            <hr style="border-color: #808080;">
                            <div class="row">
                                <div class="col-md-3"><strong style="color: #000000;">Lugar de Trabajo:</strong></div>
                                <div class="col-md-3" style="color: #000000;"><?php echo e($afiliado->lugar_trabajo ?? 'N/A'); ?></div>
                                <div class="col-md-3"><strong style="color: #000000;">Cargo:</strong></div>
                                <div class="col-md-3" style="color: #000000;"><?php echo e($afiliado->cargo ?? 'N/A'); ?></div>
                            </div>
                            <?php if($afiliado->ingresos_mensuales): ?>
                                <hr style="border-color: #808080;">
                                <div class="row">
                                    <div class="col-md-3"><strong style="color: #000000;">Ingresos Mensuales:</strong></div>
                                    <div class="col-md-9" style="color: #000000;">$<?php echo e(number_format($afiliado->ingresos_mensuales, 2, ',', '.')); ?></div>
                                </div>
                            <?php endif; ?>
                            <?php if($afiliado->descripcion_laboral): ?>
                                <hr style="border-color: #808080;">
                                <div class="row">
                                    <div class="col-md-12"><strong style="color: #000000;">Descripción Laboral:</strong></div>
                                    <div class="col-md-12" style="color: #000000;"><?php echo e($afiliado->descripcion_laboral); ?></div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Datos Educativos -->
                    <div class="card mb-3" style="background-color: #f8f9fa; border: 1px solid #808080;">
                        <div class="card-header" style="background-color: #f8f9fa; border-bottom: 1px solid #808080;">
                            <h5 style="color: #000000; margin: 0;"><i class="bx bx-book" style="color: #dc3545;"></i> Datos Educativos</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3"><strong style="color: #000000;">Nivel Educativo:</strong></div>
                                <div class="col-md-3" style="color: #000000;"><?php echo e($afiliado->nivel_educativo ? ucfirst($afiliado->nivel_educativo) : 'N/A'); ?></div>
                                <div class="col-md-3"><strong style="color: #000000;">Estudiando Actualmente:</strong></div>
                                <div class="col-md-3" style="color: #000000;"><?php echo e($afiliado->estudiando_actualmente ? 'Sí' : 'No'); ?></div>
                            </div>
                            <?php if($afiliado->institucion_educativa): ?>
                                <hr style="border-color: #808080;">
                                <div class="row">
                                    <div class="col-md-3"><strong style="color: #000000;">Institución Educativa:</strong></div>
                                    <div class="col-md-9" style="color: #000000;"><?php echo e($afiliado->institucion_educativa); ?></div>
                                </div>
                            <?php endif; ?>
                            <?php if($afiliado->titulo_obtenido): ?>
                                <hr style="border-color: #808080;">
                                <div class="row">
                                    <div class="col-md-3"><strong style="color: #000000;">Título Obtenido:</strong></div>
                                    <div class="col-md-9" style="color: #000000;"><?php echo e($afiliado->titulo_obtenido); ?></div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Datos de Salud -->
                    <div class="card mb-3" style="background-color: #f8f9fa; border: 1px solid #808080;">
                        <div class="card-header" style="background-color: #f8f9fa; border-bottom: 1px solid #808080;">
                            <h5 style="color: #000000; margin: 0;"><i class="bx bx-plus-medical" style="color: #dc3545;"></i> Datos de Salud</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3"><strong style="color: #000000;">Tiene Seguro de Salud:</strong></div>
                                <div class="col-md-3" style="color: #000000;"><?php echo e($afiliado->tiene_seguro_salud ? 'Sí' : 'No'); ?></div>
                                <?php if($afiliado->tipo_seguro_salud): ?>
                                    <div class="col-md-3"><strong style="color: #000000;">Tipo de Seguro:</strong></div>
                                    <div class="col-md-3" style="color: #000000;"><?php echo e($afiliado->tipo_seguro_salud); ?></div>
                                <?php endif; ?>
                            </div>
                            <?php if($afiliado->eps): ?>
                                <hr style="border-color: #808080;">
                                <div class="row">
                                    <div class="col-md-3"><strong style="color: #000000;">EPS:</strong></div>
                                    <div class="col-md-9" style="color: #000000;"><?php echo e($afiliado->eps); ?></div>
                                </div>
                            <?php endif; ?>
                            <?php if($afiliado->condiciones_medicas): ?>
                                <hr style="border-color: #808080;">
                                <div class="row">
                                    <div class="col-md-12"><strong style="color: #000000;">Condiciones Médicas:</strong></div>
                                    <div class="col-md-12" style="color: #000000;"><?php echo e($afiliado->condiciones_medicas); ?></div>
                                </div>
                            <?php endif; ?>
                            <?php if($afiliado->medicamentos_permanentes): ?>
                                <hr style="border-color: #808080;">
                                <div class="row">
                                    <div class="col-md-12"><strong style="color: #000000;">Medicamentos Permanentes:</strong></div>
                                    <div class="col-md-12" style="color: #000000;"><?php echo e($afiliado->medicamentos_permanentes); ?></div>
                                </div>
                            <?php endif; ?>
                            <?php if($afiliado->alergias): ?>
                                <hr style="border-color: #808080;">
                                <div class="row">
                                    <div class="col-md-12"><strong style="color: #000000;">Alergias:</strong></div>
                                    <div class="col-md-12" style="color: #000000;"><?php echo e($afiliado->alergias); ?></div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Estado y Observaciones -->
                    <div class="card mb-3" style="background-color: #f8f9fa; border: 1px solid #808080;">
                        <div class="card-header" style="background-color: #f8f9fa; border-bottom: 1px solid #808080;">
                            <h5 style="color: #000000; margin: 0;"><i class="bx bx-info-circle" style="color: #dc3545;"></i> Estado y Observaciones</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3"><strong style="color: #000000;">Estado:</strong></div>
                                <div class="col-md-3">
                                    <span class="badge" style="background-color: <?php echo e($afiliado->estado === 'activo' ? '#28a745' : ($afiliado->estado === 'inactivo' ? '#ffc107' : '#dc3545')); ?>; color: #ffffff; border: 1px solid #808080;">
                                        <?php echo e(ucfirst($afiliado->estado)); ?>

                                    </span>
                                </div>
                                <div class="col-md-3"><strong style="color: #000000;">Fecha de Registro:</strong></div>
                                <div class="col-md-3" style="color: #000000;"><?php echo e($afiliado->fecha_registro->format('d/m/Y')); ?></div>
                            </div>
                            <?php if($afiliado->observaciones): ?>
                                <hr style="border-color: #808080;">
                                <div class="row">
                                    <div class="col-md-12"><strong style="color: #000000;">Observaciones:</strong></div>
                                    <div class="col-md-12" style="color: #000000;"><?php echo e($afiliado->observaciones); ?></div>
                                </div>
                            <?php endif; ?>
                            <?php if($afiliado->user): ?>
                                <hr style="border-color: #808080;">
                                <div class="row">
                                    <div class="col-md-3"><strong style="color: #000000;">Registrado por:</strong></div>
                                    <div class="col-md-9" style="color: #000000;"><?php echo e($afiliado->user->name); ?></div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layaout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\3a_programacion_web\VALDES_JOKABETH\prueba\resources\views/admin/afiliados/show.blade.php ENDPATH**/ ?>