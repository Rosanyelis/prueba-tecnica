        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="../assets/logo-text.png" alt="" height="40">
                    </span>
                    <span class="logo-lg">
                        <img src="../assets/logo-text.png" alt="" height="40">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="../assets/logo-text.png" alt="" height="40">
                    </span>
                    <span class="logo-lg">
                        <img src="../assets/logo-text.png" alt="" height="40">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>
    
            <div class="dropdown sidebar-user m-1 rounded">
                <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-flex align-items-center gap-2">
                        <img class="rounded header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                        <span class="text-start">
                            <span class="d-block fw-medium sidebar-user-name-text">Anna Adame</span>
                            <span class="d-block fs-14 sidebar-user-name-sub-text"><i class="ri ri-circle-fill fs-10 text-success align-baseline"></i> <span class="align-middle">Online</span></span>
                        </span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <h6 class="dropdown-header">Welcome Anna!</h6>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$5971.67</b></span></a>
                    <a class="dropdown-item" href="javascript:void(0);"><span class="badge bg-success-subtle text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                </div>
            </div>
            <div id="scrollbar">
                <div class="container-fluid">
                    <div id="two-column-menu">
                        <div id="calendar" class="calendar mx-auto mt-4">
                            <span class="arrow arrow-left" onclick="cambiarFecha(-1)" >&#8249;</span>
                                <div class="clip left"></div>
                                <div class="clip right"></div>
                                <span class="date"></span>
                                <span class="date-day"></span>
                                <div class="calendar-base"></div>
                            <span class="arrow arrow-right" onclick="cambiarFecha(1)">&#8250;</span>
                        </div>
                    </div>
                   
                    <ul class="navbar-nav mt-3" id="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link menu-link 
                                <?php if (basename($_SERVER['PHP_SELF']) == 'agenda.php') { echo 'active'; } ?>"
                                href="../agenda.php">
                                <i class="ri-calendar-line"></i> 
                                <span data-key="t-dashboards">Agenda</span>
                            </a>
                        </li> <!-- end Dashboard Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="javascript: void(0);">
                                <i class="ri-lightbulb-line"></i> 
                                <span data-key="t-apps">Dar Día</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link 
                                <?php if (basename($_SERVER['PHP_SELF']) == 'pacientes.php') { echo 'active'; } ?>" 
                                href="../pacientes.php">
                                <i class="ri-group-2-line"></i> 
                                <span data-key="t-apps">Pacientes</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="javascript: void(0);"
                                data-bs-toggle="modal" href="#ModalAgendar">
                                <i class="ri-calendar-schedule-line"></i> 
                                <span data-key="t-apps">Reprogramación</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="javascript:void(0);"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-calendar-todo-line"></i> 
                                <span data-key="t-apps">Semanal</span>
                                
                            </a>
                            <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="../semanal.php">Dr Fernando</a></li>
                                <li><a class="dropdown-item" href="../semanal.php">Dr Pedro</a></li>
                                <li><a class="dropdown-item" href="../semanal.php">Dr Camilo</a></li>
                                <li><a class="dropdown-item" href="../semanal.php">Dra Pilar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link
                                <?php if (basename($_SERVER['PHP_SELF']) == 'agenda.php') { echo 'active'; } ?>"
                                href="../agenda.php">
                                <i class="ri-list-settings-line"></i> 
                                <span data-key="t-apps">Diaria Global</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link  
                                <?php if (basename($_SERVER['PHP_SELF']) == 'agenda.php') { echo 'active'; } ?>"
                                href="../agenda.php">
                                <i class="ri-file-list-3-line"></i> 
                                <span data-key="t-apps">Diaria</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->   