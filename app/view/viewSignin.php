<?php include 'fragHeader.html'; ?>



<div class="container">
    <?php include 'fragMenu.php'; ?>

    <?php
    if ($failure) {
        echo ("
        <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <strong>Oops...</strong> Il semblerait que les identifiants fournis soient incorrects. Veuillez recommencer.
        </div>
        ");
    }
    elseif ($successSignedup) {
        echo ("
        <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <strong>Parfait !</strong> Votre compte a été créé avec succès.
        </div>
        ");
    }
    ?>

    <h2>Connexion</h2>
    <p>Merci de renseigner vos identifiants de connexion.</p>
    <form role="form" method="post" action="../controller/router.php">
        <div class="form-group">
            <label for="username">Nom d'utilisateur</label>
            <input id="username" type="text" name="username" class="form-control" value="" required>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input id="password" type="password" name="password" class="form-control" value="" required>
        </div>
        <div class="form-group">
            <input type="hidden" name="action" value="signinAction">
            <button class="btn btn-primary" type="submit">Se connecter</button>
        </div>
        <p>Vous n'avez pas encore de compte ? <a href="../controller/router.php?action=signup">S'inscrire maintenant</a>.</p>
    </form>
</div>

<?php include 'fragFooter.html'; ?>
