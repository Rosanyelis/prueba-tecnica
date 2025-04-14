                                    
                                    <ul class="nav nav-pills nav-success fs-12 " >
                                        <li class="nav-item ">
                                            <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == '/pacientes-datos-personales.php') { echo 'active'; } ?>" href="../pacientes-datos-personales.php">
                                                Datos personales
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == '/pacientes-ficha-clinica.php') { echo 'active'; } ?>" href="../pacientes-ficha-clinica.php">
                                                Ficha clinica
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == '/pacientes-planes-de-tratamiento.php') { echo 'active'; } ?> "  href="../pacientes-planes-de-tratamiento.php">
                                                Planes de tratamiento
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == '/pacientes-facturacion-y-pago.php') { echo 'active'; } ?>"  href="../pacientes-facturacion-y-pago.php">
                                                Facturación y Pago
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"  href="javascript: void(0);" data-bs-toggle="modal" data-bs-target="#ModalDarCita">
                                                Dar Cita
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"  href="#settings">
                                                Recibir Pago
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"  href="#settings">
                                                Historia Clínica
                                            </a>
                                        </li>
                                    </ul>