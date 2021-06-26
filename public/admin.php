<?php


use core\auth\DbAuth;

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
    require ROOT . '/view/admin/index.php';

}elseif ($page === 'posts.edit'){
   require ROOT . '/view/admin/article/edit.php';
}elseif($page === 'posts.add'){
   require ROOT . '/view/admin/article/add.php';
}elseif($page === 'posts.delete'){
    require ROOT . '/view/admin/article/delete.php';
}elseif ($page === 'category.edit'){
    require ROOT . '/view/admin/category/edit.php';
}elseif($page === 'category.add'){
    require ROOT . '/view/admin/category/add.php';
}elseif($page === 'category.delete'){
    require ROOT . '/view/admin/category/delete.php';
}

$content = ob_get_clean();

require ROOT . '/view/admin/template.php';