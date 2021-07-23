<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles/admin/chartist-plugin-tooltip.css">
    <link rel="stylesheet" href="styles/styles.css">
    <title><?= App::getInstance()->title; ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <link rel="stylesheet" href="styles/admin/chartist.min.css">

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
      data-boxed-layout="full">
    <header class="topbar" data-navbarbg="skin5" >
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

            </div>
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                <ul class="navbar-nav ms-auto d-flex position-relative">
                    <li class="d-flex flex-column">
                        <a class="profile-pic dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" href="#">
                            <img src="assets/img/5.jpg" alt="user-img" width="36"
                                 class="img-circle"><span class="text-white font-medium">Jean Forteroche</span>
                        </a>
                        <ul class="dropdown-menu position-absolute">
                            <li><a class="dropdown-item" href="?p=admin.comment.list"><i class="fas fa-user"></i> Mon profile</a></li>
                            <li><a class="dropdown-item" href="?p=users.disconnect"><i class="fas fa-times-circle"></i> Se déconnecter</a></li>
                        </ul>
                    </li>
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
                    <li class="sidebar-item">
                        <a  class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php">
                            <i class="fas fa-home aria-hidden="true"></i>
                            <span class="hide-menu">Accueil site</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="?p=admin.posts.index"
                           aria-expanded="false">
                            <i class="fas fa-home" aria-hidden="true"></i>
                            <span class="hide-menu">Espace admin</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link nav-link dropdown-toggle"
                           data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            <i class="fa fas fa-book" aria-hidden="true"></i>
                            <span class="hide-menu">Les Livres</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu">
                            <li><a class="dropdown-item" href="?p=admin.category.list">Voir tous</a></li>
                            <li><a class="dropdown-item" href="?p=admin.category.add">Ajouter</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link nav-link dropdown-toggle"
                           data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            <i class="fas fa-book-open" aria-hidden="true"></i>
                            <span class="hide-menu">Les épisodes</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu">
                            <li><a class="dropdown-item" href="?p=admin.posts.list">Voir tous</a></li>
                            <li><a class="dropdown-item" href="?p=admin.posts.add">Ajouter</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link nav-link dropdown-toggle"
                           data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            <i class="fas fa-comments" aria-hidden="true"></i>
                            <span class="hide-menu">Les commentaires</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu">
                            <li><a class="dropdown-item" href="?p=admin.comment.list">voir tous</a></li>
                        </ul>
                    </li>

            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <div class="page-wrapper">
        <div class="container-fluid">
            <?php if (isset($_SESSION['flash'])){?>
                <div id="alert" class="alert alert-<?= $_SESSION['flash']['type']; ?>">
                    <?= $_SESSION['flash']['message']; ?>
                    <a class="close"><i class="fas fa-times-circle"></i></a>
                </div>
                <?php
                unset($_SESSION['flash']);
            } ?>
            <?= $content ; ?>
        </div>
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
<script src="js/admin/sidebarmenu.js"></script>
<script src="js/admin/custom.js"></script>
<script src="js/admin/chartist.min.js"></script>
<script src="js/admin/chartist-plugin-tooltip.min.js"></script>
<script src="js/admin/dashboard1.js"></script>
<script src="js/main.js"></script>
</body>
</html>

