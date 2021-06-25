<?php


define('ROOT', dirname(__DIR__));
require ROOT . '/model/App.php';
App::load();



if(isset($_GET['p'])){
    $page = $_GET['p'];
}else{
    $page = 'home';
}

ob_start();
if( $page === 'home'){
    require ROOT . '/view/article/home.php';

}elseif ($page === 'posts.category'){
    require ROOT . '/view/article/category.php';

}elseif($page === 'posts.single'){
    require ROOT . '/view/article/single.php';
}
elseif($page === 'login'){
    require ROOT . '/view/users/login.php';
}

$content = ob_get_clean();

require ROOT . '/view/fontend/template.php';