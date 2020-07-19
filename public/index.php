<?php

require '../model/Autoloader.php';

Blog\Autoloader::register();

if(isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    $p = 'home';
}


ob_start();

if($p === 'home'){
    require '../view/home.php';
}elseif ($p === 'article'){
    require '../view/single.php';
}
$content = ob_get_clean();
require '../view/fontend/template.php';