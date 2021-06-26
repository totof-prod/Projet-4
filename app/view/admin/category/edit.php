<?php
$categoryTable = App::getInstance()->getTable('category');

if (!empty($_POST)){

    $result = $categoryTable->update($_GET['id'],[
        'name' => $_POST['name']
        ]
    );
    if($result){
        ?>

        <div class="alert alert-success">modification effectuer</div>

        <?php

    }
}

$category= $categoryTable->find($_GET['id']);
$form = new core\html\BootstrapForm($category);

?>

<form method="post">

    <?= $form->input('name','Titre de la categorie'); ?>

    <button class="btn btn-primary">Sauvegarder</button>

</form>