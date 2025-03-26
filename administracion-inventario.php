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
                                <h6 class="mb-sm-0">Administración / Inventario</h6>

                                <div class="page-title-right">
                                    <select class="form-select form-select-sm" aria-label="Default select example">
                                        <option selected>Sucursal Maldonado</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h6 class="mb-sm-0">Inventario | Productos | Movimientos | Stock de Seguridad |</h6>

                                <div class="page-title-right">
                                    <a href="javascript:void(0);" class="btn btn-success btn-sm"
                                        data-bs-toggle="modal" data-bs-target="#ModalAddProduct">
                                        Ingresar Productos
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-danger btn-sm"
                                        >
                                        Sacar Productos
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
                                                <option selected>Bodega Central</option>
                                            </select>
                                        </div>
                                        
                                        <div class="col-md-3">
                                            <select class="form-select form-select-sm" aria-label="Default select example">
                                                <option selected>Mostrar todos los productos</option>
                                                <option value="1">Mostrar los productos sin stock</option>
                                                <option value="1">Mostrar los productos con stock</option>
                                                <option value="1">Ver por fecha de expiración </option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <button type="button" class="btn btn-ghost-dark btn-sm ">
                                                <i class="ri-printer-fill fs-16 "></i> Descargar reporte de vista actual
                                            </button>
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
                                                        <th class="sort">Producto</th>
                                                        <th class="sort">Stock de Seguridad</th>
                                                        <th class="sort">Stock Actual</th>
                                                        <th class="sort">Precio Promedio</th>
                                                        <th class="sort">Precio Venta</th>                                                        
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
                                                            <span class="fw-medium link-primary">Producto 1</span>
                                                        </td>
                                                        <td class="py-0 px-1">
                                                            <span>20</span>
                                                        </td>
                                                        <td class="py-0 px-1 ">
                                                            <span>20</span>
                                                        </td>
                                                        <td class="py-0 px-1">
                                                            <span>$ 600</span>
                                                        </td>
                                                        <td class="py-0 px-1">
                                                            <span>$ 700</span>
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
        <?php include './administracion-inventario-modal-add-producto.php'; ?>

        <?php include './layout/finheader.php'; ?>