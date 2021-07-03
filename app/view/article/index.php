
<div class="row">
    <div class="cols-9">
        <?php
        foreach ( $posts as $post):?>
         <h2><a href="<?= $post->Url; ?>"><?= $post->title; ?></a></h2>

        <div class="col-4">
            <h5><?= $post->categorie;?></h5>
        </div>
            <div class="col-6">
                <?= $post->Extrait; ?>

            </div>
            <div class="cols-9">
               <?php $data = $comments->findWithPost($post->id);
                foreach ( $data as $datas): ?>
                <div >
                    <h5><?= $datas->author ?> posté le <?= $datas->comment_date ?></h5>
                    <p><?= $datas->comment ?></p>
                    <form action="?p=posts.signal" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $datas->id?>">
                        <input type="hidden" name="Signalement" value="true">
                        <button type="submit" class="btn btn-danger">Signaler</button>
                    </form>
                </div>
               <?php  endforeach; ?>
            </div>
        <?php  endforeach; ?>
    </div>

    <div class="cols-sm-4">
        <ul>
            <h5>Catégorie</h5>
            <?php foreach( $categories as $category): ?>
                <li><a href="<?= $category->url; ?>"><?= $category->name; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>

