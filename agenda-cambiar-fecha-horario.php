<div id="ModalAgendar" class="modal fade" tabindex="-1" aria-labelledby="ModalAgendar" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <form action="javascript:void(0);">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title" id="ModalAgendar">Dar cita (Agendar)</h5> 
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <!-- <p class="text-muted mb-0 fs-11" style="padding: 1.25rem 1.25rem">Los productos se ingresaran a la bodega y sucursal seleccionado</p> -->
                <div class="modal-body">
                    <div  class="row ">
                        <div class="col-lg-3">

                            <div class="d-flex flex-column">
                                <div>
                                    <label for="" class="form-label">Especialidad y profesional</label>
                                    <select class="form-select form-select-sm" aria-label="Default select example">
                                        <option selected>Todas</option>
                                    </select>
                                </div>
                                <div class="mt-2">                                    
                                    <select class="form-select form-select-sm" aria-label="Default select example">
                                        <option selected>Dr(a). Alayon, Andres</option>
                                    </select>
                                </div>
                                <div class="mt-2">
                                    <label for="" class="form-label">Modalidad</label>
                                    <!-- Base Radios -->
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="presencial" id="presencial1">
                                        <label class="form-check-label" for="presencial1">
                                            Presencial
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="videoconferencia" id="videoconferencia1">
                                        <label class="form-check-label" for="videoconferencia1">
                                            Videoconferencia
                                        </label>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <label for="" class="form-label">Recurso</label>
                                    <select class="form-select form-select-sm" aria-label="Default select example">
                                        <option selected>Sillon 1</option>
                                    </select>
                                </div>
                                <div class="mt-2">
                                    <label for="" class="form-label">Duración</label>
                                    <select class="form-select form-select-sm" aria-label="Default select example">
                                        <option selected>15 Minutos</option>
                                    </select>
                                </div>
                                <div class="mt-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Multiples Citas</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="listjs-table" id="customerList">
                                       
                                <div class="table-responsive table-card ">
                                    <table class="table align-middle table-nowrap text-center" id="customerTable">
                                        <thead class="table-light">
                                            <tr>
                                                <th colspan="6" class="text-center">
                                                    <button type="button" class="btn btn-ghost-info btn-sm waves-effect waves-light">Semana Anterior</button>
                                                    <button type="button" class="btn btn-ghost-info btn-sm waves-effect waves-light">Semana Siguiente</button>
                                                </th>
                                            </tr> 
                                            <tr>
                                                <th >
                                                    <div class="d-flex flex-column align-items-center">
                                                        <span>Lunes 20</span>
                                                        <span>Enero 2025</span>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="d-flex flex-column align-items-center">
                                                        <span>Martes 21</span>
                                                        <span>Enero 2025</span>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="d-flex flex-column align-items-center">
                                                        <span>Miercoles 22</span>
                                                        <span>Enero 2025</span>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="d-flex flex-column align-items-center">
                                                        <span>Jueves 23</span>
                                                        <span>Enero 2025</span>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="d-flex flex-column align-items-center">
                                                        <span>Viernes 24</span>
                                                        <span>Enero 2025</span>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="d-flex flex-column align-items-center">
                                                        <span>Sabado 25</span>
                                                        <span>Enero 2025</span>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">

                                            <tr>
                                                <td class="py-1 mx-auto">
                                                <!-- Outlined Styles -->
                                                    <div>
                                                        <input type="checkbox" class="btn-check" id="btn-check-outlined-1">
                                                        <label class="btn btn-outline-primary btn-sm m-0" for="btn-check-outlined-1">10:00</label>
                                                    </div>
                                                </td>
                                                <td class="py-1 text-center">
                                                <!-- Outlined Styles -->
                                                    <div>
                                                        <input type="checkbox" class="btn-check" id="btn-check-outlined-2">
                                                        <label class="btn btn-outline-primary btn-sm m-0" for="btn-check-outlined-2">10:00</label>
                                                    </div>
                                                </td>
                                                <td class="py-1 text-center">
                                                <!-- Outlined Styles -->
                                                    <div>
                                                        <input type="checkbox" class="btn-check" id="btn-check-outlined-3">
                                                        <label class="btn btn-outline-primary btn-sm m-0" for="btn-check-outlined-3">10:00</label>
                                                    </div>
                                                </td>
                                                <td class="py-1 text-center">
                                                <!-- Outlined Styles -->
                                                    <div>
                                                        <input type="checkbox" class="btn-check" id="btn-check-outlined-4">
                                                        <label class="btn btn-outline-primary btn-sm m-0" for="btn-check-outlined-4">10:00</label>
                                                    </div>
                                                </td>
                                                <td class="py-1 text-center">
                                                <!-- Outlined Styles -->
                                                    <div>
                                                        <input type="checkbox" class="btn-check" id="btn-check-outlined-5">
                                                        <label class="btn btn-outline-primary btn-sm m-0" for="btn-check-outlined-5">10:00</label>
                                                    </div>
                                                </td>
                                                <td class="py-1 text-center">
                                                <!-- Outlined Styles -->
                                                    <div>
                                                        <input type="checkbox" class="btn-check" id="btn-check-outlined-6">
                                                        <label class="btn btn-outline-primary btn-sm m-0" for="btn-check-outlined-6">10:00</label>
                                                    </div>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td class="py-1 mx-auto">
                                                <!-- Outlined Styles -->
                                                    <div>
                                                        <input type="checkbox" class="btn-check" id="btn-check-outlined-7">
                                                        <label class="btn btn-outline-primary btn-sm m-0" for="btn-check-outlined-7">10:00</label>
                                                    </div>
                                                </td>
                                                <td class="py-1 text-center">
                                                <!-- Outlined Styles -->
                                                    <div>
                                                        <input type="checkbox" class="btn-check" id="btn-check-outlined-8">
                                                        <label class="btn btn-outline-primary btn-sm m-0" for="btn-check-outlined-8">10:00</label>
                                                    </div>
                                                </td>
                                                <td class="py-1 text-center">
                                                <!-- Outlined Styles -->
                                                    <div>
                                                        <input type="checkbox" class="btn-check" id="btn-check-outlined-9">
                                                        <label class="btn btn-outline-primary btn-sm m-0" for="btn-check-outlined-9">10:00</label>
                                                    </div>
                                                </td>
                                                <td class="py-1 text-center">
                                                <!-- Outlined Styles -->
                                                    <div>
                                                        <input type="checkbox" class="btn-check" id="btn-check-outlined-10">
                                                        <label class="btn btn-outline-primary btn-sm m-0" for="btn-check-outlined-10">10:00</label>
                                                    </div>
                                                </td>
                                                <td class="py-1 text-center">
                                                <!-- Outlined Styles -->
                                                    <div>
                                                        <input type="checkbox" class="btn-check" id="btn-check-outlined-11">
                                                        <label class="btn btn-outline-primary btn-sm m-0" for="btn-check-outlined-11">10:00</label>
                                                    </div>
                                                </td>
                                                <td class="py-1 text-center">
                                                <!-- Outlined Styles -->
                                                    <div>
                                                        <input type="checkbox" class="btn-check" id="btn-check-outlined-12">
                                                        <label class="btn btn-outline-primary btn-sm m-0" for="btn-check-outlined-12">10:00</label>
                                                    </div>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td class="py-1 mx-auto">
                                                <!-- Outlined Styles -->
                                                    <div>
                                                        <input type="checkbox" class="btn-check" id="btn-check-outlined-13">
                                                        <label class="btn btn-outline-primary btn-sm m-0" for="btn-check-outlined-13">10:00</label>
                                                    </div>
                                                </td>
                                                <td class="py-1 text-center">
                                                <!-- Outlined Styles -->
                                                    <div>
                                                        <input type="checkbox" class="btn-check" id="btn-check-outlined-14">
                                                        <label class="btn btn-outline-primary btn-sm m-0" for="btn-check-outlined-14">10:00</label>
                                                    </div>
                                                </td>
                                                <td class="py-1 text-center">
                                                <!-- Outlined Styles -->
                                                    <div>
                                                        <input type="checkbox" class="btn-check" id="btn-check-outlined-15">
                                                        <label class="btn btn-outline-primary btn-sm m-0" for="btn-check-outlined-15">10:00</label>
                                                    </div>
                                                </td>
                                                <td class="py-1 text-center">
                                                <!-- Outlined Styles -->
                                                    <div>
                                                        <input type="checkbox" class="btn-check" id="btn-check-outlined-16">
                                                        <label class="btn btn-outline-primary btn-sm m-0" for="btn-check-outlined-16">10:00</label>
                                                    </div>
                                                </td>
                                                <td class="py-1 text-center">
                                                <!-- Outlined Styles -->
                                                    <div>
                                                        <input type="checkbox" class="btn-check" id="btn-check-outlined-17">
                                                        <label class="btn btn-outline-primary btn-sm m-0" for="btn-check-outlined-17">10:00</label>
                                                    </div>
                                                </td>
                                                <td class="py-1 text-center">
                                                <!-- Outlined Styles -->
                                                    <div>
                                                        <input type="checkbox" class="btn-check" id="btn-check-outlined-18">
                                                        <label class="btn btn-outline-primary btn-sm m-0" for="btn-check-outlined-18">10:00</label>
                                                    </div>
                                                </td>
                                                
                                            </tr>
                                            
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-light">Limpiar datos</button>
                    <button type="button" class="btn btn-success ">Guardar</button>
                </div>

            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->