<?php


use core\auth\DbAuth;

define('ROOT', dirname(__DIR__));
require ROOT . '/model/App.php';
App::load();



if(isset($_GET['p'])){
    $page = $_GET['p'];
}else{
    $page = 'home';
}


// partie admin
$app = App::getInstance();
$auth = new DbAuth($app->getDb());

if (!$auth->logged()){

    $app->forbidden();
}

ob_start();
if( $page === 'home'){
    require ROOT . '/view/admin/article/index.php';

}elseif ($page === 'posts.edit'){
   require ROOT . '/view/admin/article/edit.php';

}elseif($page === 'posts.single'){
   require ROOT . '/view/admin/article/single.php';
}

$content = ob_get_clean();

require ROOT . '/view/admin/template.php';