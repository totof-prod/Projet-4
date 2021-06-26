<?php

$postTable = App::getInstance()->getTable('Post');

if (!empty($_POST)){

    $result = $postTable->create([
        'title' => $_POST['title'],
        'content' => $_POST['content'],
            'category_id'=> $_POST['category_id']
        ]
    );

    if($result){
       header('Location: admin.php?p=post.edit&id=' . App::getInstance()->getDb()->lastInsertId());
    }
}


$categories= App::getInstance()->getTable('category')->extract('id', 'name');
$form = new core\html\BootstrapForm($_POST);

?>

<form method="post">

    <?= $form->input('title','Titre de l\'article'); ?>
    <?= $form->input('content', 'Contenu', ['type' =>'textarea'] ); ?>
    <?= $form->select('category_id', 'Categorie', $categories ); ?>

    <button class="btn btn-primary">Crée</button>

</form>