<?php include './layout/header.php'; ?>

<!-- top menu  -->
<?php include './layout/topmenu.php'; ?>

<!-- ========== App Menu ========== -->
<?php include './layout/navigation.php'; ?>        
<!-- Left Sidebar End -->

        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h4 class="mb-sm-0 ">Ficha de paciente - Gustavo Aquino</h4>

                                <div class="page-title-right">
                                    <a href="./nuevo-paciente.php" class="btn btn-success btn-sm"><i class="ri-add-line"></i> Nuevo Paciente</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    
                    <div class="row g-0">
                        <?php include './layout/preview-pacientes.php'; ?>

                        <!-- end col -->
                        <div class="col-lg-12 mt-0">
                            <ul class="nav nav-pills arrow-navtabs nav-success bg-light mb-2 fs-12" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#datos-personales" role="tab" aria-selected="true">
                                        <span class="d-block d-sm-none">Datos Personales</span>
                                        <span class="d-none d-sm-block">Datos Personales</span>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#citas" role="tab" aria-selected="false" tabindex="-1">
                                        <span class="d-block d-sm-none">Citas</span>
                                        <span class="d-none d-sm-block">Citas</span>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#comentarios-administrativos" role="tab" aria-selected="false" tabindex="-1">
                                        <span class="d-block d-sm-none">Comentarios Administrativos</span>
                                        <span class="d-none d-sm-block">Comentarios Administrativos</span>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#tareas-gestion" role="tab" aria-selected="false" tabindex="-1">
                                        <span class="d-block d-sm-none">Tareas de Gestión</span>
                                        <span class="d-none d-sm-block">Tareas de Gestión</span>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="col-lg-12">
                            <div class="tab-content text-muted">
                                <div class="tab-pane active" id="datos-personales" role="tabpanel">
                                    <div class="card ">
                                        <div class="card-header">
                                            <div class="float-start ">
                                                <h5 class="card-title mb-0 align-middle">Datos Personales</h5>                        
                                            </div>
                                            
                                            <div class="float-end">
                                                <button type="button" class="btn btn-success btn-sm" >Actualizar Datos</button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row g-3">
                                                <div class="col-lg-3">
                                                    <!-- Input with Label -->
                                                    <div>
                                                        <label for="labelInput" class="form-label">Nombre Legal</label>
                                                        <input type="text" class="form-control" name="name_legal" id="labelInput">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <!-- Input with Label -->
                                                    <div>
                                                        <label for="labelInput" class="form-label">Nombre Social</label>
                                                        <input type="text" class="form-control" name="name_social" id="labelInput">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <!-- Input with Label -->
                                                    <div>
                                                        <label for="labelInput" class="form-label">Apellidos</label>
                                                        <input type="text" class="form-control" name="apellidos" id="labelInput">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <!-- Input with Label -->
                                                    <div>
                                                        <label for="labelInput" class="form-label">Cedula de Identidad</label>
                                                        <input type="text" class="form-control" name="cedula" id="labelInput">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <!-- Input with Label -->
                                                    <div>
                                                        <label for="labelInput" class="form-label">Sexo</label>
                                                        <input type="text" class="form-control" name="sexo" id="labelInput">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <!-- Input with Label -->
                                                    <div>
                                                        <label for="labelInput" class="form-label">Convenio</label>
                                                        <input type="text" class="form-control" name="convenio" id="labelInput">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <!-- Input with Label -->
                                                    <div>
                                                        <label for="labelInput" class="form-label">Número interno</label>
                                                        <input type="password" class="form-control" id="labelInput">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">                                            
                                                    <!-- Input with Icon -->
                                                    <div>
                                                        <label for="iconInput" class="form-label">E-mail</label>
                                                        <div class="form-icon">
                                                            <input type="email" class="form-control form-control-icon" id="iconInput" placeholder="example@gmail.com">
                                                            <i class="ri-mail-unread-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <!-- Input with Label -->
                                                    <div>
                                                        <label for="labelInput" class="form-label">Género</label>
                                                        <input type="text" class="form-control" name="genero" id="labelInput">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <!-- Input with Label -->
                                                    <div>
                                                        <label for="labelInput" class="form-label">Fecha de Nacimiento</label>
                                                        <input type="date" class="form-control" name="fecha_nacimiento" id="labelInput">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <!-- Input with Label -->
                                                    <div>
                                                        <label for="labelInput" class="form-label">Ciudad</label>
                                                        <input type="text" class="form-control" name="ciudad" id="labelInput">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <!-- Input with Label -->
                                                    <div>
                                                        <label for="labelInput" class="form-label">Municipio</label>
                                                        <input type="text" class="form-control" name="municipio" id="labelInput">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <!-- Input with Label -->
                                                    <div>
                                                        <label for="labelInput" class="form-label">Observaciones</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea5" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <!-- Example Textarea -->
                                                <div class="col-lg-3">
                                                    <!-- Input with Label -->
                                                    <div>
                                                        <label for="labelInput" class="form-label">Telefono Fijo</label>
                                                        <input type="text" class="form-control" name="telefono_fijo" id="labelInput">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <!-- Input with Label -->
                                                    <div>
                                                        <label for="labelInput" class="form-label">Teléfono Celular</label>
                                                        <input type="text" class="form-control" name="telefono_celular" id="labelInput">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-3">
                                                    <!-- Input with Label -->
                                                    <div>
                                                        <label for="labelInput" class="form-label">Actividad o profesión</label>
                                                        <input type="text" class="form-control" name="actividad_profesion" id="labelInput">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <!-- Input with Label -->
                                                    <div>
                                                        <label for="labelInput" class="form-label">Apoderado</label>
                                                        <input type="text" class="form-control" name="apoderado" id="labelInput">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <!-- Input with Label -->
                                                    <div>
                                                        <label for="labelInput" class="form-label">Referencia</label>
                                                        <input type="text" class="form-control" name="referencia" id="labelInput">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <!-- Input with Label -->
                                                    <div>
                                                        <label for="labelInput" class="form-label">DNI de representate legal</label>
                                                        <input type="text" class="form-control" name="dni_representante_legal" id="labelInput">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="citas" role="tabpanel">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Citas</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="listjs-table" id="customerList">
                                            
                                                <div class="table-responsive table-card mt-3 mb-1">
                                                    <table class="table align-middle table-nowrap" id="customerTable">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th scope="col" style="width: 50px;">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                                    </div>
                                                                </th>
                                                                <th class="sort">ID</th>
                                                                <th class="sort">Sucursal</th>
                                                                <th class="sort">Profesional</th>
                                                                <th class="sort">Fecha</th>
                                                                <th class="sort">Hora</th>
                                                                <th class="sort">Duración</th>
                                                                <th class="sort">Estado</th>
                                                                <th class="sort">Comentarios</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="list form-check-all">
                                                            <?php for ($i = 1; $i <= 7; $i++) { ?>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                                        </div>
                                                                    </th>
                                                                    <td class="fw-medium link-primary">#VL<?php echo $i; ?></td>
                                                                    <td class="fw-medium">Maldonado</td>
                                                                    <td class="fw-medium">Perez Manuel</td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-success  w-lg"
                                                                        style="background-color: #8DC9C0 !important">Abr. 22, 2025</button>  
                                                                    </td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-success  w-lg"
                                                                        style="background-color: #0E574C !important">Abr. 22, 2025</button> 
                                                                    </td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-success  w-lg"
                                                                        style="background-color: #1F7BA4 !important">15 minutos</button> 
                                                                    </td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-success  w-lg"
                                                                        style="background-color: #9F289B !important">No confirmado</button> 
                                                                    </td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-success  w-lg"
                                                                        style="background-color: #289F64 !important"><i class="ri-message-2-fill"></i> Ver Comentarios</button> 
                                                                    </td>
                                                                </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="comentarios-administrativos" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="ckeditor-classic"></div>
                                                    
                                                    <input type="file" class="filepond filepond-input-multiple" multiple name="filepond" data-allow-reorder="true" data-max-file-size="3MB" data-max-files="3">

                                                    <button type="button" class="btn btn-success float-end mt-1" id="btn-enviar-comentario-administrativo"><i class="ri-check-line"></i> Agregar Comentario</button>
                                                </div>
                                                <div class="col-lg-8">
                                                    <?php for ($i = 1; $i <= 3; $i++) { ?>
                                                        <div class="card">
                                                            <div class="card-header d-flex justify-content-between">
                                                                <h6 class="card-title mb-0"><i class="ri-user-fill ms-1"></i> Administrativo Maldonado</h6>
                                                                <h6><i class="ri-calendar-2-fill ms-1"></i> Creada el 16 de Julio de 2024 9:11</h6>
                                                            </div>
                                                            <div class="card-body">
                                                                <p>paciente nos hace transferencia</p>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tareas-gestion" role="tabpanel">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between">
                                            <h6 class="card-title mb-0">Tareas de Gestión</h6>
                                            <div class="d-flex gap-4">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" checked>
                                                    <label class="form-check-label" for="formCheck6">
                                                        Ver tareas completadas
                                                    </label>
                                                </div>
                                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#ModalTaskGestion"><i class="ri-add-line"></i> Agregar Tarea</button>
                                            </div>
                                            
                                        </div>
                                        <div class="card-body">
                                        <div class="listjs-table" id="customerList">
                                            
                                            <div class="table-responsive table-card mt-3 mb-1">
                                                <table class="table align-middle table-nowrap" id="customerTable">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th class="sort">Tareas</th>
                                                            <th class="sort">Descripción</th>
                                                            <th class="sort">Fecha</th>
                                                            <th class="sort"></th>
                                                            <th class="sort">Estatus</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="list form-check-all">
                                                        <?php for ($i = 1; $i <= 7; $i++) { ?>
                                                            <tr>
                                                                <td class="fw-medium"> <div class="spinner-task-pink ms-1"></div> Agendar Cita</td>
                                                                <td class="fw-medium">Taraa compeltada automaticamente</td>
                                                                <td>01/05/2025</td>
                                                                <td>-</td>
                                                                <td>Finalizada</td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <!-- Footer -->
            <?php include './layout/footer.php'; ?>
            <!-- end Footer -->
            <?php include './pacientes-datos-personales-add-tarea-de-gestion.php'; ?>
            <?php include './pacientes-perfil-dar-cita.php'; ?>
        </div>
        <!-- end main content-->

<?php include './layout/finheader.php'; ?>