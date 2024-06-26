<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.php" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/LogoD1.jpg" alt="" height="24">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/LogoD1.jpg" alt="" height="24"> <span class="logo-txt">DatAlpine</span>
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>

        <div class="d-flex">            
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item bg-light-subtle border-start border-end"
                    id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="assets/images/favicon.ico"
                        alt="Header Avatar">
                    <!-- 
                        <span class="d-none d-xl-inline-block ms-1 fw-medium">
                            <?php echo $language["Shawn_L"]; ?>.
                        </span>
                    -->                                         
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->                    
                    <!--Bloqueo
                <a class="dropdown-item" href="auth-lock-screen.php"><i
                            class="mdi mdi-lock font-size-16 align-middle me-1"></i>
                        Bloquear pantalla
                    </a>-->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php"><i
                            class="mdi mdi-logout font-size-16 align-middle me-1"></i>
                        Cerrar sesión
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">
                    <?php echo $language["Menu"]; ?>
                </li>
                <li>
                    <a href="index.php">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Menú</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="menu-explorador.php"><span data-key="t-calendar">Explorador de valuación y
                                    precios</span></a></li>
                        <li><a href="menu-segmentaciones.php"><span data-key="t-chat">Segmentaciones de
                                    mercado</span></a></li>
                        <li><a href="menu-amenidades.php"><span data-key="t-email">Amenidades</span></a></li>
                        <li><a href="menu-consultoria.php"><span data-key="t-invoices">Consultoria</span></a></li>
                        <li><a href="menu-tendencias.php"><span data-key="t-contacts">Tendencias</span></a></li>
                        <li><a href="menu-contacto.php"><span data-key="t-blog">Contacto</span></a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="has-arrow">
                        <i data-feather="map"></i>
                        <span data-key="t-authentication">Estados</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="javascript:void(0);" class="has-arrow">
                                <span data-key="t-contacts">Hidalgo</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li>
                                    <a href="javascript:void(0);" class="has-arrow">
                                        <span data-key="t-contacts">Pachuca</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="pac-vision.php" data-key="t-user-grid">Visión General del
                                                Mercado</a></li>
                                        <li><a href="pac-analisis.php" data-key="t-user-grid">Análisis de Segmentos y
                                                Precios</a></li>
                                        <li><a href="pac-caracteristicas.php" data-key="t-user-grid">Características y
                                                Distribución de Propiedades</a></li>
                                        <li><a href="pac-dinamica.php" data-key="t-user-grid">Dinámicas de Venta y
                                                Financiamiento</a></li>
                                        <li><a href="pac-demografia.php" data-key="t-user-list">Demografía y Tendencias
                                                de Mercado</a></li>
                                        <li><a href="pac-proyecciones.php" data-key="t-profile">Proyecciones
                                                Oportunidades de Inversión y Análisis de Colonias</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="has-arrow">
                                        <span data-key="t-contacts">Tulancingo</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="tulan-vision.php" data-key="t-user-grid">Visión General del
                                                Mercado</a></li>
                                        <li><a href="tulan-analisis.php" data-key="t-user-list">Análisis de Segmentos y
                                                Precios</a></li>
                                        <li><a href="tulan-caracteristicas.php" data-key="t-profile">Características y
                                                Distribución de Propiedades</a></li>
                                        <li><a href="tulan-dinamica.php" data-key="t-blog-list">Dinámicas de Venta y
                                                Financiamiento</a></li>
                                        <li><a href="tulan-demografica.php" data-key="t-user-list">Demografía y
                                                Tendencias de Mercado</a></li>
                                        <li><a href="tulan-proyecciones.php" data-key="t-profile">Proyecciones
                                                Oportunidades de Inversión y Análisis de Colonias</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="has-arrow">
                                <span data-key="t-contacts">Puebla</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="pueb-vision.php" data-key="t-user-grid">Visión General del Mercado</a></li>
                                <li><a href="pueb-analisis.php" data-key="t-user-grid">Análisis de Segmentos y
                                        Precios</a></li>
                                <li><a href="pueb-caracteristicas.php" data-key="t-user-grid">Características y
                                        Distribución de Propiedades</a></li>
                                <li><a href="pueb-dinamicas.php" data-key="t-user-grid">Dinámicas de Venta y
                                        Financiamiento</a></li>
                                <li><a href="pueb-demografia.php" data-key="t-user-list">Demografía y Tendencias de
                                        Mercado</a></li>
                                <li><a href="pueb-proyecciones.php" data-key="t-profile">Proyecciones Oportunidades de
                                        Inversión y Análisis de Colonias</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>

<style>
    .metismenu li a span {
        display: inline-block;
        max-width: 150px; /* Ajusta el ancho máximo según sea necesario */
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        vertical-align: middle;
    }

    .metismenu .sub-menu {
        padding-left: 15px;
    }

    .metismenu .sub-menu > li > a {
        padding-left: 35px; /* Aumenta el padding para los submenús de segundo nivel */
    }

    .metismenu .sub-menu .sub-menu > li > a {
        padding-left: 45px; /* Aumenta el padding para los submenús de tercer nivel */
    }

    .vertical-menu .has-arrow::after {
        float: right;
    }
</style>

<!-- Left Sidebar End -->