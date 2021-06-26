<?php

$categoryTable = App::getInstance()->getTable('category');

if (!empty($_POST)){

    $result = $categoryTable->create([
        'name' => $_POST['name']
        ]
    );

    if($result){
       header('Location: admin.php?p=category.edit&id=' . App::getInstance()->getDb()->lastInsertId());
    }
}



$form = new core\html\BootstrapForm($_POST);

?>

<h2>Creation d'une categorie</h2>

<form method="post">

    <?= $form->input('name','Titre de la categorie'); ?>


    <button class="btn btn-primary">Crée</button>

</form>