<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Billet simple pour l'Alaska</h1>
                    <span class="subheading">Voici le premier livre publier seulement ligne au fil des semaines</span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container px-4 px-lg-5">
    <?php if (isset($_SESSION['flash'])){
        ?>
        <div id="alert" class="alert alert-<?= $_SESSION['flash']['type']; ?>">
            <a class="close">x</a>
            <?= $_SESSION['flash']['message']; ?>
        </div>
        <?php
        unset($_SESSION['flash']);
    } ?>
    <h2>Les differents épisode en ligne:</h2>
    <?php foreach ( $posts as $post):
    $data = $comments->findWithPost($post->id);?>
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">

            <div class="post-preview">
                <a href="<?= $post->Url; ?>">
                    <h3 class="post-title"> <?= $post->title; ?></h3>
                </a>
                <h7>chapitre: <?= $post->categorie; ?></h7>
                <h4 class="post-subtitle">Bref résumer de l'épisode</h4>
                <p class="post-meta">
                    Ecrit par
                    <a href="#!">Jean Forteroche</a>
                    le <?= $post->creation_date?>
                </p>
            </div>
            <?php if($data != NULL){
            var_dump($data) ?>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-block loader">
                            <div id="inner" class="loader">
                                <img src="assets/loaderr.gif" alt="loader" />Chargement des Commentaires
                            </div>
                        </div>
                    </div>
                    <?php foreach ( $data as $datas): ?>
                        <div class="carousel-item">
                            <div class="d-block" >
                                <h5><?= $datas->author ?> posté le <?= $datas->comment_date ?></h5>
                                <p><?= $datas->comment ?></p>
                                <form action="?p=posts.signal" method="post" style="display: inline;">
                                    <input type="hidden" name="id" value="<?= $datas->id?>">
                                    <input type="hidden" name="Signalement" value="true">
                                    <button type="submit" class="btn btn-danger">Signaler</button>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php }else{ ?>
            <div class="comment">

                Aucun comentaire à afficher

            </div>
        <?php } ?>


    </div>
</div>
<?php  endforeach; ?>
</div>

