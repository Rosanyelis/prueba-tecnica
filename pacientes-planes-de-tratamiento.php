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
                                <h4 class="mb-sm-0">Ficha de paciente - Gustavo Aquino</h4>

                                <div class="page-title-right">
                                    <a href="./nuevo-paciente.php" class="btn btn-success"><i class="ri-add-line"></i> Nuevo Paciente</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="user-profile-header-banner p-3 rounded">
                                    <div class="row gy-2 justify-content-center ">
                                        <div class="col-lg-2 col-md-2 col-sm-12 text-center p-2">
                                            <div class="profile-user position-relative d-inline-block ">
                                                <img src="../assets/images/users/avatar-1.jpg" class="rounded-circle avatar-xxl img-thumbnail user-profile-image material-shadow" alt="user-profile-image">
                                                <div class="avatar-xs p-0 rounded-circle profile-photo-edit ">
                                                    <input id="profile-img-file-input" type="file" class="profile-img-file-input">
                                                    <label for="profile-img-file-input" class="profile-photo-edit avatar-xs ">
                                                        <span class="avatar-title rounded-circle bg-light text-body material-shadow">
                                                            <i class="ri-pencil-fill"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 mx-2" >
                                            <!-- <div class="user-profile-info "> -->
                                                <h4 class="mb-2 text-white">Gustavo Josue Aquino </h4>
                                                <ul
                                                    class="list-unstyled mb-0 text-white align-items-center  justify-content-sm-start justify-content-center ">
                                                    <li><span class="fw-medium">ID: 12345</span></li>
                                                    <li><span class="fw-medium">Gutavo@hotmail.com</span></li>
                                                    <li><span class="fw-medium">+123 456 789</span></li>
                                                    <li class="mt-lg-3 mt-sm-0 mt-md-0"><span class="fw-medium">Sin convenio</span></li>
                                                </ul>
                                            <!-- </div> -->
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-12 ml-2 ">
                                            <div class="card card-color ">
                                                <div class="card-header card-color-header text-center py-1 ">
                                                    <strong>Alertas Médicas</strong>
                                                </div>
                                                <div class="card-body card-color-body py-1" >
                                                    <ul class="list-unstyled mb-0 ">
                                                        <li>no tiene</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-12">
                                            <div class="card card-color rounded-bottom">
                                                <div class="card-header card-color-header text-center py-1">
                                                    <strong>Enfermedades</strong>
                                                </div>
                                                <div class="card-body card-color-body py-1">
                                                    <ul class="list-unstyled mb-0 ">
                                                        <li>no tiene</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-12">
                                            <div class="card card-color ">
                                                <div class="card-header card-color-header text-center py-1">
                                                    <strong>Medicamentos</strong>
                                                </div>
                                                <div class="card-body card-color-body py-1">
                                                    <ul class="list-unstyled mb-0 ">
                                                        <li>no tiene</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                <?php include './layout/menu-perfil-paciente.php'; ?>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-header bg-primary">
                                    <h5 class="text-white">Plan de tratamiento</h5>
                                    <h6 class="text-white mb-0 fw-medium ">#123465</h6>
                                </div>
                                <div class="card-body d-flex justify-content-between">
                                    <p>Protesis superior e inferior</p> <a href="#" class="btn btn-link btn-sm p-0"><i class="ri-pencil-fill"></i></a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header text-center">
                                    <h5>Presupuesto total</h5>
                                    <h6 class="mb-0 fw-medium ">$ 58.080</h6>
                                </div>
                                <div class="card-body d-flex flex-column ">
                                    <div class="d-flex justify-content-between py-0">
                                        <p class="py-0">Descuento comercial</p> <p>10% <a href="#" class="btn btn-link btn-sm p-0"><i class="ri-pencil-fill"></i></a></p>
                                    </div>
                                    <div class="d-flex justify-content-between py-0">
                                        <p class="py-0">Realizado</p> <p>100%</p>
                                    </div>
                                    <div class="d-flex justify-content-between py-0">
                                        <p class="py-0">Abonado</p> <p>$ 25.200</p>
                                    </div>
                                    <div class="d-flex justify-content-between py-0">
                                        <p class="py-0">Saldo por abonar</p> <p>$ 32.850</p>
                                    </div>
                                </div>
                                <div class="card-footer text-center d-flex justify-content-between">
                                    <h6>Abonos libres</h6> <h6>$ 25.250</h6>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body d-flex flex-column">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-2">
                                            <i class="ri-group-fill display-6"></i>
                                        </div>
                                        <div>
                                            <h5 class="fs-14 my-1 fw-medium">
                                                Profesional a cargo
                                            </h5>
                                            <span class="text-muted">Dr(a) Nadia Barindelli</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-2">
                                            <i class="ri-briefcase-fill display-6"></i>
                                        </div>
                                        <div>
                                            <h5 class="fs-14 my-1 fw-medium">
                                                Convenio
                                            </h5>
                                            <span class="text-muted">Sin convenio</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-2">
                                            <i class="ri-home-3-fill display-6"></i>
                                        </div>
                                        <div>
                                            <h5 class="fs-14 my-1 fw-medium">
                                                Sucursal
                                            </h5>
                                            <span class="text-muted">IDU Maldonado</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header text-center align-items-center">
                                    <h5>Citas del Paciente</h5>
                                </div>
                                <div class="card-body d-flex flex-column ">
                                    <p>
                                        <span class="fw-bold">Cita #154137</span> <br>
                                        Dr(a).Nadia Barindelli <br>
                                        IDU Maldonado <br>
                                        Cambio de fecha <br>
                                        Duración cita: 30 min
                                    </p>

                                    <p>
                                        <span class="fw-bold">Cita #154153</span> <br>
                                        5 de marzo de 2025 9:00 <br>
                                        Dr(a).Nadia Barindelli <br>
                                        IDU Maldonado <br>
                                        Confirmado por teléfono <br>
                                        Duración cita: 30 min
                                    </p>
                                </div>
                                <div class="card-footer text-center ">
                                    <a href="#" class="btn btn-link btn-sm p-0">Ver todas las citas</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-header bg-primary d-flex justify-content-between align-items-center">
                                    <h5 class="text-white">Permanente | Temporal |</h5>
                                    <div>
                                        <button class="btn btn-link btn-sm dropdown-toggle text-white"
                                            id="finanza" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-money-dollar-circle-line fs-20"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="finanza">
                                            <li><a class="dropdown-item" href="#">Financiamiento</a></li>
                                            <li><a class="dropdown-item" href="#">Descuento por planilla</a></li>
                                            <li><a class="dropdown-item" href="#">Recaudar este tratamiento</a></li>
                                            <li><a class="dropdown-item" href="#">Transferir abono a otro plan de tratamiento</a></li>
                                        </ul>
                                        <button class="btn btn-link btn-sm dropdown-toggle text-white"
                                            id="setting" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-settings-4-fill fs-20"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="setting">
                                            <li><a class="dropdown-item" href="#">Duplicar plan de tratamiento</a></li>
                                            <li><a class="dropdown-item" href="#">Crear tratamiento alternativo</a></li>
                                            <li><a class="dropdown-item" href="#">Solicitar atención con otro profesional </a></li>
                                            <li><a class="dropdown-item" href="#">Finalizar</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item text-danger" href="#">Eliminar</a></li>
                                        </ul>
                                        <button class="btn btn-link btn-sm dropdown-toggle text-white"
                                            id="print" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-printer-fill fs-20"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="print">
                                            <li><a class="dropdown-item" href="#">Presupuesto completo</a></li>
                                            <li><a class="dropdown-item" href="#">Presupuesto solo total</a></li>
                                            <li><a class="dropdown-item" href="#">Presupuesto sin detalle</a></li>
                                            <li><a class="dropdown-item" href="#">Orden de laboratorio</a></li>
                                            <li><a class="dropdown-item" href="#">Plan de atención </a></li>
                                            <li><a class="dropdown-item" href="#">Secciones</a></li>
                                            <li><a class="dropdown-item" href="#">Odontograma</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <img src="../assets/dientes.png" class="img-fluid" width="100%" alt="">
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-header d-flex flex-wrap gap-2">
                                    <button class="btn btn-outline-primary waves-effect waves-light material-shadow-none btn-sm ">
                                        <i class="ri-add-line"></i> Sección
                                    </button>
                                    <button class="btn btn-outline-success waves-effect waves-light material-shadow-none btn-sm ">
                                        <i class="ri-add-line"></i> Prestación
                                    </button>
                                    <button class="btn btn-outline-success waves-effect waves-light material-shadow-none btn-sm dropdown-toggle" 
                                        id="prestacion" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-add-line"></i> Acciones
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="prestacion">
                                        <li><a class="dropdown-item" href="#">Evolucionar multiples prestaciones</a></li>
                                        <li><a class="dropdown-item" href="#">Establecer descuentos multiples</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="listjs-table" id="customerList"> 
                                       <div class="table-responsive table-card">
                                           <table class="table align-middle table-nowrap" id="customerTable">
                                               <thead class="table-light">
                                                   <tr>
                                                       <th scope="col" style="width: 50px;">
                                                           <div class="form-check">
                                                               <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                           </div>
                                                       </th>
                                                       <th class="sort">Sección</th>
                                                       <th class="sort">Prestaciones</th>
                                                       <th class="sort">Pieza</th>
                                                       <th class="sort">Dscto</th>
                                                       <th class="sort">Precio</th>
                                                       <th class="sort">Pago</th>
                                                   </tr>
                                               </thead>
                                               <tbody class="list form-check-all">
                                                   <tr>
                                                       <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="id">
                                                            </div>
                                                        </td>
                                                        <td><img src="./assets/seccion.png" alt="" class="img-fluid" width="20"></td>
                                                        <td>Protesis Completa German</td>
                                                        <td><img src="./assets/add-diente.png" alt="" class="img-fluid" width="20"></td>
                                                        <td>10%</td>
                                                        <td>$ 22.750</td>
                                                        <td>
                                                            <i class="ri-shopping-cart-2-fill"></i>
                                                            <div class="spinner-task-rojo ms-1"></div>
                                                        </td>
                                                   </tr>
                                                   <tr>
                                                       <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="id">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="./assets/seccion.png" alt="" class="img-fluid" width="20">
                                                        </td>
                                                        <td>Protesis Completa German</td>
                                                        <td><img src="./assets/add-diente.png" alt="" class="img-fluid" width="20"></td>
                                                        <td>10%</td>
                                                        <td>$ 22.750</td>
                                                        <td>
                                                            <i class="ri-shopping-cart-2-fill"></i>
                                                            <div class="spinner-task-green ms-1"></div>
                                                        </td>
                                                   </tr>
                                               </tbody>
                                           </table>
                                       </div>
                                    </div>

                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header d-flex flex-column gap-2">
                                    <h4 class="card-title mb-0">Evoluciones</h4>
                                    <p class="text-muted mb-0 fs-11">(Se incluirán en la impresión de evoluciones)</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-sm table-centered mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Evoluciones</th>
                                                    <th>Estado</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Evolucion 1</td>
                                                    <td><span class="badge bg-warning">Pendiente por firmar</span></td>
                                                    <td>
                                                        <button class="btn btn-outline-primary waves-effect waves-light material-shadow-none btn-sm">
                                                            <i class="ri-pencil-fill"></i> Solicitar firma
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title mb-0">Consentimientos</h4>
                                    <button class="btn btn-outline-primary waves-effect waves-light material-shadow-none btn-sm">
                                        <i class="ri-add-line"></i> Agregar consentimiento
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-sm table-centered mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Consentimiento</th>
                                                    <th>Estado</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="3">No hay consentimientos por firmar</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header d-flex flex-column gap-2">
                                    <h4 class="card-title mb-0">Comentarios para el paciente</h4>
                                    <p class="text-muted mb-0 fs-11">(Se incluirán en la impresión de presupuestos)</p>
                                </div>
                                <div class="card-body">
                                    <p>No hay comentarios</p>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Solicitudes de atención con otro profesional</h4>
                                </div>
                                <div class="card-body">
                                    <p>No se ha realizado ninguna solicitud para este tratamiento.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <!-- Footer -->
            <?php include './layout/footer.php'; ?>

        </div>
        <!-- end main content-->

<?php include './layout/finheader.php'; ?>