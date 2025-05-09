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
                                <h4 class="mb-sm-0">Cajas / cajas  - 12 / 05 / 2025</h4>

                                <div class="page-title-right">
                                   
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body ">
                                    <div class="d-flex flex-wrap gap-2">
                                        <!-- Form Control Sm -->
                                        <div>
                                            <input class="form-control form-control-sm" 
                                            type="date" value="<?php echo date('d-m-Y'); ?>">
                                        </div>
                                        <!-- Base Buttons -->
                                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target="#ModalNewVenta">Nueva Venta</button>
                                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Agregar método de pago</button>
                                    </div>
                                    <table id="example" class="table table-sm  nowrap table-striped align-middle " style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Cliente - ID</th>
                                                <th>Medio de Pago</th>
                                                <th>Cobrador - Dr.</th>
                                                <th>Monto</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 0; $i < 10; $i++) { ?>
                                                <tr>
                                                    <td>Fernando Tito</td>
                                                    <td>Transferencia</td>
                                                    <td>Dr. Fernando Tito</td>
                                                    <td>2.500</td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body ">
                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target="#ModalNewEgreso">Nuevo Egreso</button>
                                    </div>
                                    <table id="example_2" class="table table-sm  nowrap table-striped align-middle " style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Monto</th>
                                                <th>Concepto</th>
                                                <th>Destinatario</th>
                                                <th>Hora</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 0; $i < 10; $i++) { ?>
                                                <tr>
                                                    <td>30.000</td>
                                                    <td>Retiro</td>
                                                    <td>Andrés Fernandez</td>
                                                    <td>12:30</td>
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
                    
                    
                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body ">
                                    <div class="d-flex flex-wrap gap-2 align-items-center">
                                        <div >
                                            <span class="btn btn-primary btn-sm btn-sm waves-effect waves-light mt-4">Cajas</span>
                                        </div>
                                        
                                        <div>
                                            <label for="basiInput" class="form-label">&nbsp;</label>
                                            <select class="form-select form-select-sm " aria-label=".form-select-sm example">
                                                <option value="Pesos">Pesos $</option>
                                                <option value="Dolar">Dolar U$S</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="basiInput" class="form-label">Monto Inicial $</label>
                                            <input type="number" class="form-control form-control-sm" id="basiInput" value="100000">
                                        </div>
                                        <div>
                                            <label for="basiInput" class="form-label">Ingresos $</label>
                                            <input type="number" class="form-control form-control-sm" id="basiInput" value="100000">
                                        </div>
                                        <div>
                                            <label for="basiInput" class="form-label">Transferencias $</label>
                                            <input type="number" class="form-control form-control-sm" id="basiInput" value="100000">
                                        </div>
                                        <div>
                                            <label for="basiInput" class="form-label">Egresos $</label>
                                            <input type="number" class="form-control form-control-sm" id="basiInput" value="100000">
                                        </div>
                                        <div>
                                            <label for="basiInput" class="form-label">Saldo Pesos $</label>
                                            <input type="number" class="form-control form-control-sm" id="basiInput" value="100000">
                                        </div>
                                        <div>
                                            <span class="btn btn-primary btn-sm btn-sm waves-effect waves-light mt-4">Finalizar</span>
                                        </div>
                                        
                                    </div>
                                    <div class="d-flex flex-wrap gap-2 mt-4">
                                        <span type="button" class="btn btn-primary btn-sm waves-effect waves-light">En Curso</span>
                                    </div>
                                    <table id="example_3" class="table table-sm  nowrap table-striped align-middle " style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Hora</th>
                                                <th>Nombre de Usuario</th>
                                                <th>Box</th>
                                                <th>Doctor</th>
                                                <th>Tratamiento</th>
                                                <th>Acción</th>
                                                <th>Comentario de Caja</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 0; $i < 10; $i++) { ?>
                                                <tr>
                                                    <td>13:00</td>
                                                    <td>Fernando Gabildo</td>
                                                    <td>
                                                        <span class="badge bg-success text-uppercase">
                                                            box1
                                                        </span> 
                                                    </td>
                                                    <td>Dr. Mendez, MARTIN</td>
                                                    <td>#39187</td>
                                                    <td><button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Finalizar</button></td>
                                                    <td></td>
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
                        
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <!-- Footer -->
            <?php include './layout/footer.php'; ?>
            <?php include './cajas-nuevo-egreso-modal.php'; ?>
            <?php include './cajas-nuevo-venta.php'; ?>
        </div>
        <!-- end main content-->

<?php include './layout/finheader.php'; ?>