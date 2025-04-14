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
                                <h4 class="mb-sm-0">Pacientes</h4>

                                <div class="page-title-right">
                                    <a href="./nuevo-paciente.php" class="btn btn-success btn-sm"><i class="ri-add-line"></i> Nuevo Paciente</a> 
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="example" class="table table-sm  nowrap table-striped align-middle" style="width:100%">
                                        <thead class="text-center">
                                            <tr>
                                                <th class="sort">ID</th>
                                                <th class="sort">Paciente</th>
                                                <th class="sort">Apellido</th>
                                                <th class="sort">Tratamientos</th>
                                                <th class="sort">Celular de Contacto</th>
                                                <th class="sort">Deudas</th>
                                                <th class="sort"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 1; $i <= 10; $i++) { ?>
                                            <tr >
                                                <td class="id">
                                                    <a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a>
                                                </td>
                                                <td>
                                                    <span data-bs-toggle="dropdown">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0"><img src="assets/images/users/avatar-10.jpg" alt="" class="avatar-xs rounded-circle"></div>
                                                            <div class="flex-grow-1 ms-2 name text-bold">Tonya Noble</div>
                                                        </div>   
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-lg-start p-0 " 
                                                        x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);
                                                        width: 70vw;">
                                                        <div class="p-4">
                                                            <div class="row g-5">
                                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 text-center">
                                                                    <h6>Foto de perfil</h6>
                                                                    <img src="assets/images/users/avatar-10.jpg" class="img-fluid rounded-circle" width="150" height="150" id alt="">
                                                                </div>
                                                                <div class="col-3 border-start">
                                                                    <h6>Datos personales</h6>
                                                                    <div class="d-flex flex-column">
                                                                        <h6>fulanito@example.com</h6>
                                                                        <h6>Telefono</h6>
                                                                        <h6>Sin convenio</h6>
                                                                        <h6>Celular</h6>
                                                                        <h6>Dirección</h6>
                                                                    </div>

                                                                    <a href="./pacientes-datos-personales.php" class="btn btn-link mt-0">Ir a datos personales</a>
                                                                </div>
                                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 border-start">
                                                                    <h6>Tratamientos</h6>
                                                                    <div class="d-flex justify-content-between">
                                                                        <h6>Activos</h6>
                                                                        <h6>4</h6>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between">
                                                                        <h6>Expirados</h6>
                                                                        <h6>$ 4000</h6>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between">
                                                                        <h6>Finalizados</h6>
                                                                        <h6>$ 4000</h6>
                                                                    </div>
                                                                    

                                                                    <a href="./pacientes-planes-de-tratamiento.php" class="btn btn-link mt-5">Ir a tratamientos</a>
                                                                </div>
                                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 border-start">
                                                                    <h6>Deudas</h6>
                                                                    <div class="d-flex justify-content-between">
                                                                        <h6>Realizado</h6>
                                                                        <h6>$ 2000</h6>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between">
                                                                        <h6>Abonado</h6>
                                                                        <h6>$ 2000</h6>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between">
                                                                        <h6>Saldo para abonar</h6>
                                                                        <h6>$ 4000</h6>
                                                                    </div>

                                                                    <a href="./pacientes-facturacion-y-pago.php" class="btn btn-link mt-5">Ir a recaudación</a>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    Perez Manuel
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-soft-primary btn-sm w-md text-bold"
                                                    style="background-color: #dcf3f3; color:#000">1</button>
                                                </td>
                                                <td>
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
                                                    <button type="button" class="btn btn-success btn-sm w-md ">Sin deuda</button>  
                                                </td>
                                                <td>
                                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end" style="">
                                                        <li>
                                                            <a class="dropdown-item" href="./pacientes-datos-personales.php">
                                                                Ir a datos personales
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="./pacientes-planes-de-tratamiento.php">
                                                                Ir a tratamientos
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                Ir a pagos recibidos
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="./pacientes-facturacion-y-pago.php">
                                                                Ir a recaudación
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                Deshabilitar pacientes
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>     
                            </div><!-- end card -->
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

        </div>
        <!-- end main content-->

<?php include './layout/finheader.php'; ?>