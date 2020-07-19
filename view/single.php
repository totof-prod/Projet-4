<?php

$post = Blog\App::getDatabase()->prepare('SELECT  * FROM posts WHERE id= ?', [$_GET['id']], 'Blog\table\Article', true);
?>

<h1><?= $post-> title; ?></h1>

<p><?= $post->content; ?></p>
