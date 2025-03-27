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
                                                        <th class="sort">Hora</th>
                                                        <th class="sort">Paciente</th>
                                                        <th class="sort">Doctor</th>
                                                        <th class="sort">Estado de la Cita</th>
                                                        <th class="sort">Celular de Contacto</th>
                                                        <th class="sort">Situación</th>
                                                        <th class="sort"></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                <?php for ($i = 1; $i <= 2; $i++) { ?>
                                                    <tr class="align-middle p-0">
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="py-0 px-1">
                                                            <button type="button" class="btn btn-time w-lg">09:00 - 10:00</button>
                                                        </td>
                                                        <td class="py-0 px-1">
                                                            <button type="button" class="btn btn-ghost-primary material-shadow-none btn-ghost-secondary " id="dropdownMenuOffset"
                                                                data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20"
                                                                style="background-color: transparent; color: #000">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0"><img src="assets/images/users/avatar-10.jpg" alt="" class="avatar-xs rounded-circle"></div>
                                                                    <div class="flex-grow-1 ms-2 name">Tonya Noble</div>
                                                                </div>   
                                                            </button>
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
                                                        <td class="py-0 px-1">
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
                                                        <td class="py-0 px-1">
                                                            <div class="d-grid gap-2">
                                                                <!-- Dropdown Options -->    
                                                                <button type="button" class="btn btn-atendido  dropdown-toggle w-lg" id="dropdownMenuOffset"
                                                                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                                                                    Atentido
                                                                </button>
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
                                                            </div>
                                                        </td>
                                                        <td class="py-0 px-1">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                <button type="button" class="btn btn-success btn-icon btn-sm" style="background-color: #25D366">
                                                                    <i class="ri-whatsapp-line ri-2x "></i>
                                                                </button>
                                                                </div>
                                                                <div class="flex-grow-1 ms-2 name">+598 987 654</div>
                                                            </div>
                                                        </td>
                                                        <td class="py-0 px-1">
                                                            <button type="button" class="btn btn-success w-lg">Hay saldo</button>  
                                                        </td>
                                                        <td class="py-0 px-1">
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
                                                    <?php for ($i = 1; $i <= 2; $i++) { ?>
                                                    <tr class="align-middle p-0">
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="py-0 px-1">
                                                            <button type="button" class="btn btn-time w-lg">09:00 - 10:00</button>
                                                        </td>
                                                        <td class="py-0 px-1">
                                                            <button type="button" class="btn btn-ghost-primary material-shadow-none btn-ghost-secondary " id="dropdownMenuOffset"
                                                                data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20"
                                                                style="background-color: transparent; color: #000">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0"><img src="assets/images/users/avatar-10.jpg" alt="" class="avatar-xs rounded-circle"></div>
                                                                    <div class="flex-grow-1 ms-2 name">Tonya Noble</div>
                                                                </div>   
                                                            </button>
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
                                                        <td class="py-0 px-1">
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
                                                        <td class="py-0 px-1 ">
                                                            <!-- Dropdown Options -->
                                                            <div class="d-grid gap-2">   
                                                                <button type="button" class="btn btn-no-confirmado  dropdown-toggle w-lg" id="dropdownMenuOffset"
                                                                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                                                                    No Confirmado
                                                                </button>
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
                                                            </div> 
                                                        </td>
                                                        <td class="py-0 px-1">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                <button type="button" class="btn btn-success btn-icon btn-sm" style="background-color: #25D366">
                                                                    <i class="ri-whatsapp-line ri-2x "></i>
                                                                </button>
                                                                </div>
                                                                <div class="flex-grow-1 ms-2 name">+598 987 654</div>
                                                            </div>
                                                        </td>
                                                        <td class="py-0 px-1">
                                                            <button type="button" class="btn btn-warning w-lg">No hay saldo</button>  
                                                        </td>
                                                        <td class="py-0 px-1 ">
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
                                                    <?php for ($i = 1; $i <= 2; $i++) { ?>
                                                    <tr class="align-middle p-0">
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="py-0 px-1">
                                                            <button type="button" class="btn btn-time w-lg">09:00 - 10:00</button>
                                                        </td>
                                                        <td class="py-0 px-1">
                                                            <button type="button" class="btn btn-ghost-primary material-shadow-none btn-ghost-secondary " id="dropdownMenuOffset"
                                                                data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20"
                                                                style="background-color: transparent; color: #000">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0"><img src="assets/images/users/avatar-10.jpg" alt="" class="avatar-xs rounded-circle"></div>
                                                                    <div class="flex-grow-1 ms-2 name">Tonya Noble</div>
                                                                </div>   
                                                            </button>
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
                                                        <td class="py-0 px-1">
                                                            <div class="name">Alex Clarke</div>
                                                            <span class="badge bg-success text-uppercase dropdown"
                                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">box1</span> 
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
                                                        <td class="py-0 px-1">
                                                            <div class="d-grid gap-2">          
                                                                <!-- Dropdown Options -->    
                                                                <button type="button" class="btn btn-no-asiste dropdown-toggle w-lg" id="dropdownMenuOffset"
                                                                    data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                                                                    No Asiste
                                                                </button>
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
                                                            </div>                                                                
                                                        </td>
                                                        <td class="py-0 px-1">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                <button type="button" class="btn btn-success btn-icon btn-sm" style="background-color: #25D366">
                                                                    <i class="ri-whatsapp-line ri-2x "></i>
                                                                </button>
                                                                </div>
                                                                <div class="flex-grow-1 ms-2 name">+598 987 654</div>
                                                            </div>
                                                        </td>
                                                        <td class="py-0 px-1">
                                                            <button type="button" class="btn btn-success w-lg">Hay saldo</button>  
                                                        </td>
                                                        <td class="py-0 px-1">
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
                                            <div class="noresult" style="display: none">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                                    <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any orders for you search.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
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