<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Ajouter/modifier un épisode</h1>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container px-4 px-lg-5">
    <?php if (isset($_SESSION['flash'])){?>
        <div id="alert" class="alert alert-<?= $_SESSION['flash']['type']; ?>">
            <a class="close">x</a>
            <?= $_SESSION['flash']['message']; ?>
        </div>
        <?php unset($_SESSION['flash']);} ?>
    <form method="post">

        <?= $form->input('title','Titre de l\'épisode:'); ?>
        <?= $form->input('content', 'Contenu:', ['type' =>'textarea'] ); ?>
        <?= $form->select('category_id', 'L\'épisode:', $categories ); ?>

        <button class="btn btn-primary">Sauvegarder</button>

    </form>
</div>