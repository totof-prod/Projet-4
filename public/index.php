<?php

require '../model/Autoloader.php';

Blog\Autoloader::register();


$app = Blog\App::getInstance();

$post = $app->getTable('post');

var_dump($post->all());