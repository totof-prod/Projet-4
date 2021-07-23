<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles/styles.css">
    <title><?= App::getInstance()->title; ?></title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="index.php">Accueil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class= "navbar-nav ms-auto py-4 py-lg-0">

                <li class="nav-item active dropdown">
                    <a class="nav-link px-lg-3 py-3 py-lg-4 dropdown-toggle"
                       data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Les livres
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <?php foreach ($categories as $category): ?>
                            <a class="dropdown-item" href="?p=posts.book&id=<?= $category->id ; ?>"><?= $category->name ; ?></a>
                      <?php  endforeach; ?>
                </li>




                <li class="nav-item dropdown">
                    <a class="nav-link px-lg-3 py-3 py-lg-4 dropdown-toggle" href="about.html"
                       data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Les episodes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <?php foreach ($posts as $post): ?>
                            <a class="dropdown-item" href="?p=posts.single&id=<?= $post->id ; ?>"><?=$post->episode . ' - ' . $post->title ; ?></a>
                        <?php  endforeach; ?>
                </li>

                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.html">l'auteur</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.html">Contact</a></li>
                <?php if(isset($_SESSION['auth'])){ ?>
                    <li class="nav-item active">
                        <a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php?p=admin.posts.index">admin</a>
                    </li>
                    <?php }else{?>
                    <li class="nav-item active">
                        <a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php?p=users.login">Se connecter</a>
                    </li>
                    <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<?= $content ; ?>
<footer class="border-top">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="#!">
                                        <span class="fa-stack fa-lg">
                                            <i class="fas fa-circle fa-stack-2x"></i>
                                            <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                        </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#!">
                                        <span class="fa-stack fa-lg">
                                            <i class="fas fa-circle fa-stack-2x"></i>
                                            <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                        </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#!">
                                        <span class="fa-stack fa-lg">
                                            <i class="fas fa-circle fa-stack-2x"></i>
                                            <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                        </span>
                        </a>
                    </li>
                </ul>
                <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2021</div>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/scripts.js"></script>
<script src="js/lib/turn.js"></script>
<script src="js/main.js"></script>
</body>
</html>