<div id="ModalNewEgreso" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <form action="javascript:void(0);">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Nuevo Egreso</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-2">
                                <label for="name" class="form-label">Hora</label>
                                <input type="time" class="form-control" id="name" >
                            </div>
                        </div><!--end col-->
                        <div class="col-4">
                            <div class="mb-2">
                                <label for="concepto" class="form-label">Concepto</label>
                                <input type="text" class="form-control" name="concepto" id="concepto">
                            </div>
                        </div><!--end col-->
                        
                        <div class="col-4">
                            <div class="mb-2">
                                <label for="concepto" class="form-label">Moneda</label>
                                <select class="form-select " >
                                    <option value="Pesos">Pesos $</option>
                                    <option value="Dolar">Dolar U$S</option>
                                </select>
                            </div>
                        </div><!--end col-->
                        <div class="col-4">
                            <div class="mb-2">
                                <label for="name" class="form-label">Monto</label>
                                <input type="number" class="form-control" id="name" >
                            </div>
                        </div><!--end col-->
                        <div class="col-4">
                            <div class="mb-2">
                                <label for="concepto" class="form-label">Destinatario</label>
                                <input type="text" class="form-control" name="concepto" id="concepto">
                            </div>
                        </div><!--end col-->
                        <div class="col-4 align-self-center">
                            <!-- Form Checkbox Right -->
                            <div class="form-check form-check-right ">
                                <input class="form-check-input" type="checkbox" name="formCheckboxRight" id="formCheckboxRight1">
                                <label class="form-check-label" for="formCheckboxRight1">
                                    Transferencia bancaria
                                </label>
                            </div>
                        </div><!--end col-->
                        <div class="col-12">
                            
                        </div>
                        
                    </div><!--end row-->
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <div>
                        <button type="button" class="btn btn-success">Nuevo Concepto</button>
                    </div>
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-success " data-bs-dismiss="modal">Agregar</button>
                    </div>
                    
                </div>

            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->