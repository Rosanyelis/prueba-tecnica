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
                                <div class="d-flex flex-wrap gap-4 align-items-center">
                                    <h6 class="mb-sm-0 fecha-dia"></h6>
                                    <h6 class="mb-sm-0">Diaria</h6>
                                    <h6 class="mb-sm-0" data-bs-toggle="dropdown" 
                                        aria-haspopup="true" aria-expanded="false">Semanal <i class="ri-arrow-drop-right-fill fs-16"></i></h6>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Dr Fernando</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Dr Pedro</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Dr Camilo</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Dra Pilar</a></li>
                                    </ul>
                                    <h6 class="mb-sm-0">Diaria Global</h6>
                                </div>    
                            

                                <div class="page-title-right">
                                    <div class="btn-group material-shadow">
                                        <button class="btn btn-light btn-sm dropdown-toggle material-shadow-none" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Dr. Francisco
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Dr Pedro</a>
                                            <a class="dropdown-item" href="#">Dr Camilo</a>
                                            <a class="dropdown-item" href="#">Dra Pilar</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">  
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="datatable" class="table table-sm table-bordered dt-responsive nowrap w-100 text-center ">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Lunes 20</th>
                                                    <th>Martes 21</th>
                                                    <th>Miercoles 22</th>
                                                    <th>Jueves 23</th>
                                                    <th>Viernes 24</th>
                                                    <th>Sábado 25</th>
                                                    <th>Domingo 26</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class="align-middle">09:00</th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <th class="align-middle">09:00</th>
                                                </tr>
                                                <tr>
                                                    <th class="align-middle">09:15</th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <th class="align-middle">09:15</th>
                                                </tr>
                                                <tr>
                                                <th class="align-middle">10:00</th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="bg-success">
                                                        <span class="float-end" data-bs-toggle="dropdown" >
                                                        <i class="ri-add-circle-fill text-white fs-16"></i>
                                                        </span>
                                                        <ul class="dropdown-menu ">
                                                            <li><a class="dropdown-item" href="#">Dar cita presencial</a></li>
                                                            <li><a class="dropdown-item" href="#">Dar multiples citas presenciales</a></li>
                                                            <li class="dropdown-divider"></li>
                                                            <li><a class="dropdown-item" href="#">Bloquear espacio</a></li>
                                                        </ul>
                                                    </td>
                                                    <td></td>
                                                    <td class="bg-success">
                                                    <span class="float-end" data-bs-toggle="dropdown" >
                                                        <i class="ri-add-circle-fill text-white fs-16"></i>
                                                        </span>
                                                        <ul class="dropdown-menu ">
                                                            <li><a class="dropdown-item" href="#">Dar cita presencial</a></li>
                                                            <li><a class="dropdown-item" href="#">Dar multiples citas presenciales</a></li>
                                                            <li class="dropdown-divider"></li>
                                                            <li><a class="dropdown-item" href="#">Bloquear espacio</a></li>
                                                        </ul>
                                                    </td>
                                                    <td></td>
                                                    <th>10:00</th>
                                                </tr>
                                                <tr>
                                                    <th class="align-middle">10:15</th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="bg-success">
                                                        <span class="float-end" data-bs-toggle="dropdown" >
                                                        <i class="ri-add-circle-fill text-white fs-16"></i>
                                                        </span>
                                                        <ul class="dropdown-menu ">
                                                            <li><a class="dropdown-item" href="#">Dar cita presencial</a></li>
                                                            <li><a class="dropdown-item" href="#">Dar multiples citas presenciales</a></li>
                                                            <li class="dropdown-divider"></li>
                                                            <li><a class="dropdown-item" href="#">Bloquear espacio</a></li>
                                                        </ul>
                                                    </td>
                                                    <td></td>
                                                    <td class="bg-success">
                                                        <span class="float-end" data-bs-toggle="dropdown" >
                                                        <i class="ri-add-circle-fill text-white fs-16"></i>
                                                        </span>
                                                        <ul class="dropdown-menu ">
                                                            <li><a class="dropdown-item" href="#">Dar cita presencial</a></li>
                                                            <li><a class="dropdown-item" href="#">Dar multiples citas presenciales</a></li>
                                                            <li class="dropdown-divider"></li>
                                                            <li><a class="dropdown-item" href="#">Bloquear espacio</a></li>
                                                        </ul>
                                                    </td>
                                                    <td></td>
                                                    <th>10:15</th>
                                                </tr>
                                                <tr>
                                                    <th class="align-middle">11:00</th>
                                                    <td class="bg-success">
                                                        <span class="float-end" data-bs-toggle="dropdown" >
                                                        <i class="ri-add-circle-fill text-white fs-16"></i>
                                                        </span>
                                                        <ul class="dropdown-menu ">
                                                            <li><a class="dropdown-item" href="#">Dar cita presencial</a></li>
                                                            <li><a class="dropdown-item" href="#">Dar multiples citas presenciales</a></li>
                                                            <li class="dropdown-divider"></li>
                                                            <li><a class="dropdown-item" href="#">Bloquear espacio</a></li>
                                                        </ul>
                                                    </td>
                                                    <td class="bg-success">
                                                        <span class="float-end" data-bs-toggle="dropdown" >
                                                        <i class="ri-add-circle-fill text-white fs-16"></i>
                                                        </span>
                                                        <ul class="dropdown-menu ">
                                                            <li><a class="dropdown-item" href="#">Dar cita presencial</a></li>
                                                            <li><a class="dropdown-item" href="#">Dar multiples citas presenciales</a></li>
                                                            <li class="dropdown-divider"></li>
                                                            <li><a class="dropdown-item" href="#">Bloquear espacio</a></li>
                                                        </ul>
                                                    </td>
                                                    <td class="bg-primary align-middle text-white text-center">
                                                        <div class="d-flex justify-content-between ">
                                                            <div>Fernando Fernandez</div>
                                                            <div><i class='bx bx-message-rounded-dots align-middle fs-18'></i></div>
                                                        </div>   
                                                    </td>
                                                    <td class="bg-success">
                                                        <span  class="float-end" data-bs-toggle="dropdown" >
                                                            <i class="ri-add-circle-fill text-white fs-16"></i>
                                                        </span>
                                                        <ul class="dropdown-menu ">
                                                            <li><a class="dropdown-item" href="#">Dar cita presencial</a></li>
                                                            <li><a class="dropdown-item" href="#">Dar multiples citas presenciales</a></li>
                                                            <li class="dropdown-divider"></li>
                                                            <li><a class="dropdown-item" href="#">Bloquear espacio</a></li>
                                                        </ul>
                                                    </td>
                                                    <td class="bg-light align-middle text-dark text-center">
                                                        <div class="d-flex justify-content-between ">
                                                            <div>Fernando Fernandez</div>
                                                            <span data-bs-toggle="dropdown"><i class='bx bx-message-rounded-dots align-middle fs-18'></i></span>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="./pacientes-planes-de-tratamiento.php">Ir a plan de tratamiento</a></li>
                                                                <li><a class="dropdown-item" href="./pacientes-facturacion-y-pago.php">Recaudación</a></li>
                                                                <li><a class="dropdown-item" href="./pacientes-datos-personales.php">Datos personales</a></li>
                                                                <li><a class="dropdown-item" href="./pacientes-ficha-clinica.php">Ir a la ficha clinica del paciente </a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Cambiar fecha </a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Modificar duración </a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Agregar comentario</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Cambiar estado</a></li>
                                                            </ul>
                                                        </div>   
                                                    </td>
                                                    <td class="bg-success">
                                                        <span  class="float-end" data-bs-toggle="dropdown" >
                                                            <i class="ri-add-circle-fill text-white fs-16"></i>
                                                        </span>
                                                        <ul class="dropdown-menu ">
                                                            <li><a class="dropdown-item" href="#">Dar cita presencial</a></li>
                                                            <li><a class="dropdown-item" href="#">Dar multiples citas presenciales</a></li>
                                                            <li class="dropdown-divider"></li>
                                                            <li><a class="dropdown-item" href="#">Bloquear espacio</a></li>
                                                        </ul>
                                                    </td>
                                                    <td></td>
                                                    <th>11:00</th>
                                                </tr>
                                                <tr>
                                                    <th class="align-middle">11:15</th>
                                                    <td class="bg-success">
                                                        <span class="float-end" data-bs-toggle="dropdown" >
                                                        <i class="ri-add-circle-fill text-white fs-16"></i>
                                                        </span>
                                                        <ul class="dropdown-menu ">
                                                            <li><a class="dropdown-item" href="#">Dar cita presencial</a></li>
                                                            <li><a class="dropdown-item" href="#">Dar multiples citas presenciales</a></li>
                                                            <li class="dropdown-divider"></li>
                                                            <li><a class="dropdown-item" href="#">Bloquear espacio</a></li>
                                                        </ul>
                                                    </td>
                                                    <td class="bg-success">
                                                        <span class="float-end" data-bs-toggle="dropdown" >
                                                        <i class="ri-add-circle-fill text-white fs-16"></i>
                                                        </span>
                                                        <ul class="dropdown-menu ">
                                                            <li><a class="dropdown-item" href="#">Dar cita presencial</a></li>
                                                            <li><a class="dropdown-item" href="#">Dar multiples citas presenciales</a></li>
                                                            <li class="dropdown-divider"></li>
                                                            <li><a class="dropdown-item" href="#">Bloquear espacio</a></li>
                                                        </ul>
                                                    </td>
                                                    <td class="bg-primary align-middle text-white text-center">
                                                        <div class="d-flex justify-content-between ">
                                                            <div>Fernando Fernandez</div>
                                                            <div><i class='bx bx-message-rounded-dots align-middle fs-18'></i></div>
                                                        </div>   
                                                    </td>
                                                    <td class="bg-success">
                                                        <span  class="float-end" data-bs-toggle="dropdown" >
                                                            <i class="ri-add-circle-fill text-white fs-16"></i>
                                                        </span>
                                                        <ul class="dropdown-menu ">
                                                            <li><a class="dropdown-item" href="#">Dar cita presencial</a></li>
                                                            <li><a class="dropdown-item" href="#">Dar multiples citas presenciales</a></li>
                                                            <li class="dropdown-divider"></li>
                                                            <li><a class="dropdown-item" href="#">Bloquear espacio</a></li>
                                                        </ul>
                                                    </td>
                                                    <td class="bg-light align-middle text-dark text-center">
                                                        <div class="d-flex justify-content-between ">
                                                            <div>Fernando Fernandez</div>
                                                            <span data-bs-toggle="dropdown"><i class='bx bx-message-rounded-dots align-middle fs-18'></i></span>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="./pacientes-planes-de-tratamiento.php">Ir a plan de tratamiento</a></li>
                                                                <li><a class="dropdown-item" href="./pacientes-facturacion-y-pago.php">Recaudación</a></li>
                                                                <li><a class="dropdown-item" href="./pacientes-datos-personales.php">Datos personales</a></li>
                                                                <li><a class="dropdown-item" href="./pacientes-ficha-clinica.php">Ir a la ficha clinica del paciente </a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Cambiar fecha </a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Modificar duración </a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Agregar comentario</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Cambiar estado</a></li>
                                                            </ul>
                                                        </div>   
                                                    </td>
                                                    <td class="bg-success">
                                                        <span  class="float-end" data-bs-toggle="dropdown" >
                                                            <i class="ri-add-circle-fill text-white fs-16"></i>
                                                        </span>
                                                        <ul class="dropdown-menu ">
                                                            <li><a class="dropdown-item" href="#">Dar cita presencial</a></li>
                                                            <li><a class="dropdown-item" href="#">Dar multiples citas presenciales</a></li>
                                                            <li class="dropdown-divider"></li>
                                                            <li><a class="dropdown-item" href="#">Bloquear espacio</a></li>
                                                        </ul>
                                                    </td>
                                                    <td></td>
                                                    <th>11:15</th>
                                                </tr>
                                                <tr>
                                                    <th class="align-middle">12:00</th>
                                                    <td class="bg-success">
                                                        <span class="float-end" data-bs-toggle="dropdown" >
                                                        <i class="ri-add-circle-fill text-white fs-16"></i>
                                                        </span>
                                                        <ul class="dropdown-menu ">
                                                            <li><a class="dropdown-item" href="#">Dar cita presencial</a></li>
                                                            <li><a class="dropdown-item" href="#">Dar multiples citas presenciales</a></li>
                                                            <li class="dropdown-divider"></li>
                                                            <li><a class="dropdown-item" href="#">Bloquear espacio</a></li>
                                                        </ul>
                                                    </td>
                                                    <td class="bg-success">
                                                        <span class="float-end" data-bs-toggle="dropdown" >
                                                        <i class="ri-add-circle-fill text-white fs-16"></i>
                                                        </span>
                                                        <ul class="dropdown-menu ">
                                                            <li><a class="dropdown-item" href="#">Dar cita presencial</a></li>
                                                            <li><a class="dropdown-item" href="#">Dar multiples citas presenciales</a></li>
                                                            <li class="dropdown-divider"></li>
                                                            <li><a class="dropdown-item" href="#">Bloquear espacio</a></li>
                                                        </ul>
                                                    </td>
                                                    <td class="bg-primary align-middle text-white text-center">
                                                        <div class="d-flex justify-content-between ">
                                                            <div>Fernando Fernandez</div>
                                                            <div><i class='bx bx-message-rounded-dots align-middle fs-18'></i></div>
                                                        </div>   
                                                    </td>
                                                    <td class="bg-success">
                                                        <span  class="float-end" data-bs-toggle="dropdown" >
                                                            <i class="ri-add-circle-fill text-white fs-16"></i>
                                                        </span>
                                                        <ul class="dropdown-menu ">
                                                            <li><a class="dropdown-item" href="#">Dar cita presencial</a></li>
                                                            <li><a class="dropdown-item" href="#">Dar multiples citas presenciales</a></li>
                                                            <li class="dropdown-divider"></li>
                                                            <li><a class="dropdown-item" href="#">Bloquear espacio</a></li>
                                                        </ul>
                                                    </td>
                                                    <td class="bg-light align-middle text-dark text-center">
                                                        <div class="d-flex justify-content-between ">
                                                            <div>Fernando Fernandez</div>
                                                            <span data-bs-toggle="dropdown"><i class='bx bx-message-rounded-dots align-middle fs-18'></i></span>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="./pacientes-planes-de-tratamiento.php">Ir a plan de tratamiento</a></li>
                                                                <li><a class="dropdown-item" href="./pacientes-facturacion-y-pago.php">Recaudación</a></li>
                                                                <li><a class="dropdown-item" href="./pacientes-datos-personales.php">Datos personales</a></li>
                                                                <li><a class="dropdown-item" href="./pacientes-ficha-clinica.php">Ir a la ficha clinica del paciente </a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Cambiar fecha </a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Modificar duración </a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Agregar comentario</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Cambiar estado</a></li>
                                                            </ul>
                                                        </div>   
                                                    </td>
                                                    <td class="bg-success">
                                                        <span  class="float-end" data-bs-toggle="dropdown" >
                                                            <i class="ri-add-circle-fill text-white fs-16"></i>
                                                        </span>
                                                        <ul class="dropdown-menu ">
                                                            <li><a class="dropdown-item" href="#">Dar cita presencial</a></li>
                                                            <li><a class="dropdown-item" href="#">Dar multiples citas presenciales</a></li>
                                                            <li class="dropdown-divider"></li>
                                                            <li><a class="dropdown-item" href="#">Bloquear espacio</a></li>
                                                        </ul>
                                                    </td>
                                                    <td></td>
                                                    <th>12:00</th>
                                                </tr>
                                            </tbody>
                                        </table><!-- end table -->
                                    </div><!-- end table responsive -->
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