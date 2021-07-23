<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Moderation des commentaires</h1>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container px-4 px-lg-5">
    <?php if (isset($_SESSION['flash'])){?>
        <div id="alert" class="alert alert-<?= $_SESSION['flash']['type']; ?>">
            <a class="close">x</a>
            <?= $_SESSION['flash']['message']; ?>
        </div>
        <?php unset($_SESSION['flash']);} ?>

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
</div>