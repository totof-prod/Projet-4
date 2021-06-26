
<div class="row">
    <div class="cols-9">
        <?php foreach ( $posts as $post): ?>
         <h2><a href="<?= $post->Url; ?>"><?= $post->title; ?></a></h2>

        <div class="col-4">
            <h5><?= $post->categorie;?></h5>
        </div>
            <div class="col-6">
                <?= $post->Extrait; ?>
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

