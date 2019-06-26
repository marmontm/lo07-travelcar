<?php include 'fragHeader.html'; ?>

<div class="container">
    <?php include 'fragMenu.php'; ?>
    <h2>Connexion</h2>
    <p>Merci de renseigner vos identifiants de connexion.</p>
    <form role="form" method="get" action="../controller/router.php">
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
