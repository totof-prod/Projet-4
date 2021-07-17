<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                     <h1>Espace admin</h1>
                     <span class="subheading">Se connecter a l'espace admin</span>
                </div>
            </div>
         </div>
    </div>
</header>

<?php if($error): ?>
<div class="alert alert-danger">
    identifiant incorrecte
</div>
<?php endif; ?>

<div class="container px-4 px-lg-5">

<form method="post">

    <?= $form->input('username','Identifiant'); ?>
    <?= $form->input('password', 'Mot de pass', ['type' =>'password'] ); ?>

<button class="btn btn-primary">Se connecter</button>

</form>

</div>