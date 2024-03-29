<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Leasing Code, desarrollado por Netcode.cl" />
    <meta name="author" content="Netcode.cl, Soluciones Informáticas Chile, Mauricio Durán Torres" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scripts.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    {{-- <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" /> --}}
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
</head>
<body class="nav-fixed">
    <nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white" id="sidenavAccordion">
        <!-- Sidenav Toggle Button-->
        <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle"><i data-feather="menu"></i></button>
        <!-- Navbar Brand-->
        <!-- * * Tip * * You can use text or an image for your navbar brand.-->
        <!-- * * * * * * When using an image, we recommend the SVG format.-->
        <!-- * * * * * * Dimensions: Maximum height: 32px, maximum width: 240px-->
        <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="index.html">{{env ('APP_NAME_DASHBOARD')}}</a>
        <!-- Navbar Search Input-->
        <!-- * * Note: * * Visible only on and above the lg breakpoint-->
        <form class="form-inline me-auto d-none d-lg-block me-3">
            <div class="input-group input-group-joined input-group-solid">
                <input class="form-control pe-0" type="search" placeholder="Buscar Registro" aria-label="Search" />
                <div class="input-group-text"><i data-feather="search"></i></div>
            </div>
        </form>
        <!-- Navbar Items-->
        <ul class="navbar-nav align-items-center ms-auto">
            <!-- Documentation Dropdown-->
            <li class="nav-item dropdown no-caret d-none d-md-block me-3">
                <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="fw-500">Documentation del Sistema</div>
                    <i class="fas fa-chevron-right dropdown-arrow"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0 me-sm-n15 me-lg-0 o-hidden animated--fade-in-up" aria-labelledby="navbarDropdownDocs">
                    <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro" target="_blank">
                        <div class="icon-stack bg-primary-soft text-primary me-4"><i data-feather="book"></i></div>
                        <div>
                            <div class="small text-gray-500">Documentación de Procesos</div>
                            Manual de Referencia del Sistema
                        </div>
                    </a>
                    <div class="dropdown-divider m-0"></div>
                    <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro/components" target="_blank">
                        <div class="icon-stack bg-primary-soft text-primary me-4"><i data-feather="code"></i></div>
                        <div>
                            <div class="small text-gray-500">Componentes</div>
                            Referencia de buenas prácticas
                        </div>
                    </a>
                    <div class="dropdown-divider m-0"></div>
                    <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro/changelog" target="_blank">
                        <div class="icon-stack bg-primary-soft text-primary me-4"><i data-feather="file-text"></i></div>
                        <div>
                            <div class="small text-gray-500">Log Activity</div>
                            Actualizaciones del sistema.
                        </div>
                    </a>
                </div>
            </li>
            <!-- Navbar Search Dropdown-->
            <!-- * * Note: * * Visible only below the lg breakpoint-->
            <li class="nav-item dropdown no-caret me-3 d-lg-none">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="searchDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="search"></i></a>
                <!-- Dropdown - Search-->
                <div class="dropdown-menu dropdown-menu-end p-3 shadow animated--fade-in-up" aria-labelledby="searchDropdown">
                    <form class="form-inline me-auto w-100">
                        <div class="input-group input-group-joined input-group-solid">
                            <input class="form-control pe-0" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                            <div class="input-group-text"><i data-feather="search"></i></div>
                        </div>
                    </form>
                </div>
            </li>
            <!-- Alerts Dropdown-->
            <li class="nav-item dropdown no-caret d-none d-sm-block me-3 dropdown-notifications">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="bell"></i></a>
                <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts">
                    <h6 class="dropdown-header dropdown-notifications-header">
                        <i class="me-2" data-feather="bell"></i>
                        Alerts Center
                    </h6>
                    <!-- Example Alert 1-->
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <div class="dropdown-notifications-item-icon bg-warning"><i data-feather="activity"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">{{ \Carbon\Carbon::now()->format('d/m/Y H:i:s a') }} </div>
                            <div class="dropdown-notifications-item-content-text">This is an alert message. It's nothing serious, but it requires your attention.</div>
                        </div>
                    </a>
                    <!-- Example Alert 2-->
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <div class="dropdown-notifications-item-icon bg-info"><i data-feather="bar-chart"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">{{ \Carbon\Carbon::now()->format('d/m/Y H:i:s a') }} </div>
                            <div class="dropdown-notifications-item-content-text">A new monthly report is ready. Click here to view!</div>
                        </div>
                    </a>
                    <!-- Example Alert 3-->
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <div class="dropdown-notifications-item-icon bg-danger"><i class="fas fa-exclamation-triangle"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">{{ \Carbon\Carbon::now()->format('d/m/Y H:i:s a') }} </div>
                            <div class="dropdown-notifications-item-content-text">Critical system failure, systems shutting down.</div>
                        </div>
                    </a>
                    <!-- Example Alert 4-->
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <div class="dropdown-notifications-item-icon bg-success"><i data-feather="user-plus"></i></div>
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-details">{{ \Carbon\Carbon::now()->format('d/m/Y H:i:s a') }} </div>
                            <div class="dropdown-notifications-item-content-text">New user request. Woody has requested access to the organization.</div>
                        </div>
                    </a>
                    <a class="dropdown-item dropdown-notifications-footer" href="#!">View All Alerts</a>
                </div>
            </li>
            <!-- Messages Dropdown-->
            <li class="nav-item dropdown no-caret d-none d-sm-block me-3 dropdown-notifications">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="mail"></i></a>
                <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownMessages">
                    <h6 class="dropdown-header dropdown-notifications-header">
                        <i class="me-2" data-feather="mail"></i>
                        Message Center
                    </h6>
                    <!-- Example Message 1  -->
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <img class="dropdown-notifications-item-img" src="assets/img/illustrations/profiles/profile-2.png" />
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                            <div class="dropdown-notifications-item-content-details">Thomas Wilcox · 58m</div>
                        </div>
                    </a>
                    <!-- Example Message 2-->
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <img class="dropdown-notifications-item-img" src="assets/img/illustrations/profiles/profile-3.png" />
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                            <div class="dropdown-notifications-item-content-details">Emily Fowler · 2d</div>
                        </div>
                    </a>
                    <!-- Example Message 3-->
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <img class="dropdown-notifications-item-img" src="assets/img/illustrations/profiles/profile-4.png" />
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                            <div class="dropdown-notifications-item-content-details">Marshall Rosencrantz · 3d</div>
                        </div>
                    </a>
                    <!-- Example Message 4-->
                    <a class="dropdown-item dropdown-notifications-item" href="#!">
                        <img class="dropdown-notifications-item-img" src="assets/img/illustrations/profiles/profile-5.png" />
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                            <div class="dropdown-notifications-item-content-details">Colby Newton · 3d</div>
                        </div>
                    </a>
                    <!-- Footer Link-->
                    <a class="dropdown-item dropdown-notifications-footer" href="#!">Read All Messages</a>
                </div>
            </li>
            <!-- User Dropdown-->
            <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="assets/img/illustrations/profiles/profile-2.png" /></a>
                <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                    <h6 class="dropdown-header d-flex align-items-center">
                        <img class="dropdown-user-img" src="assets/img/illustrations/profiles/profile-2.png" />
                        <div class="dropdown-user-details">
                            <div class="dropdown-user-details-name">Mauricio Duran</div>
                            <div class="dropdown-user-details-email">hola@netcode.cl</div>
                        </div>
                    </h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">
                        <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                        Datos de la cuenta
                    </a>
                    <a class="dropdown-item" href="#!">
                        <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sidenav shadow-right sidenav-light">
                <div class="sidenav-menu">
                    <div class="nav accordion" id="accordionSidenav">
                        <!-- Sidenav Menu Heading (Account)-->
                        <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                        <div class="sidenav-menu-heading d-sm-none">Administracón Negocio</div>
                        <!-- Sidenav Link (Alerts)-->
                        <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                        <a class="nav-link d-sm-none" href="#!">
                            <div class="nav-link-icon"><i data-feather="bell"></i></div>
                            Alerts
                            <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
                        </a>
                        <!-- Sidenav Link (Messages)-->
                        <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                        <a class="nav-link d-sm-none" href="#!">
                            <div class="nav-link-icon"><i data-feather="mail"></i></div>
                            Messages
                            <span class="badge bg-success-soft text-success ms-auto">2 New!</span>
                        </a>
                        <!-- Sidenav Menu Heading (Core)-->
                        <div class="sidenav-menu-heading">Core Leasing</div>
                        <!-- Sidenav Accordion (Dashboard)-->
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                            <div class="nav-link-icon"><i data-feather="activity"></i></div>
                            Dashboard

                        </a>
                        {{-- <div class="collapse" id="collapseDashboards" data-bs-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                                <a class="nav-link" href="dashboard-1.html">
                                    Default
                                    <span class="badge bg-primary-soft text-primary ms-auto">Updated</span>
                                </a>
                                <a class="nav-link" href="dashboard-2.html">Multipurpose</a>
                                <a class="nav-link" href="dashboard-3.html">Affiliate</a>
                            </nav>
                        </div> --}}
                        <!-- Sidenav Heading (APP Work)-->
                        <div class="sidenav-menu-heading">APP Leasing</div>
                        <!-- Sidenav Accordion (Backoffice)-->
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="nav-link-icon"><i class="fas fa-file-invoice"></i></div>
                            BackOffice
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" data-bs-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                                <!-- Nested Sidenav Accordion (Pages -> Clientes)-->
                                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAccount" aria-expanded="false" aria-controls="pagesCollapseAccount">
                                    Gestión de Clientes
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAccount" data-bs-parent="#accordionSidenavPagesMenu">
                                    <nav class="sidenav-menu-nested nav">
                                        <a class="nav-link" href="#">Listado Completo</a>
                                        <a class="nav-link" href="#">Ticket Clientes (Temp)</a>
                                        <a class="nav-link" href="#">Sucursales/Facturación</a>
                                        <a class="nav-link" href="#">Mantención PAC</a>
                                        <a class="nav-link" href="#">Notificaciones Clientes</a>
                                    </nav>
                                </div>
                                <!-- Nested Sidenav Accordion (Pages -> Contatos)-->
                                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Gestión de Contratos
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" data-bs-parent="#accordionSidenavPagesMenu">
                                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesAuth">
                                        <!-- Nested Sidenav Accordion (Pages -> Authentication -> Basic)-->
                                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuthBasic" aria-expanded="false" aria-controls="pagesCollapseAuthBasic">
                                            Proceso Contratos
                                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                        </a>
                                        <!-- Nested Sidenav Accordion (Pages -> Authentication -> Social)-->
                                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuthSocial" aria-expanded="false" aria-controls="pagesCollapseAuthSocial">
                                            Proceso Cotizaciones
                                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                        </a>
                                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuthBasic" aria-expanded="false" aria-controls="pagesCollapseAuthBasic">
                                            Template Cotización
                                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                        </a>
                                    </nav>
                                </div>
                                <!-- Nested Sidenav Accordion (Pages -> Bienes)-->
                                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    Gestión de Bienes
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" data-bs-parent="#accordionSidenavPagesMenu">
                                    <nav class="sidenav-menu-nested nav">
                                        <a class="nav-link" href="#">Bienes Recuperados</a>
                                        <a class="nav-link" href="#">Contribuciones</a>
                                        <a class="nav-link" href="#">Listado Bienes Muebles</a>
                                        <a class="nav-link" href="#">Listado Bienes Inmuebles</a>
                                        <a class="nav-link" href="#">Gastos de Bienes</a>
                                        <a class="nav-link" href="#">Leasing Express</a>
                                    </nav>
                                </div>
                                <!-- Nested Sidenav Accordion (Pages -> Knowledge Base)-->
                                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#pagesCollapseKnowledgeBase" aria-expanded="false" aria-controls="pagesCollapseKnowledgeBase">
                                   Facturación
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                            </nav>
                        </div>
                        <!-- Sidenav Accordion (Comercial)-->
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseFlows" aria-expanded="false" aria-controls="collapseFlows">
                            <div class="nav-link-icon"><i class="far fa-id-badge"></i></div>
                            Comercial
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseFlows" data-bs-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav">
                                <a class="nav-link" href="#">Gestión de Cotizaciones</a>
                                <a class="nav-link" href="#">Gestión de Contratos</a>
                            </nav>
                        </div>
                        <!-- Sidenav Accordion (Contabilidad)-->
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#contabilidad" aria-expanded="false" aria-controls="contabilidad">
                            <div class="nav-link-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                            Contabilidad
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="contabilidad" data-bs-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav">
                                <a class="nav-link" href="#">Proceso Contable</a>
                                <a class="nav-link" href="#">Libros Contables</a>
                                <a class="nav-link" href="#">Plan Contable</a>
                                <a class="nav-link" href="#">Voucher Contable</a>
                                <a class="nav-link" href="#">Reportes Contables</a>
                            </nav>
                        </div>

                        <!-- Sidenav Accordion (Tesorería)-->
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#tesoreria" aria-expanded="false" aria-controls="contabilidad">
                            <div class="nav-link-icon"><i class="fas fa-donate"></i></i></div>
                            Tesoreria
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="tesoreria" data-bs-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav">
                                <a class="nav-link" href="#">Proceso Contable</a>
                                <a class="nav-link" href="#">Libros Contables</a>
                                <a class="nav-link" href="#">Plan Contable</a>
                                <a class="nav-link" href="#">Voucher Contable</a>
                                <a class="nav-link" href="#">Reportes Contables</a>
                            </nav>
                        </div>
                        <!-- Sidenav Heading (UI Toolkit)-->
                        <div class="sidenav-menu-heading">Leasing Toolkit</div>
                        <!-- Sidenav Accordion (Layout)-->
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="nav-link-icon"><i data-feather="layout"></i></div>
                            Leasing Express
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" data-bs-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
                                <!-- Nested Sidenav Accordion (Layout -> Navigation)-->
                                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseLayoutSidenavVariations" aria-expanded="false" aria-controls="collapseLayoutSidenavVariations">
                                    Navigation
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayoutSidenavVariations" data-bs-parent="#accordionSidenavLayout">
                                    <nav class="sidenav-menu-nested nav">
                                        <a class="nav-link" href="layout-static.html">Static Sidenav</a>
                                        <a class="nav-link" href="layout-dark.html">Dark Sidenav</a>
                                        <a class="nav-link" href="layout-rtl.html">RTL Layout</a>
                                    </nav>
                                </div>
                                <!-- Nested Sidenav Accordion (Layout -> Container Options)-->
                                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseLayoutContainers" aria-expanded="false" aria-controls="collapseLayoutContainers">
                                    Container Options
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayoutContainers" data-bs-parent="#accordionSidenavLayout">
                                    <nav class="sidenav-menu-nested nav">
                                        <a class="nav-link" href="layout-boxed.html">Boxed Layout</a>
                                        <a class="nav-link" href="layout-fluid.html">Fluid Layout</a>
                                    </nav>
                                </div>
                                <!-- Nested Sidenav Accordion (Layout -> Page Headers)-->
                                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsPageHeaders" aria-expanded="false" aria-controls="collapseLayoutsPageHeaders">
                                    Page Headers
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayoutsPageHeaders" data-bs-parent="#accordionSidenavLayout">
                                    <nav class="sidenav-menu-nested nav">
                                        <a class="nav-link" href="header-simplified.html">Simplified</a>
                                        <a class="nav-link" href="header-compact.html">Compact</a>
                                        <a class="nav-link" href="header-overlap.html">Content Overlap</a>
                                        <a class="nav-link" href="header-breadcrumbs.html">Breadcrumbs</a>
                                        <a class="nav-link" href="header-light.html">Light</a>
                                    </nav>
                                </div>
                                <!-- Nested Sidenav Accordion (Layout -> Starter Layouts)-->
                                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsStarterTemplates" aria-expanded="false" aria-controls="collapseLayoutsStarterTemplates">
                                    Starter Layouts
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayoutsStarterTemplates" data-bs-parent="#accordionSidenavLayout">
                                    <nav class="sidenav-menu-nested nav">
                                        <a class="nav-link" href="starter-default.html">Default</a>
                                        <a class="nav-link" href="starter-minimal.html">Minimal</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        <!-- Sidenav Accordion (Components)-->
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseComponents" aria-expanded="false" aria-controls="collapseComponents">
                            <div class="nav-link-icon"><i class="fas fa-file-invoice"></i></div>
                            Template de Contratos
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseComponents" data-bs-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav">
                                <a class="nav-link" href="alerts.html">Backoffice</a>
                                <a class="nav-link" href="avatars.html">Cobranza</a>
                                <a class="nav-link" href="badges.html">Consultas</a>
                                <a class="nav-link" href="buttons.html">Buttons</a>
                                <a class="nav-link" href="cards.html">
                                    Cards
                                    <span class="badge bg-primary-soft text-primary ms-auto">Updated</span>
                                </a>
                                <a class="nav-link" href="dropdowns.html">Dropdowns</a>
                                <a class="nav-link" href="forms.html">
                                    Forms
                                    <span class="badge bg-primary-soft text-primary ms-auto">Updated</span>
                                </a>
                                <a class="nav-link" href="modals.html">Modals</a>
                                <a class="nav-link" href="navigation.html">Navigation</a>
                                <a class="nav-link" href="progress.html">Progress</a>
                                <a class="nav-link" href="step.html">Step</a>
                                <a class="nav-link" href="timeline.html">Timeline</a>
                                <a class="nav-link" href="toasts.html">Toasts</a>
                                <a class="nav-link" href="tooltips.html">Tooltips</a>
                            </nav>
                        </div>
                        <!-- Sidenav Accordion (Utilities)-->
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseUtilities" aria-expanded="false" aria-controls="collapseUtilities">
                            <div class="nav-link-icon"><i data-feather="tool"></i></div>
                            Utilidades Leasing
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseUtilities" data-bs-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav">
                                <a class="nav-link" href="#">Log de Sistema</a>
                                <a class="nav-link" href="#">Gestión Usuarios</a>
                                <a class="nav-link" href="#">Roles/Autorizaciones</a>
                                <a class="nav-link" href="#">Sevidor</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseApi" aria-expanded="false" aria-controls="collapseApi">
                            <div class="nav-link-icon"><i class="far fa-file-code"></i></div>
                            API Leasing
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <!-- Sidenav Heading (Addons)-->
                        <div class="sidenav-menu-heading">Reportes</div>
                        <!-- Sidenav Link (Charts)-->
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseReportesNormativos" aria-expanded="false" aria-controls="collapseReportesNormativos">
                            <div class="nav-link-icon"><i class="fas fa-bullhorn"></i></div>
                           Normativos
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseReportesNormativos" data-bs-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav">
                                <a class="nav-link" href="#">Reporte C13</a>
                                <a class="nav-link" href="#">Reporte D21</a>
                                <a class="nav-link" href="#">Reporte D22</a>
                                <a class="nav-link" href="#">Reporte D27</a>
                                <a class="nav-link" href="#">Reporte Fogape</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseReportesInternos" aria-expanded="false" aria-controls="collapseReportesInternos">
                            <div class="nav-link-icon"><i class="fas fa-chart-pie"></i></div>
                           Internos (Banco)
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <a class="nav-link" href="charts.html">
                            <div class="nav-link-icon"><i data-feather="bar-chart"></i></div>
                            Gráficos de Decisión
                        </a>
                        <!-- Sidenav Link (Tables)-->

                        <a class="nav-link" href="{{ app('router')->has('dashboard.tabla_clientes') ? route('dashboard.tabla_clientes') : url('dashboard/tabla_clientes') }}">
                            <div class="nav-link-icon"><i data-feather="filter"></i></div>
                            Tablas de Trabajo
                        </a>
                    </div>
                </div>
                <!-- Sidenav Footer-->
                <div class="sidenav-footer">
                    <div class="sidenav-footer-content">
                        <div class="sidenav-footer-subtitle">Logueado como:</div>
                        <div class="sidenav-footer-title">Mauricio Durán Tores  -  desde: 10:00:12 AM - 27-07-2021</div>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <!-- Main page content-->
                <div class="container-xl px-4 mt-5">
                    <!-- Custom page header alternative example-->
                    <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
                        <div class="me-4 mb-3 mb-sm-0">
                            <h1 class="mb-0">Panel Principal</h1>
                            <div class="small">
                                <span class="fw-500 text-primary">{{ \Carbon\Carbon::now()->locale('es')->dayName }}</span>
                                &middot; {{ \Carbon\Carbon::now()->format('d/m/Y     H:i:s  A') }}
                            </div>
                        </div>
                        <!-- Date range picker example-->
                        {{-- <div class="input-group input-group-joined border-0 shadow" style="width: 16.5rem">
                            <span class="input-group-text"><i data-feather="calendar"></i></span>
                            <input class="form-control ps-0 pointer" id="litepickerRangePlugin" placeholder="Select date range..." />
                        </div> --}}
                    </div>
                    <!-- Illustration dashboard card example-->
                    <div class="card card-waves mb-4 mt-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center justify-content-between">
                                <div class="col">
                                    <h2 class="text-primary">Bienvenido, su tablero de trabajo está listo.</h2>
                                    <p class="text-gray-700">Hola Bienvenido a <b>Leasing Code</b>, ¡tú panel de control de operaciones Leasing está listo para funcionar! Puedes ver las ventas, generar contratos, listar bienes, generar consultas al sistema, fusionar operaciones, generar enlaces de trabajo para compartir de forma segura en el proceso Leasing, asignar trabajos, crear usuarios, modificar perfiles, asignaciones de reempalzo de ejecutivos, modificar y/o crear workflow de trabajos,  preparar cotizaciones y descargar y cerrar con informes de proceso de fin de día utilizando este panel.</p>
                                    {{-- <a class="btn btn-primary p-3" href="#!">
                                        Get Started
                                        <i class="ms-1" data-feather="arrow-right"></i>
                                    </a> --}}
                                </div>
                                <div class="col d-none d-lg-block mt-xxl-n4"><img class="img-fluid px-xl-4 mt-xxl-n5" src="assets/img/illustrations/statistics.svg" /></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <!-- Dashboard info widget 1-->
                            <div class="card border-start-lg border-start-primary h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <div class="small fw-bold text-primary mb-1">Cotizaciones (mes: Julio)</div>
                                            <div class="h5">$2.200 MM</div>
                                            <div class="text-xs fw-bold text-success d-inline-flex align-items-center">
                                                <i class="me-1" data-feather="trending-up"></i>
                                                12%
                                            </div>
                                        </div>
                                        <div class="ms-2"><i class="fas fa-dollar-sign fa-2x text-gray-200"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <!-- Dashboard info widget 2-->
                            <div class="card border-start-lg border-start-secondary h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <div class="small fw-bold text-secondary mb-1">Leasing Express (mes: Julio)</div>
                                            <div class="h5">$27.00</div>
                                            <div class="text-xs fw-bold text-danger d-inline-flex align-items-center">
                                                <i class="me-1" data-feather="trending-down"></i>
                                                3%
                                            </div>
                                        </div>
                                        <div class="ms-2"><i class="fas fa-file-invoice-dollar fa-2x text-gray-200"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <!-- Dashboard info widget 3-->
                            <div class="card border-start-lg border-start-success h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <div class="small fw-bold text-success mb-1">Contratos</div>
                                            <div class="h5">11,291</div>
                                            <div class="text-xs fw-bold text-success d-inline-flex align-items-center">
                                                <i class="me-1" data-feather="trending-up"></i>
                                                12%
                                            </div>
                                        </div>
                                        <div class="ms-2"><i class="far fa-building fa-2x text-gray-200"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <!-- Dashboard info widget 4-->
                            <div class="card border-start-lg border-start-info h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <div class="small fw-bold text-info mb-1">Listado de Bienes</div>
                                            <div class="h5">1.23%</div>
                                            <div class="text-xs fw-bold text-success d-inline-flex align-items-center">
                                                <i class="me-1" data-feather="trending-up"></i>
                                                13%
                                            </div>
                                        </div>
                                        <div class="ms-2"><i class="fas fa-tasks fa-2x text-gray-200"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 mb-4">
                            <!-- Illustration card example-->
                            <div class="card mb-4">
                                <div class="card-body text-center p-5">
                                    <img class="img-fluid mb-5" src="assets/img/illustrations/data-report.svg" />
                                    <h4>Generación de Reporte</h4>
                                    <p class="mb-4">Listo para comenzar?, hemos creado un set personalizados entre secciones Comercial, Operaciones, Alta Generencia para extracción de Reportes on Demand y desarrollo a la medida.</p>
                                    <a class="btn btn-primary p-3" href="#!">Continue</a>
                                </div>
                            </div>
                            <!-- Report summary card example-->
                            <div class="card mb-4">
                                <div class="card-header">Reportes Leasing Code App</div>
                                <div class="list-group list-group-flush small">
                                    <a class="list-group-item list-group-item-action" href="#!">
                                        <i class="fas fa-dollar-sign fa-fw text-blue me-2"></i>
                                        Cotizaciones
                                    </a>
                                    <a class="list-group-item list-group-item-action" href="#!">
                                        <i class="fas fa-tag fa-fw text-purple me-2"></i>
                                        Contratos Pendientes de Curse
                                    </a>
                                    <a class="list-group-item list-group-item-action" href="#!">
                                        <i class="fas fa-mouse-pointer fa-fw text-green me-2"></i>
                                        Contratos Finalizados
                                    </a>
                                    <a class="list-group-item list-group-item-action" href="#!">
                                        <i class="fas fa-percentage fa-fw text-yellow me-2"></i>
                                        Reversa de Operaciones
                                    </a>
                                    <a class="list-group-item list-group-item-action" href="#!">
                                        <i class="fas fa-chart-pie fa-fw text-pink me-2"></i>
                                        Tipos de Bienes (Mueble /Inmueble)
                                    </a>
                                </div>
                                <div class="card-footer position-relative border-top-0">
                                    <a class="stretched-link" href="#!">
                                        <div class="text-xs d-flex align-items-center justify-content-between">
                                            Ver Más Reportes
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- Progress card example-->
                            <div class="card bg-primary border-0">
                                <div class="card-body">
                                    <h5 class="text-white-50">Volumen Operaciones</h5>
                                    <div class="mb-4">
                                        <span class="display-4 text-white">$360k</span>
                                        <span class="text-white-50">por año (operaciones leasing)</span>
                                    </div>
                                    <div class="progress bg-white-25 rounded-pill" style="height: 0.5rem"><div class="progress-bar bg-white w-75 rounded-pill" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 mb-4">
                            <!-- Area chart example-->
                            <div class="card mb-4">
                                <div class="card-header">Resumen de Ingresos</div>
                                <div class="card-body">
                                    <div class="chart-area"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Bar chart example-->
                                    <div class="card h-100">
                                        <div class="card-header">Informes de Venta</div>
                                        <div class="card-body d-flex flex-column justify-content-center">
                                            <div class="chart-bar"><canvas id="myBarChart" width="100%" height="30"></canvas></div>
                                        </div>
                                        <div class="card-footer position-relative">
                                            <a class="stretched-link" href="#!">
                                                <div class="text-xs d-flex align-items-center justify-content-between">
                                                    Ve más Reportes
                                                    <i class="fas fa-long-arrow-alt-right"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <!-- Pie chart example-->
                                    <div class="card h-100">
                                        <div class="card-header">Tipos de Operaciones Generadas</div>
                                        <div class="card-body">
                                            <div class="chart-pie mb-4"><canvas id="myPieChart" width="100%" height="50"></canvas></div>
                                            <div class="list-group list-group-flush">
                                                <div class="list-group-item d-flex align-items-center justify-content-between small px-0 py-2">
                                                    <div class="me-3">
                                                        <i class="fas fa-circle fa-sm me-1 text-blue"></i>
                                                        Leasing Express
                                                    </div>
                                                    <div class="fw-500 text-dark">55%</div>
                                                </div>
                                                <div class="list-group-item d-flex align-items-center justify-content-between small px-0 py-2">
                                                    <div class="me-3">
                                                        <i class="fas fa-circle fa-sm me-1 text-purple"></i>
                                                        Vehiculos (flotas)
                                                    </div>
                                                    <div class="fw-500 text-dark">15%</div>
                                                </div>
                                                <div class="list-group-item d-flex align-items-center justify-content-between small px-0 py-2">
                                                    <div class="me-3">
                                                        <i class="fas fa-circle fa-sm me-1 text-green"></i>
                                                        Bienes Raices
                                                    </div>
                                                    <div class="fw-500 text-dark">30%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    {{-- <script src="{{ asset('js/scripts.js') }}></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script>
    <script src="{{ asset('assets/demo/chart-pie-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js" crossorigin="anonymous"></script>
    <script src ="{{ asset ('js/litepicker.js')}}"></script>
</body>
</html>
