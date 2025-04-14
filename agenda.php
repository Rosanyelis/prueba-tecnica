<?php include './layout/header.php'; ?>

<!-- top menu  -->
<?php include './layout/topmenu.php'; ?>

<!-- ========== App Menu ========== -->
<?php include './layout/navigation.php'; ?>        
<!-- Data Table css -->
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
                                <h4 class="mb-sm-0">Agenda</h4>

                                <div class="page-title-right">
                                   
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="example" class="table table-sm  nowrap table-striped align-middle " style="width:100%">
                                        <thead class="text-center">
                                            <tr>
                                                <th>Hora</th>
                                                <th>Paciente</th>
                                                <th>Doctor</th>
                                                <th>Estado de la Cita</th>
                                                <th>Celular de Contacto</th>
                                                <th style="width: 50px;">Situación</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php for ($i = 1; $i <= 3; $i++) { ?>
                                            <tr>
                                                <td><span class="fw-medium">09:00 - 10:00</span></td>
                                                <td>
                                                    <span data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0"><img src="assets/images/users/avatar-10.jpg" alt="" class="avatar-xs rounded-circle"></div>
                                                            <div class="flex-grow-1 ms-2 name">Tonya Noble</div>
                                                            <div class="flex-grow-1 ms-2"><i class='bx bx-message-rounded-dots align-middle fs-18'></i></div>
                                                        </div>   
                                                    </span>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                                        <li><a class="dropdown-item" href="./pacientes-planes-de-tratamiento.php">Plan de tratamiento</a></li>
                                                        <li><a class="dropdown-item" href="./pacientes-factauracion-y-pago.php">Recaudación</a></li>
                                                        <li><a class="dropdown-item" href="./pacientes-datos-personales.php">Datos Personales</a></li>
                                                        <li><a class="dropdown-item" href="./pacientes-ficha-clinica.php">Ir a la ficha clinica del paciente</a></li>
                                                        <li><a class="dropdown-item" data-bs-toggle="modal" href="#ModalAgendar">Cambiar fecha / horario</a></li>
                                                        <li><a class="dropdown-item" href="#">Agregar comentario</a></li>
                                                        <li><a class="dropdown-item" href="./pacientes-datos-personales.php">Comentarios administrativos</a></li>    
                                                    </ul>
                                                </td>
                                                <td>
                                                    <div class="name">Fernando Gutierrez</div>
                                                    <span class="badge bg-success text-uppercase dropdown"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        box1
                                                    </span> 
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                                        <li><a class="dropdown-item" href="#">Box 1</a></li>    
                                                        <li><a class="dropdown-item" href="#">Box 2</a></li>    
                                                        <li><a class="dropdown-item" href="#">Box 3</a></li>    
                                                        <li><a class="dropdown-item" href="#">Box 4</a></li>    
                                                        <li><a class="dropdown-item" href="#">Box 5</a></li> 
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="#">Agregar</a></li>
                                                    </ul>   
                                                </td>
                                                <td style="text-align: left;">
                                                    <span id="dropdownMenuOffset" class="dropdown"
                                                        data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="5,20">
                                                        Confirmado por Teléfono <i class="ri-arrow-drop-down-line align-middle fs-18"></i>
                                                    </span>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                                        <li><a class="dropdown-item" href="#">Atendido</a></li>
                                                        <li><a class="dropdown-item" href="#">Atendiendose</a></li>
                                                        <li><a class="dropdown-item" href="#">Confirmado por Teléfono</a></li>
                                                        <li><a class="dropdown-item" href="#">En sala de espera</a></li>
                                                        <li><a class="dropdown-item" href="#">No asiste</a></li>
                                                        <div class="dropdown-divider"></div>
                                                        <li><a class="dropdown-item" href="#">Anulado</a></li>
                                                        <li><a class="dropdown-item" href="#">Diagnósticado</a></li>
                                                    </ul>
                                                </td>
                                                <td >
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                        <button type="button" class="btn btn-success btn-icon btn-sm" style="background-color: #25D366">
                                                            <i class="ri-whatsapp-line ri-2x "></i>
                                                        </button>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 name">+598 987 654</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-success btn-sm w-md fs-12 ">Hay saldo</button>  
                                                </td>
                                                <td>
                                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end" style="">
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i> Ver
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item edit-list" data-edit-id="3" href="#">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Editar
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a class="dropdown-item remove-list" href="#" data-id="3" data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                                                <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Eliminar
                                                            </a>    
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        <?php for ($i = 1; $i <= 3; $i++) { ?>
                                            <tr>
                                                <td><span class="fw-medium">09:00 - 10:00</span></td>
                                                <td>
                                                    <span data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0"><img src="assets/images/users/avatar-10.jpg" alt="" class="avatar-xs rounded-circle"></div>
                                                            <div class="flex-grow-1 ms-2 name">Tonya Noble</div>
                                                            <div class="flex-grow-1 ms-2"><i class='bx bx-message-rounded-dots align-middle fs-18'></i></div>
                                                        </div>   
                                                    </span>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                                        <li><a class="dropdown-item" href="./pacientes-planes-de-tratamiento.php">Plan de tratamiento</a></li>
                                                        <li><a class="dropdown-item" href="./pacientes-factauracion-y-pago.php">Recaudación</a></li>
                                                        <li><a class="dropdown-item" href="./pacientes-datos-personales.php">Datos Personales</a></li>
                                                        <li><a class="dropdown-item" href="./pacientes-ficha-clinica.php">Ir a la ficha clinica del paciente</a></li>
                                                        <li><a class="dropdown-item" data-bs-toggle="modal" href="#ModalAgendar">Cambiar fecha / horario</a></li>
                                                        <li><a class="dropdown-item" href="#">Agregar comentario</a></li>
                                                        <li><a class="dropdown-item" href="./pacientes-datos-personales.php">Comentarios administrativos</a></li>    
                                                    </ul>
                                                </td>
                                                <td>
                                                    <div class="name">Alex Clarke</div>
                                                    <span class="badge bg-success text-uppercase dropdown"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        box1
                                                    </span> 
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                                        <li><a class="dropdown-item" href="#">Box 1</a></li>    
                                                        <li><a class="dropdown-item" href="#">Box 2</a></li>    
                                                        <li><a class="dropdown-item" href="#">Box 3</a></li>    
                                                        <li><a class="dropdown-item" href="#">Box 4</a></li>    
                                                        <li><a class="dropdown-item" href="#">Box 5</a></li> 
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="#">Agregar</a></li>
                                                    </ul>   
                                                </td>
                                                <td style="text-align: left;">
                                                    <span id="dropdownMenuOffset" class="dropdown"
                                                        data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="5,20">
                                                        No Confirmado <i class="ri-arrow-drop-down-line align-middle fs-18"></i>
                                                    </span>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                                        <li><a class="dropdown-item" href="#">Atendido</a></li>
                                                        <li><a class="dropdown-item" href="#">Atendiendose</a></li>
                                                        <li><a class="dropdown-item" href="#">Confirmado por Teléfono</a></li>
                                                        <li><a class="dropdown-item" href="#">En sala de espera</a></li>
                                                        <li><a class="dropdown-item" href="#">No asiste</a></li>
                                                        <div class="dropdown-divider"></div>
                                                        <li><a class="dropdown-item" href="#">Anulado</a></li>
                                                        <li><a class="dropdown-item" href="#">Diagnósticado</a></li>
                                                    </ul>
                                                </td>
                                                <td >
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                        <button type="button" class="btn btn-success btn-icon btn-sm" style="background-color: #25D366">
                                                            <i class="ri-whatsapp-line ri-2x "></i>
                                                        </button>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 name">+598 987 654</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-warning btn-sm w-md fs-12">No hay saldo</button>  
                                                </td>
                                                <td>
                                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end" style="">
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i> Ver
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item edit-list" data-edit-id="3" href="#">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Editar
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a class="dropdown-item remove-list" href="#" data-id="3" data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                                                <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Eliminar
                                                            </a>    
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        <?php for ($i = 1; $i <= 3; $i++) { ?>
                                            <tr>
                                                <td><span class="fw-medium">09:00 - 10:00</span></td>
                                                <td>
                                                    <span data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0"><img src="assets/images/users/avatar-10.jpg" alt="" class="avatar-xs rounded-circle"></div>
                                                            <div class="flex-grow-1 ms-2 name">Tonya Noble</div>
                                                            <div class="flex-grow-1 ms-2"><i class='bx bx-message-rounded-dots align-middle fs-18'></i></div>
                                                        </div>   
                                                    </span>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                                        <li><a class="dropdown-item" href="./pacientes-planes-de-tratamiento.php">Plan de tratamiento</a></li>
                                                        <li><a class="dropdown-item" href="./pacientes-factauracion-y-pago.php">Recaudación</a></li>
                                                        <li><a class="dropdown-item" href="./pacientes-datos-personales.php">Datos Personales</a></li>
                                                        <li><a class="dropdown-item" href="./pacientes-ficha-clinica.php">Ir a la ficha clinica del paciente</a></li>
                                                        <li><a class="dropdown-item" data-bs-toggle="modal" href="#ModalAgendar">Cambiar fecha / horario</a></li>
                                                        <li><a class="dropdown-item" href="#">Agregar comentario</a></li>
                                                        <li><a class="dropdown-item" href="./pacientes-datos-personales.php">Comentarios administrativos</a></li>    
                                                    </ul>
                                                </td>
                                                <td>
                                                    <div class="name">Alex Clarke</div>
                                                    <span class="badge bg-success text-uppercase dropdown"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        box1
                                                    </span> 
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                                        <li><a class="dropdown-item" href="#">Box 1</a></li>    
                                                        <li><a class="dropdown-item" href="#">Box 2</a></li>    
                                                        <li><a class="dropdown-item" href="#">Box 3</a></li>    
                                                        <li><a class="dropdown-item" href="#">Box 4</a></li>    
                                                        <li><a class="dropdown-item" href="#">Box 5</a></li> 
                                                        <li class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="#">Agregar</a></li>
                                                    </ul>   
                                                </td>
                                                <td style="text-align: left;">
                                                    <span id="dropdownMenuOffset" class="dropdown"
                                                        data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="5,20">
                                                        No Asiste <i class="ri-arrow-drop-down-line align-middle fs-18"></i>
                                                    </span>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                                        <li><a class="dropdown-item" href="#">Atendido</a></li>
                                                        <li><a class="dropdown-item" href="#">Atendiendose</a></li>
                                                        <li><a class="dropdown-item" href="#">Confirmado por Teléfono</a></li>
                                                        <li><a class="dropdown-item" href="#">En sala de espera</a></li>
                                                        <li><a class="dropdown-item" href="#">No asiste</a></li>
                                                        <div class="dropdown-divider"></div>
                                                        <li><a class="dropdown-item" href="#">Anulado</a></li>
                                                        <li><a class="dropdown-item" href="#">Diagnósticado</a></li>
                                                    </ul>
                                                </td>
                                                <td >
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                        <button type="button" class="btn btn-success btn-icon btn-sm" style="background-color: #25D366">
                                                            <i class="ri-whatsapp-line ri-2x "></i>
                                                        </button>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 name">+598 987 654</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-success btn-sm w-md fs-12">Hay saldo</button>  
                                                </td>
                                                <td>
                                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end" style="">
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i> Ver
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item edit-list" data-edit-id="3" href="#">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Editar
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a class="dropdown-item remove-list" href="#" data-id="3" data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                                                <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Eliminar
                                                            </a>    
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <!-- Footer -->
            <?php include './layout/footer.php'; ?>
            <?php include './agenda-cambiar-fecha-horario.php'; ?>

        </div>
        <!-- end main content-->

<?php include './layout/finheader.php'; ?>