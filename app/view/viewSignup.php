<?php include 'fragHeader.html'; ?>

<div class="container">
    <?php include 'fragMenu.php'; ?>
    <h2>Inscription</h2>
    <p>Merci de remplir toutes les informations suivantes afin de créer vortre compte.</p>
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
            <label for="confirm_password">Confirmez votre mot de passe</label>
            <input id="confirm_password" type="password" name="confirm_password" class="form-control" value="" required>
        </div>
        <div class="form-group">
            <label for="surname">Nom de famille</label>
            <input id="surname" type="text" name="surname" class="form-control" value="" required>
        </div>
        <div class="form-group">
            <label for="firstname">Prénom</label>
            <input id="firstname" type="text" name="firstname" class="form-control" value="" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" class="form-control" value="" required>
        </div>
        <div class="form-group">
            <label for="birthdate">Date de naissance</label>
            <input id="birthdate" type="date" name="birthdate" class="form-control" value="" required>
        </div>
        <div class="form-group">
            <label for="country">Pays de résidence</label>
            <input id="country" type="text" name="country" class="form-control" value="" required>
        </div>
        <div class="form-group">
            <label for="numDrivinglicence">Numéro de permis de conduire</label>
            <input id="numDrivinglicence" type="text" name="numDrivinglicence" class="form-control" value="">
        </div>
        <div class="form-group">
            <input type="hidden" name="action" value="signupAction">
            <button class="btn btn-primary" type="submit">S'inscrire</button>
        </div>
        <p>Vous avez déjà un compte ? <a href="../controller/router.php?action=signin">Se connecter maintenant</a>.</p>
    </form>
</div>

<?php include 'fragFooter.html'; ?>
