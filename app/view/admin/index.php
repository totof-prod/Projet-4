
<h1>Espace Administrateur</h1>

<p>
    <a class="btn btn-success" href="?p=posts.add">Ajouter un article</a>
    <a class="btn btn-success" href="?p=category.add">Ajouter une categorie</a>
</p>

<h2>Les articles</h2>
<table class="table">
    <thead>
    <tr>
        <td>ID</td>
        <td>Titre</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($posts as $post): ?>
        <tr>

            <td><?= $post->id;?> </td>
            <td><?= $post->title;?> </td>
            <td>
                <a class="btn btn-primary" href="?p=posts.edit&id=<?= $post->id; ?>">Editer</a>
                <form action="?p=posts.delete" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $post->id?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>

    <?php endforeach;?>
    </tbody>

</table>

<h2>Les categories</h2>
<table class="table">
    <thead>
    <tr>
        <td>ID</td>
        <td>Nom</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($categories as $category): ?>
        <tr>

            <td><?= $category->id;?> </td>
            <td><?= $category->name;?> </td>
            <td>
                <a class="btn btn-primary" href="?p=category.edit&id=<?= $category->id; ?>">Editer</a>
                <form action="?p=category.delete" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $category->id?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>

    <?php endforeach;?>
    </tbody>

</table>