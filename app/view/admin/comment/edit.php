<h1>Les commentaires signaler:</h1>
<?php

if ($comments){
    foreach ($comments as $comment) :?>
    <h5>l'auteur: <?= $comment->author; ?></h5>
    <p>
        Le commentaire
        : <?= $comment->comment; ?>
        <form action="?p=admin.comment.delete" method="post" style="display: inline;">
            <input type="hidden" name="id" value="<?= $comment->id?>">
            <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
        <form action="?p=admin.comment.update" method="post" style="display: inline;">
            <input type="hidden" name="id" value="<?= $comment->id?>">
            <input type="hidden" name="Signalement" value="null">
            <button type="submit" class="btn btn-success">conserver</button>

        </form>
    </p>

  <?php  endforeach;}
else{
    ?>
    <h3>Aucun commentaire signaler pour ce post</h3>
    <?php
}?>

<a href="?p=admin.posts.index">retour a l'accueil admin</a>