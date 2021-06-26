<?php
$postTable = App::getInstance()->getTable('Post');

if (!empty($_POST)){

    $result = $postTable->update($_GET['id'],[
        'title' => $_POST['title'],
        'content' => $_POST['content'],
            'category_id'=> $_POST['category_id']
        ]
    );
    if($result){
        ?>

        <div class="alert alert-success">modification effectuer</div>

        <?php

    }
}

$post= $postTable->find($_GET['id']);
$categories= App::getInstance()->getTable('category')->extract('id', 'name');
$form = new core\html\BootstrapForm($post);

?>

<form method="post">

    <?= $form->input('title','Titre de l\'article'); ?>
    <?= $form->input('content', 'Contenu', ['type' =>'textarea'] ); ?>
    <?= $form->select('category_id', 'Categorie', $categories ); ?>

    <button class="btn btn-primary">Sauvegarder</button>

</form>