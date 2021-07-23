
    <h2>Les Episodes:</h2>
    <table class="table">
        <thead>
        <tr>
            <td>Episode</td>
            <td>Livre</td>
            <td>Titre</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($posts as $post): ?>
            <tr>


                <td><?= $post->episode;?> </td>
                <td><?= $post->categorie;?></td>
                <td><?= $post->title;?> </td>
                <td>
                    <a class="btn btn-primary" href="?p=admin.posts.edit&id=<?= $post->id; ?>">Editer</a>
                    <form action="?p=admin.posts.delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $post->id?>">
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>

    </table>
