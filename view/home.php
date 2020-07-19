
    <div class="cols-sm-8">
        <?php foreach ( Blog\table\Article::getLast() as $post): ?>

            <h2><a href="<?= $post->Url; ?>"><?= $post->title; ?></a></h2>
            <h5><?= $post->categorie;?></h5>

            <?= $post->Extrait; ?>

        <?php   endforeach; ?>
    </div>
    <div class="row"><div class="cols-sm-4">
            <ul>
                <?php foreach( Blog\table\Category::all1() as $category): ?>

                    <li><a href=""><?= $category->name; ?></a></li>

                <?php endforeach; ?>
            </ul>
        </div>

</div>
