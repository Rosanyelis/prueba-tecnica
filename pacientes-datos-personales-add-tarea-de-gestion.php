<div id="ModalTaskGestion" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md">
        <form action="javascript:void(0);">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Nueva Tarea de Gestión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-2">
                                <label for="detalle" class="form-label">Detalle</label>
                                <textarea class="form-control" id="detalle" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-2">
                                <label for="firstNameinput" class="form-label">Fecha </label>
                                <input type="text" class="form-control" data-provider="flatpickr" 
                                data-date-format="d-m-Y" data-locale="es" placeholder="Fecha ">
                            </div>
                        </div><!--end col-->
                        <div class="col-6">
                            <div class="mb-2">
                                <label for="lastNameinput" class="form-label">Presupuesto de referencia</label>
                                <input type="number" class="form-control" placeholder="0.00">
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-success ">Agregar</button>
                </div>

            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->