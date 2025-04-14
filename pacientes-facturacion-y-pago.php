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
                    <?php include './layout/preview-pacientes.php'; ?>

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
            <?php include './pacientes-perfil-dar-cita.php'; ?>
        </div>
        <!-- end main content-->

<?php include './layout/finheader.php'; ?>