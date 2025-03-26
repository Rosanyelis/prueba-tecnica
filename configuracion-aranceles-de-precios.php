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
                                <h6 class="mb-sm-0">Administración / Aranceles de Precios</h6>

                                <div class="page-title-right">
                                    <a href="javascript:void(0);" class="btn btn-info btn-sm">
                                        Plantilla
                                    </a> 
                                    <a href="javascript:void(0);" class="btn btn-success btn-sm"
                                        data-bs-toggle="modal" data-bs-target="#ModalPriceTariff">
                                        <i class="ri-add-line"></i> Nuevo Arancel
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header "> 
                                    <div class="row g-2">
                                        <div class="col-md-3 ">
                                            <div class="search-box">
                                                <input type="text" class="form-control form-control-sm search" placeholder="Buscar...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-select form-select-sm" aria-label="Default select example">
                                                <option selected>Arancel Base</option>
                                                <option value="1">Options</option>
                                            </select>
                                        </div>
                                    
                                        <div class="col-md-4">
                                            <select class="form-select form-select-sm" aria-label="Default select example">
                                                <option selected>Opciones de Aranceles</option>
                                                <option value="1">Agregar Categoria</option>
                                                <option value="1">Incrementar Precios</option>
                                                <option value="1">Programar Cambio de precios</option>
                                                <option value="1">Elminar todas las categorias</option>
                                                <option value="1">Elminar este arancel</option>
                                                <option value="1">Descargar</option>
                                            </select>
                                        </div>
                                    </div>
                                    

                                </div>
                                <div class="card-body">
                                    <div class="listjs-table" id="customerList">
                                       
                                        <div class="table-responsive table-card ">
                                            <table class="table align-middle table-nowrap" id="customerTable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col" style="width: 50px;">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                            </div>
                                                        </th>
                                                        <th class="sort" width="10%">Id</th>
                                                        <th class="sort">Nombre</th>
                                                        <th class="sort">Tipo</th>
                                                        <th class="sort" ></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    <?php for ($i = 1; $i <= 7; $i++) { ?>
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
                                                            <span data-bs-toggle="modal" data-bs-target="#ModalProducts" class="fw-medium link-primary"><i class="ri-dropbox-fill"></i> Blanqueamientos</span>
                                                        </td>
                                                        <td class="py-0 px-1 ">
                                                            <span class="flex-wrap">Acción Clínica</span>
                                                        </td>
                                                        <td class="py-0 px-1">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end" style="">
                                                                <li>
                                                                    <a class="dropdown-item edit-list" data-edit-id="3" 
                                                                        href="javascript:void(0);"
                                                                        data-bs-toggle="modal" data-bs-target="#ModalExpenseEdit{{ $i }}">
                                                                        <i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Editar
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item remove-list" href="#" data-id="3" data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Eliminar
                                                                    </a>    
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item remove-list" href="#" >
                                                                        <i class="ri-settings-5-fill align-bottom me-2 text-muted"></i> Editar Porcentajes Avanzados
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
        <?php include './configuracion-aranceles-de-precios-add-arancel.php'; ?>
        <?php include './configuracion-aranceles-de-precios-productos.php'; ?>

        <?php include './layout/finheader.php'; ?>