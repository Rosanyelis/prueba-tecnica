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
                        <div class="col-lg-12">
                            <ul class="nav nav-pills arrow-navtabs nav-success bg-light mb-3" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#historial" role="tab" aria-selected="true">
                                        <span class="d-block d-sm-none">Historial</span>
                                        <span class="d-none d-sm-block">Historial</span>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#evoluciones" role="tab" aria-selected="false" tabindex="-1">
                                        <span class="d-block d-sm-none">Evoluciones</span>
                                        <span class="d-none d-sm-block">Evoluciones</span>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#antecedentes-medicos" role="tab" aria-selected="false" tabindex="-1">
                                        <span class="d-block d-sm-none">Ant. Médicos</span>
                                        <span class="d-none d-sm-block">Ant. Médicos</span>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#odontograma" role="tab" aria-selected="false" tabindex="-1">
                                        <span class="d-block d-sm-none">Odontograma</span>
                                        <span class="d-none d-sm-block">Odontograma</span>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#rx" role="tab" aria-selected="false" tabindex="-1">
                                        <span class="d-block d-sm-none">Rx y Doc.</span>
                                        <span class="d-none d-sm-block">Rx y Doc.</span>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#periodontograma" role="tab" aria-selected="false" tabindex="-1">
                                        <span class="d-block d-sm-none">Periodontograma</span>
                                        <span class="d-none d-sm-block">Periodontograma</span>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#documentos" role="tab" aria-selected="false" tabindex="-1">
                                        <span class="d-block d-sm-none">Doc. Clínicos</span>
                                        <span class="d-none d-sm-block">Doc. Clínicos</span>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#consentimientos" role="tab" aria-selected="false" tabindex="-1">
                                        <span class="d-block d-sm-none">Consentimientos Informados</span>
                                        <span class="d-none d-sm-block">Consentimientos Informados</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-12">
                            <div class="tab-content text-muted">
                                <div class="tab-pane active" id="historial" role="tabpanel">
                                    <div class="card ">
                                        <div class="card-header">
                                            <div class="float-start ">
                                                <h5 class="card-title mb-0 align-middle">Historial</h5>                        
                                            </div>
                                            
                                            <div class="float-end d-flex gap-2 align-items-center">
                                                <div class="col-md-3">
                                                <select class="form-select form-select-sm" aria-label="Default select example">
                                                    <option selected>Filtro por mes</option>
                                                    <option value="1">Enero</option>
                                                    <option value="2">Febrero</option>
                                                    <option value="3">Marzo</option>
                                                    <option value="4">Abril</option>
                                                    <option value="5">Mayo</option>
                                                    <option value="6">Junio</option>
                                                    <option value="7">Julio</option>
                                                    <option value="8">Agosto</option>
                                                    <option value="9">Septiembre</option>
                                                    <option value="10">Octubre</option>
                                                    <option value="11">Noviembre</option>
                                                    <option value="12">Diciembre</option>
                                                </select>
                                                </div>
                                                <div class="col-md-3">
                                                <select class="form-select form-select-sm" aria-label="Default select example">
                                                    <option selected>Filtro por tipo</option>
                                                    <option value="1">Presupuesto creado</option>
                                                    <option value="2">Evolución guardada</option>
                                                    <option value="3">Prestación realizada</option>
                                                    <option value="4">Pago recibido</option>
                                                    <option value="5">Documento agregado</option>
                                                    <option value="6">Cita agregada</option>
                                                    <option value="7">Periodontograma Creado</option>
                                                </select>
                                                </div>
                                                <div class="col-md-1">
                                                <button type="button" class="btn btn-ghost-secondary btn-sm waves-effect material-shadow-none"><i class="ri-printer-line fs-16 text-black"></i></button>
                                                </div>
                                                <!-- <div class="col-md-2"> -->
                                                <!-- Custom Checkboxes Color -->
                                                <div class="form-check col-md-4">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" checked>
                                                    <label class="form-check-label" for="formCheck6">
                                                        Mostrar anulados
                                                    </label>
                                                </div>
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="timeline-2">
                                                <div class="timeline-continue">
                                                    <?php for($i = 0; $i < 5; $i++) { ?>
                                                    <div class="row timeline-right">
                                                        <div class="col-12">
                                                            <p class="timeline-date"></p>
                                                        </div>
                                                        <div class="col-12 ">
                                                            <div class="timeline-box material-shadow">
                                                                <div class="timeline-text">
                                                                    <div class="d-flex">
                                                                        <div class="flex-grow-1 ms-3">
                                                                            <h5 class="mb-1">Cita Agendada</h5>
                                                                            <p class="text-muted mb-0">
                                                                                No confirmado <br>
                                                                                Dra. Alicia Lopez, RUT: 12.345.678-9, 09:00
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="evoluciones" role="tabpanel">
                                    <div class="card">
                                        <div class="card-header d-flex">
                                            <h5 class="card-title mb-0 flex-grow-1">Evoluciones</h5>                        
                                            
                            
                                            <button type="button" class="btn btn-ghost-secondary btn-sm waves-effect material-shadow-none mx-1"><i class="ri-printer-line fs-16 text-black"></i></button>
                                            <div class="form-check mb-0 mx-3">
                                                <input class="form-check-input" type="checkbox" id="formCheck6" checked>
                                                <label class="form-check-label" for="formCheck6">
                                                    Mostrar anulados
                                                </label>
                                            </div>
                                            <button type="button" class="btn btn-success btn-sm waves-effect waves-light">Nueva evolución</button>
                                        </div>
                                        <div class="card-body">
                                            <?php for($i = 0; $i < 3; $i++) { ?>
                                                <div class="card">
                                                    <div class="card-header d-flex">
                                                        <div class="flex-grow-1">
                                                            <h6 class="card-title mb-0">Nadia Barindeli (#123456)</h6>
                                                            <p class="text-muted mb-0 fs-11">(A traves del Administrativo Maldo, IDU maldonado)</p>
                                                        </div>
                                                        <p>Escrita el <strong>5 de marzo de 2025 9:33</strong> </p>
                                                    </div>
                                                    <div class="card-body">
                                                        <h6 class="card-title">Plan de tratamiento #123456</h6>
                                                        <p class="card-text text-muted mb-0">A business consulting agency is involved in the planning, implementation, and education of businesses. Miss told ham dull knew see she spot near can. Spirit her entire her called.</p>
                                                        <div class="row mt-3">
                                                            <div class="col-lg-12">
                                                                <p><strong>Firmas:</strong></p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p><strong>Profesional:</strong> Nadie Barindeli</p>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <p><strong>Paciente:</strong> Gustavo Aquino</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <a href="javascript:void(0);" class="link-danger float-end"><i class="ri-delete-bin-fill align-middle ms-1 lh-1"></i> Anular </a>    
                                                        <a href="javascript:void(0);" class="link-info float-end me-2"><i class="ri-pencil-fill align-middle ms-1 lh-1"></i> Editar </a>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="antecedentes-medicos" role="tabpanel">
                                    <div class="card">
                                        <div class="card-header d-flex">
                                            <h5 class="card-title mb-0 flex-grow-1">Antecedentes Medicos</h5>
                                            <button type="button" class="btn btn-success btn-sm ">Actualizar</button>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="card-header d-flex justify-content-between align-items-center">
                                                            <h5 class="card-title mb-0 ">Alertas Médicas</h5>
                                                            <button type="button" class="btn btn-sm btn-ghost-secondary  "><i class="ri-more-2-fill fs-14"></i></button>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row g-1">
                                                                <div class="col-md-12">
                                                                    <div>
                                                                        <!-- <label for="labelInput" class="form-label">Nombre Legal</label> -->
                                                                        <input type="text" class="form-control" name="alertas" id="labelInput">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div>
                                                                        <label for="labelInput" class="form-label">Otras Alertas</label>
                                                                        <textarea class="form-control" id="exampleFormControlTextarea5" rows="3"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="card-header d-flex justify-content-between align-items-center">
                                                            <h5 class="card-title mb-0 ">Hábitos</h5>
                                                            <button type="button" class="btn btn-sm btn-ghost-secondary  "><i class="ri-more-2-fill fs-14"></i></button>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row g-1">
                                                                <div class="col-md-12">
                                                                    <div>
                                                                        <!-- <label for="labelInput" class="form-label">Nombre Legal</label> -->
                                                                        <input type="text" name="habitos" class="form-control" id="labelInput">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div>
                                                                        <label for="labelInput" class="form-label">Otros hábitos</label>
                                                                        <textarea class="form-control" id="exampleFormControlTextarea5" rows="3"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="card-header d-flex justify-content-between align-items-center">
                                                            <h5 class="card-title mb-0 ">Medicamentos</h5>
                                                            <button type="button" class="btn btn-sm btn-ghost-secondary  "><i class="ri-more-2-fill fs-14"></i></button>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row g-1">
                                                                <div class="col-md-12">
                                                                    <div>
                                                                        <!-- <label for="labelInput" class="form-label">Nombre Legal</label> -->
                                                                        <input type="text" name="medicamentos" class="form-control" id="labelInput">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div>
                                                                        <label for="labelInput" class="form-label">Otros Medicamentos</label>
                                                                        <textarea class="form-control" id="exampleFormControlTextarea5" rows="3"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="card-header d-flex justify-content-between align-items-center">
                                                            <h5 class="card-title mb-0 ">Enfermedades</h5>
                                                            <button type="button" class="btn btn-sm btn-ghost-secondary  "><i class="ri-more-2-fill fs-14"></i></button>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row g-1">
                                                                <div class="col-md-12">
                                                                    <div>
                                                                        <!-- <label for="labelInput" class="form-label">Nombre Legal</label> -->
                                                                        <input type="text" name="enfermedades" class="form-control" id="labelInput">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div>
                                                                        <label for="labelInput" class="form-label">Otras Enfermedades</label>
                                                                        <textarea class="form-control" id="exampleFormControlTextarea5" rows="3"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card">
                                                        <div class="card-header d-flex justify-content-between align-items-center">
                                                            <h5 class="card-title mb-0 ">Comentarios</h5>
                                                            <button type="button" class="btn btn-sm btn-ghost-secondary  "><i class="ri-more-2-fill fs-14"></i></button>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row g-1">
                                                                <div class="col-md-12">
                                                                    <div>
                                                                        <textarea class="form-control" id="exampleFormControlTextarea5" rows="3"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="odontograma" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row g-1">
                                                <div class="col-md-2 ">
                                                    <!-- Base Radios -->
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="radio" name="permanente" id="permanente1">
                                                        <label class="form-check-label" for="permanente1">
                                                            Permanente
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 ">
                                                    <!-- Base Radios -->
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="radio" name="temporal" id="temporal1">
                                                        <label class="form-check-label" for="temporal1">
                                                            Temporal
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="date" class="form-control form-control-sm"  
                                                    placeholder="Expiración">
                                                </div>
                                                
                                                <div class="col-md-2">
                                                    <input type="text" class="form-control form-control-sm"  
                                                    placeholder="Diagnostico">
                                                </div>
                                                <div class="col-md-1 text-center">
                                                    <button type="button" class="btn btn-ghost-success btn-sm px-2 py-1">
                                                        <i class="ri-printer-fill fs-16 "></i>
                                                    </button>
                                                </div>
                                                <div class="col-md-3">
                                                    <!-- Base Example -->
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Default checkbox
                                                        </label>
                                                    </div>
                                                </div>
                                            
                                                <div class="col-md-12">
                                                    <img src="../assets/dientes.png" class="img-fluid mx-auto" width="100%" alt="">
                                                </div>
                                            
                                                <div class="col-md-12 mt-4">
                                                    
                                                    <div class="table-responsive table-card ">
                                                        <table class="table align-middle table-nowrap" id="customerTable">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th class="sort">Fecha</th>
                                                                    <th class="sort">Pieza</th>
                                                                    <th class="sort">Caras</th>
                                                                    <th class="sort">Estado</th>
                                                                    <th class="sort">Creador</th>
                                                                    <th class="sort">Anular</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="list form-check-all">
                                                                <?php for ($i = 1; $i <= 7; $i++) { ?>
                                                                <tr class="align-middle p-0">
                                                                    <td class="id">
                                                                        <span class="fw-medium link-black">22/08/2025</span>
                                                                    </td>
                                                                    <td class="py-0 px-1">
                                                                    <span class="fw-medium link-black">4.2</span>
                                                                    </td>
                                                                    <td class="py-0 px-1 ">
                                                                        <span class="flex-wrap">Oclusal</span>
                                                                    </td>
                                                                    <td class="py-0 px-1">
                                                                        <span>Extracción Simple</span>
                                                                    </td>
                                                                    <td class="py-0 px-1">
                                                                        <span>Administrador Maldo</span>
                                                                    </td>
                                                                    <td class="py-0 px-1">
                                                                        
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="rx" role="tabpanel">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h5 class="card-title mb-0">Rx y Documentos</h5>
                                            <div>
                                                <button type="button" class="btn btn-success btn-sm ">Subir</button>
                                                <button type="button" class="btn btn-ghost-secondary btn-sm waves-effect material-shadow-none"><i class="ri-question-fill fs-16 text-black"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body text-center">
                                            <span class="display-3 text-muted" ><i class="ri-hard-drive-3-line  "></i></span>
                                            <h4 class="mt-3">Este paciente no cuenta aun con documentos, arrastrelos para comenzar</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="periodontograma" role="tabpanel">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h5 class="card-title mb-0">Periodontograma</h5>
                                            <div>
                                                <button type="button" class="btn btn-light btn-sm waves-effect material-shadow-none">
                                                    <i class="ri-printer-fill fs-16 text-black"></i>
                                                </button>
                                                <button type="button" class="btn btn-success btn-sm ">Guardar</button>
                                            </div>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="row">
                                                <div class="col-12">
                                                    <img src="../assets/periodontograma-2.png" class="img-fluid " alt="" width="100%">
                                                </div>
                                                <div class="col-12">
                                                    <img src="../assets/periodontograma-1.png" class="img-fluid " alt="" width="100%">
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="documentos" role="tabpanel">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h5 class="card-title mb-0">Documentos Clínicios</h5>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="formCheck1">
                                                    <label class="form-check-label" for="formCheck1">
                                                        Ver anulados
                                                    </label>
                                                </div>
                                                <button type="button" class="btn btn-success btn-sm "><i class="ri-article-fill"></i> Nuevo Documento Clinico</button>
                                            </div>
                                        </div>
                                        <div class="card-body text-center">
                                            <span class="display-3 text-muted" ><i class="ri-hard-drive-3-line  "></i></span>
                                            <h4 class="mt-3">Este paciente no cuenta aun con documentos, arrastrelos para comenzar</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="consentimientos" role="tabpanel">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h5 class="card-title mb-0">Consentimientos Informados</h5>
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="formCheck1">
                                                    <label class="form-check-label" for="formCheck1">
                                                        Mostrar anulados
                                                    </label>
                                                </div>
                                                <button type="button" class="btn btn-success btn-sm "><i class="ri-article-fill"></i> Nuevo consentimiento informado</button>
                                            </div>
                                        </div>
                                        <div class="card-body text-center">
                                            <span class="display-3 text-muted" ><i class="ri-hard-drive-3-line  "></i></span>
                                            <h4 class="mt-3">Este paciente no cuenta aun con consentimientos informados, arrastrelos para comenzar</h4>
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

        </div>
        <!-- end main content-->

<?php include './layout/finheader.php'; ?>