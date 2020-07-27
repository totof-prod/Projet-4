<?php

use Blog\App;
use Blog\table\Article;
use Blog\table\Categorie;

$post = Article::find($_GET['id']);

if($post === false){
    App::notFound();
}
App::setTitle($post->title);
?>

<h1><?= $post-> title; ?></h1>
<p><em><?= $post->categorie?></em></p>
<p><?= $post-> content; ?></p>
