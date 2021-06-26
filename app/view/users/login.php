<?php if($error): ?>

<div class="alert alert-danger">
    identifiant incorrecte
</div>
<?php endif; ?>



<form method="post">

    <?= $form->input('username','Identifiant'); ?>
    <?= $form->input('password', 'Mot de pass', ['type' =>'password'] ); ?>


<button class="btn btn-primary">Se connecter</button>

</form>