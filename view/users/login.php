<?php

if(!empty($_POST )){

    $auth = new core\auth\DbAuth(App::getInstance()->getDb());
    if($auth->login($_POST["username"], $_POST["password"])){
        header('Location: admin.php');
    }else{
        var_dump(sha1($_POST['password']));
        ?>
        <div class="alert alert-danger">
            Identifiants incorrecte
        </div>
<?php

    }
}
$form = new core\html\BootstrapForm($_POST)

?>

<form method="post">

    <?= $form->input('username','Identifiant'); ?>
    <?= $form->input('password', 'Mot de pass', ['type' =>'password'] ); ?>


<button class="btn btn-primary">Se connecter</button>

</form>