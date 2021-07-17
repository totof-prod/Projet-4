
    <h1>Les commentaires signaler:</h1>
    <?php
    if($comments){?>
        <table class="table">
            <thead>
            <tr>
                <td>L'auteur</td>
                <td>Titre de l'episode</td>
                <td>Episode n°</td>
                <td>Le commentaire</td>
                <td>Action</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($comments as $comment) : ?>
                <tr>
                    <td><?= $comment->author; ?></td>
                    <td><?= $comment->title; ?></td>
                    <td><?= $comment->episode; ?></td>
                    <td> <?= $comment->comment; ?></td>
                    <td>
                        <form action="?p=admin.comment.delete" method="post" style="display: inline;">
                            <input type="hidden" name="id" value="<?= $comment->id?>">
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                        <form action="?p=admin.comment.update" method="post" style="display: inline;">
                            <input type="hidden" name="id" value="<?= $comment->id?>">
                            <input type="hidden" name="Signalement" value="null">
                            <button type="submit" class="btn btn-success">conserver</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

    <?php }
    else{ ?>
        <h3>Aucun commentaire signaler</h3>
    <?php } ?>
