<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles/styles.css">
    <title><?= App::getInstance()->title; ?></title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <link rel="stylesheet" href="styles/admin/chartist.min.css">
    <link rel="stylesheet" href="styles/admin/chartist-plugin-tooltip.css">
    <link href="styles/admin/style.min.css" rel="stylesheet">
</head>
<body>
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
     data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin6">
            <a class="navbar-brand" href="?p=admin.posts.index">
                <b class="logo-icon">
                    <img src="assets/logo-icon.png" alt="homepage" />
                </b>
                <span class="logo-text">
                            <img src="assets/logo-text.png" alt="homepage" />
                        </span>
            </a>
            <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
               href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <ul class="navbar-nav ms-auto d-flex align-items-center">
                <li>
                    <a class="profile-pic" href="#">
                        <img src="assets/img/5.jpg" alt="user-img" width="36"
                             class="img-circle"><span class="text-white font-medium">Jean</span></a>
                </li>
                    <?php
                    if(isset($_SESSION['auth'])){
                    ?>
                <li class="nav-item active">
                    <a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php?p=admin.posts.index">admin</a>
                </li>
                <?php
                }else{
                    ?>
                    <li class="nav-item active">
                        <a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php?p=users.login">Se connecter</a>
                    </li>

                    <?php
                }
                ?>
            </ul>
        </div>
    </nav>
</header>
<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="sidebar-item pt-2">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="?p=admin.posts.index"
                       aria-expanded="false">
                        <i class="far fa-clock" aria-hidden="true"></i>
                        <span class="hide-menu">Accueil Admin</span>
                    </a>
                </li>
                <li class="sidebar-item pt-2">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php"
                       aria-expanded="false">
                        <i class="far fa-clock" aria-hidden="true"></i>
                        <span class="hide-menu">Accueil site</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="?p=admin.posts.edit"
                       aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="hide-menu">Les épisodes</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="basic-table.html"
                       aria-expanded="false">
                        <i class="fa fa-table" aria-hidden="true"></i>
                        <span class="hide-menu">La Liste de épisode</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="fontawesome.html"
                       aria-expanded="false">
                        <i class="fa fa-font" aria-hidden="true"></i>
                        <span class="hide-menu">Les commentaires</span>
                    </a>
                </li>
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<div class="page-wrapper">
    <?= $content ; ?>
<footer class="footer text-center"> 2021 © Ample Admin brought to you by <a
            href="https://www.wrappixel.com/">wrappixel.com</a>
</footer>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script src="js/admin/app-style-switcher.js"></script>
<script src="js/admin/jquery.sparkline.min.js"></script>
<script src="js/admin/waves.js"></script>
<!--Menu sidebar -->
<script src="js/admin/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="js/admin/custom.js"></script>
<!--This page JavaScript -->
<!--chartis chart-->
<script src="js/admin/chartist.min.js"></script>
<script src="js/admin/chartist-plugin-tooltip.min.js"></script>
<script src="js/admin/dashboard1.js"></script>
</body>
</html>

