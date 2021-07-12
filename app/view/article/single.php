<header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1>Episode: <?= $post->categorie?> </h1>
                            <h2 class="subheading"><?= $post->title; ?></h2>
                            <p class="meta">
                            Ecrit par
                            <a href="#!">Jean Forteroche</a>
                            le <?= $post->creation_date?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <?php if (isset($_SESSION['flash'])){?>
            <div id="alert" class="alert alert-<?= $_SESSION['flash']['type']; ?>">
                <a class="close">x</a>
                <?= $_SESSION['flash']['message']; ?>
            </div>
        <?php unset($_SESSION['flash']);} ?>
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <?= $post->content; ?>
            </div>
        </div>
    </div>
</article>

<div>
<h3>Les commentaires:</h3>

<a class="btn btn-primary" href="?p=posts.addComment&id=<?= $post->id; ?>">ajouter un commentaire</a>

    <?php if($comments){
        foreach ($comments as $comment): ?>
        <h5><?= $comment->author ?> posté le <?= $comment->comment_date ?></h5>
        <p><?= $comment->comment ?></p>
        <form action="?p=posts.signal" method="post">
            <input type="hidden" name="id" value="<?= $comment->id?>">
            <input type="hidden" name="Signalement" value="true">
            <button type="submit" class="btn btn-danger">Signaler</button>
        </form>
    <?php  endforeach; }?>


</div>
