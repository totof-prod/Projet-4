
<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles/style.css" >

    <title><?= App::getInstance()->title; ?></title>
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">mon super blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <?php
            if(isset($_SESSION['auth'])){
                ?>
                <li class="nav-item active">
                    <a class="nav-link" href="admin.php">admin<span class="sr-only">(current)</span></a>
                </li>
            <?php
            }else{
                ?>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?p=login">Se connecter<span class="sr-only">(current)</span></a>
                </li>
            <?php
            }
            ?>

        </ul>
    </div>
</nav>
<main role="main" class="container">
<?= $content ; ?>
</main>
</body>
</html>