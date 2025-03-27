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
                                <h4 class="mb-sm-0">Ficha de paciente - Gustavo Aquino - Recaudación</h4>

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

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Ingresar un pago</h4>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title mb-0">Planes de Tratamientos</h4>
                                    <p class="text-muted mb-4 fs-11">Selecciona el plan de tratamiento a pagar o a la cual generar link de pago</p>
                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap table-borderless">
                                            <thead class="table-light">
                                                <tr>
                                                    <th></th>
                                                    <th scope="col">Presupuestos</th>
                                                    <th scope="col">Total de Presupuesto</th>
                                                    <th scope="col">Realizado</th>
                                                    <th scope="col">Pagado</th>
                                                    <th scope="col">Saldo por abonar</th>                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="checkbox1">
                                                            <label class="form-check-label" for="checkbox1"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p><strong>Tratamiento #123456: Protesis Superior e Inferior</strong> </p>
                                                        <p class="text-muted mt-1">Ultima atención: 12/03/2025, a las 9:00 <br>
                                                            Dr. Nadie Barindeli <br>
                                                            Paciente: Gustavo Aquino
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p class="">$10.000</p>
                                                    </td>
                                                    <td>
                                                        <p class="">$8.000</p>
                                                    </td>
                                                    <td>
                                                        <p class="">$2.000</p>
                                                    </td>
                                                    <td>
                                                        <p class="">$2.000</p>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer ">
                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light float-end" disabled>Pagar Tratamientos</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Por cuotas de financiamiento</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap table-borderless">
                                            <thead class="table-light">
                                                <tr>
                                                    <th></th>
                                                    <th scope="col">Cuotas de credito</th>
                                                    <th scope="col">Monto</th>
                                                    <th scope="col">Pagado</th>
                                                    <th scope="col">Saldo por abonar</th>                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer ">
                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light float-end" >Pagar Cuota</button>
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

        </div>
        <!-- end main content-->

<?php include './layout/finheader.php'; ?>