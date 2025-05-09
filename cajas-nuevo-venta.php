<div id="ModalNewVenta" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <form action="javascript:void(0);">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Nueva Venta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                
                    <div class="row">
                        <div class="col-3">
                            <div class="mb-2">
                                <label for="name" class="form-label">Moneda</label>
                                <select class="form-select " >
                                    <option value="Pesos">Pesos $</option>
                                    <option value="Dolar">Dolar U$S</option>
                                </select>
                            </div>
                        </div><!--end col-->
                        <div class="col-3">
                            <div class="mb-2">
                                <label for="concepto" class="form-label">Tipo de Comprobante</label>
                                <select class="form-select " >
                                    <option value="Pesos">e-ticket</option>
                                </select>
                            </div>
                        </div><!--end col-->
                        
                        <div class="col-3">
                            <div class="mb-2">
                                <label for="concepto" class="form-label">Tipo de documento</label>
                                <select class="form-select " >
                                    <option value="Pesos">RUT</option>
                                </select>
                            </div>
                        </div><!--end col-->
                        <div class="col-3">
                            <div class="mb-2">
                                <label for="name" class="form-label">Formas de pago</label>
                                <select class="form-select " >
                                    <option value="Efectivo">Efectivo </option>
                                    <option value="Transferencia">Transferencia</option>
                                </select>
                            </div>
                        </div><!--end col-->
                        <div class="col-12">
                            <table class="table table-sm  nowrap table-striped align-middle " style="width:100%">
                                <thead class="text-center">
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Concepto</th>
                                        <th>Cantidad</th>
                                        <th>Precio Unitario</th>
                                        <th>IVA</th>
                                        <th>Descuento %</th>
                                        <th>Importe</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="text" class="form-control form-control-sm" id="codigo"></td>
                                        <td><input type="text" class="form-control form-control-sm" id="concepto"></td>
                                        <td><input type="text" class="form-control form-control-sm" id="cantidad"></td>
                                        <td><input type="text" class="form-control form-control-sm" id="precio"></td>
                                        <td><input type="text" class="form-control form-control-sm" id="iva"></td>
                                        <td><input type="text" class="form-control form-control-sm" id="descuento"></td>
                                        <td><input type="text" class="form-control form-control-sm" id="importe"></td>
                                        <td><button type="button" class="btn btn-danger btn-sm"><i class="ri-delete-bin-2-fill"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex gap-2">
                            <div>
                                <label for="name" class="form-label">No. Gav</label>
                                <input type="nomber" class="form-control form-control-sm" value="0" id="name">
                            </div>
                            <div>
                                <label for="name" class="form-label">Neto Mínimo</label>
                                <input type="nomber" class="form-control form-control-sm" value="0" id="name">
                            </div>
                            <div>
                                <label for="name" class="form-label">Neto Básico</label>
                                <input type="nomber" class="form-control form-control-sm" value="0" id="name">
                            </div>
                            <div>
                                <label for="name" class="form-label">IVA Mínimo</label>
                                <input type="nomber" class="form-control form-control-sm" value="0" id="name">
                            </div>
                            <div>
                                <label for="name" class="form-label">IVA Máximo</label>
                                <input type="nomber" class="form-control form-control-sm" value="0" id="name">
                            </div>
                            <div>
                                <label for="name" class="form-label">Descuento %</label>
                                <input type="nomber" class="form-control form-control-sm" value="0" id="name">
                            </div>
                            <div>
                                <label for="name" class="form-label">Total</label>
                                <input type="nomber" class="form-control form-control-sm" value="0" id="name">
                            </div>
                        </div>
                    </div><!--end row-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Confirmar</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="ri-delete-bin-2-fill"></i></button>
                </div>

            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->