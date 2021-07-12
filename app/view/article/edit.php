<?php if (isset($_SESSION['flash'])){?>
            <div id="alert" class="alert alert-<?= $_SESSION['flash']['type']; ?>">
                <a class="close">x</a>
                <?= $_SESSION['flash']['message']; ?>
            </div>
<?php unset($_SESSION['flash']);} ?>
<form method="post">

    <?= $form->input('author',"Nom de l'auteur"); ?>
    <?= $form->input('comment', 'commentaire', ['type' =>'textarea'] ); ?>
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <button class="btn btn-primary">Poster le commentaire</button>
</form>