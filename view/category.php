<?php

use Blog\App;
use Blog\table\Article;
use Blog\table\Categorie;

$categorie = Categorie::find($_GET['id']);
    if($categorie === false){
        App::notFound();
    }
$article =  Article::lastByCategorie($_GET['id']);
$categories = Categorie::all1();
?>

    <h1><?= $categorie->name;?></h1>
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
                <?php foreach( Blog\table\Categorie::all1() as $category): ?>

                    <li><a href="<?= $category->url; ?>"><?= $category->name; ?></a></li>

                <?php endforeach; ?>
            </ul>
        </div>
    </div>
