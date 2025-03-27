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
                                    <a href="./nuevo-paciente.php" class="btn btn-success"><i class="ri-add-line"></i> Nuevo Paciente</a> 
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
                                                        <th class="sort">ID</th>
                                                        <th class="sort">Paciente</th>
                                                        <th class="sort">Apellido</th>
                                                        <th class="sort">Tratamientos</th>
                                                        <th class="sort">Celular de Contacto</th>
                                                        <th class="sort">Deudas</th>
                                                        <th class="sort"></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                                                    <tr class="align-middle p-0">
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id">
                                                            <a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a>
                                                        </td>
                                                        
                                                        <td class="py-0 px-1">
                                                            <button type="button" class="btn btn-ghost-primary material-shadow-none btn-ghost-secondary " 
                                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                                style="background-color: transparent; color: #000">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0"><img src="assets/images/users/avatar-10.jpg" alt="" class="avatar-xs rounded-circle"></div>
                                                                    <div class="flex-grow-1 ms-2 name text-bold">Tonya Noble</div>
                                                                </div>   
                                                            </button>
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
                                                        <td class="py-0 px-1">
                                                            Perez Manuel
                                                        </td>
                                                        <td class="py-0 px-1">
                                                            <button type="button" class="btn btn-soft-primary w-lg text-bold"
                                                            style="background-color: #dcf3f3; color:#000">1</button>
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
                                                            <button type="button" class="btn btn-success w-lg">Sin deuda</button>  
                                                        </td>
                                                        <td class="py-0 px-1">
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
                                                                    <a class="dropdown-item" href="apps-ecommerce-product-details.html">
                                                                        Ir a tratamientos
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="apps-ecommerce-product-details.html">
                                                                        Ir a pagos recibidos
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="apps-ecommerce-product-details.html">
                                                                        Ir a recaudación
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="apps-ecommerce-product-details.html">
                                                                        Deshabilitar pacientes
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

        </div>
        <!-- end main content-->

<?php include './layout/finheader.php'; ?>