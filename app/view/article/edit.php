
<form method="post">

    <?= $form->input('author',"Nom de l'auteur"); ?>
    <?= $form->input('comment', 'commentaire', ['type' =>'textarea'] ); ?>
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <button class="btn btn-primary">Poster le commentaire</button>
</form>