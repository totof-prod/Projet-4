<?php if (isset($_SESSION['flash'])){?>
            <div id="alert" class="alert alert-<?= $_SESSION['flash']['type']; ?>">
                <a class="close">x</a>
                <?= $_SESSION['flash']['message']; ?>
            </div>
 <?php unset($_SESSION['flash']);} ?>
    <h1><?= $category->name;?></h1>
    <div class="row">
        <div class="cols-sm-8">
            <?php foreach ( $article as $articles): ?>
            <h2><a href="<?= $articles->Url; ?>"><?= $articles->title; ?></a></h2>
                <h5><?= $articles->categorie;?></h5>
                <?= $articles->Extrait; ?>

            <?php   endforeach; ?>
        </div>

        <div class="cols-sm-4">
            <ul>
                <?php foreach( $categories as $category): ?>

                    <li><a href="<?= $category->url; ?>"><?= $category->name; ?></a></li>

                <?php endforeach; ?>
            </ul>
        </div>
    </div>
