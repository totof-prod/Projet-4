
    <h2>Les livres</h2>
    <table class="table">
        <thead>
        <tr>
            <td>Nom</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($categories as $category): ?>
            <tr>
                <td><?= $category->name;?> </td>
                <td>
                    <a class="btn btn-primary" href="?p=admin.category.edit&id=<?= $category->id; ?>">Editer</a>
                    <form action="?p=admin.category.delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $category->id?>">
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>

        <?php endforeach;?>
        </tbody>
    </table>
