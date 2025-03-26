<div id="ModalProducts" class="modal fade" tabindex="-1" aria-labelledby="ModalAddProduct" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <form action="javascript:void(0);">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="ModalAddProduct">Añadir Productos</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <!-- <p class="text-muted mb-0 fs-11" style="padding: 1.25rem 1.25rem">Los productos se ingresaran a la bodega y sucursal seleccionado</p> -->
                <div class="modal-body">
                    
                    <div class="row ">
                        <div class="col-lg-12 mb-4">
                            <div class="text-end">
                                <button type="button" class="btn btn-primary btn-sm w-md">Nuevo Producto</button>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="table-responsive table-card ">
                                <table class="table align-middle table-nowrap" id="customerTable">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" style="width: 50px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                </div>
                                            </th>
                                            <th class="sort">Codigo</th>
                                            <th class="sort">Nombre</th>
                                            <th class="sort">Permite Descuento</th>
                                            <th class="sort">Precio Final</th> 
                                            <th class="sort">Costo Laboratorio</th>    
                                            <th class="sort">Opciones</th>                   
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
                                                <span></span>
                                            </td>
                                            <td class="py-0 px-1">
                                                <span class="fw-medium link-primary">Carillas de Precisión</span>
                                            </td>
                                            <td class="py-0 px-1 ">
                                                <span>Si</span>
                                            </td>
                                            <td class="py-0 px-1">
                                                <span>$ 19.000</span>
                                            </td>
                                            <td class="py-0 px-1">
                                                <span>$ 5100</span>
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
                    </div><!--end row-->
                </div>
                <div class="modal-footer">
                    
                </div>

            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->