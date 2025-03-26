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
                                <h6 class="mb-sm-0">Administración / Gastos</h6>

                                <div class="page-title-right">
                                    <a href="javascript:void(0);" class="btn btn-success btn-sm"
                                        data-bs-toggle="modal" data-bs-target="#ModalExpense">
                                        <i class="ri-add-line"></i> Nuevo Gasto
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
                                                <option selected>Resumen por Categoria</option>
                                                <option value="1">Encomiendas</option>
                                                <option value="2">Otros Compras</option>
                                                <option value="3">Retiros</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <select class="form-select form-select-sm" aria-label="Default select example">
                                                <option selected>Mes</option>
                                                <option value="1">Enero</option>
                                                <option value="1">Febrero</option>
                                                <option value="2">Marzo</option>
                                                <option value="3">Abril</option>
                                            </select>
                                        </div>
                                        <div class="col-md-1">
                                            <select class="form-select form-select-sm" aria-label="Default select example">
                                                <option selected>Año</option>
                                                <option value="1">2025</option>
                                                <option value="1">2024</option>
                                                <option value="2">2023</option>
                                                <option value="3">2022</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-select form-select-sm" aria-label="Default select example">
                                                <option selected>Sucursales</option>
                                                <option value="1">Sucursal Maldonado</option>
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
                                                        <th class="sort">Id</th>
                                                        <th class="sort">Categoria</th>
                                                        <th class="sort">Detalle</th>
                                                        <th class="sort">Fecha Factura</th>
                                                        <th class="sort">Fecha Pago</th>
                                                        <th class="sort">Total</th>
                                                        <th class="sort"></th>
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
                                                            <span><i class="ri-dropbox-fill"></i> ENCOMIENDAS</span>
                                                        </td>
                                                        <td class="py-0 px-1 ">
                                                            <span class="flex-wrap">Lorem Ipsum is simply dummy text of the printing</span>
                                                        </td>
                                                        <td class="py-0 px-1">
                                                            <span>24/01/2025</span>
                                                        </td>
                                                        <td class="py-0 px-1">
                                                            <span>24/01/2025</span>
                                                        </td>
                                                        <td class="py-0 px-1">
                                                            <span>$ 875</span>
                                                        </td>
                                                        <td class="py-0 px-1">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end" style="">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                                        <i class="ri-eye-fill align-bottom me-2 text-muted"></i> Ver
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item edit-list" data-edit-id="3" 
                                                                        href="javascript:void(0);"
                                                                        data-bs-toggle="modal" data-bs-target="#ModalEditExpense">
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

            <?php include './administracion-gastos-add-gasto.php'; ?>
            <?php include './administracion-gastos-edit-gasto.php'; ?>
        </div>
        <!-- end main content-->

        <?php include './layout/finheader.php'; ?>