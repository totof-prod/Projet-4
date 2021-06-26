<?php
$postTable = App::getInstance()->getTable('Post');

if (!empty($_POST)){

    $result = $postTable->update($_GET['id'],[
        'title' => $_POST['title'],
        'content' => $_POST['content']
        ]
    );
    if($result){
        ?>

        <div class="alert alert-success">modification effectuer</div>

        <?php

    }
}

$post= $postTable->find($_GET['id']);
$categorie= App::getInstance()->getTable('category')->all();
$form = new core\html\BootstrapForm($post);

?>

<form method="post">

    <?= $form->input('title','Titre de l\'article'); ?>
    <?= $form->input('content', 'Contenu', ['type' =>'textarea'] ); ?>

    <button class="btn btn-primary">Sauvegarder</button>

</form>