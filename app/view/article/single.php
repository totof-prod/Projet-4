
<h1><?= $post->title; ?></h1>
<p><em><?= $post->categorie?></em></p>
<p><?= $post->content; ?></p>
<div>

    <?php if($comments){
        foreach ($comments as $comment): ?>
        <h5><?= $comment->author ?> posté le <?= $comment->comment_date ?></h5>
        <p><?= $comment->comment ?></p>
        <form action="?p=posts.signal" method="post" style="display: inline;">
            <input type="hidden" name="id" value="<?= $comment->id?>">
            <input type="hidden" name="Signalement" value="true">
            <button type="submit" class="btn btn-danger">Signaler</button>
        </form>
    <?php  endforeach; }?>


</div>

<a class="btn btn-primary" href="?p=posts.addcomment&id=<?= $post->id; ?>">ajouter un commentaire</a>
