<?php


define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';
App::load();



if(isset($_GET['p'])){
    $page = $_GET['p'];
}else{
    $page = 'home';
}

ob_start();
if( $page === 'home'){
    $controller = new \Blog\Controller\PostsController();
    $controller->index();

}elseif ($page === 'posts.category'){
    $controller = new \Blog\Controller\PostsController();
    $controller->category();

}elseif($page === 'posts.single'){
    $controller = new \Blog\Controller\PostsController();
    $controller->single();
}
elseif($page === 'login'){
    $controller = new \Blog\Controller\UsersController();
    $controller->login();
}
elseif($page === 'admin.index'){
    $controller = new \Blog\Controller\admin\PostsController();
    $controller->index();
}
