<?php

require_once '../model/modelUser.php';

include 'fragHeader.html';

?>
<div class="container">
    <?php include "fragMenu.php"; ?>

    <?php
    if ($failure) {
        echo ("
        <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <strong>Oops...</strong> Il semblerait que les données ne soient pas correctes ou que votre nouveau mot de passe ne soit pas identique dans les 2 champs de saisie.
        </div>
        ");
    }
    elseif ($success) {
        echo ("
        <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <strong>Parfait !</strong> Vos modifications ont été prises en compte.
        </div>
        ");
    }
    ?>

    <h2>Mes informations</h2>
    <p>Voici toutes les informations vous concernant.</p>
    <form role="form" method="post" action="../controller/router.php">
        <div class="form-group">
            <label for="username">Nom d'utilisateur</label>
            <input id="username" type="text" name="login" class="form-control" value="<?php echo($res[0]->getLogin()); ?>" disabled required>
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
            <input id="surname" type="text" name="surname" class="form-control" value="<?php echo($res[0]->getSurname()); ?>" required>
        </div>
        <div class="form-group">
            <label for="firstname">Prénom</label>
            <input id="firstname" type="text" name="firstname" class="form-control" value="<?php echo($res[0]->getFirstname()); ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" class="form-control" value="<?php echo($res[0]->getEmail()); ?>" required>
        </div>
        <div class="form-group">
            <label for="birthdate">Date de naissance</label>
            <input id="birthdate" type="date" name="birthdate" class="form-control" value="<?php echo($res[0]->getBirthdate()); ?>" required>
        </div>
        <div class="form-group">
            <label for="country">Pays de résidence</label>
            <input id="country" type="text" name="country" class="form-control" value="<?php echo($res[0]->getCountry()); ?>" required>
        </div>
        <div class="form-group">
            <label for="numDrivinglicence">Numéro de permis de conduire</label>
            <input id="numDrivinglicence" type="text" name="numDrivinglicence" class="form-control" value="<?php echo($res[0]->getNumDrivingLicence()); ?>">
        </div>
        <div class="form-group">
            <input type="hidden" name="username" value="<?php echo($res[0]->getLogin()); ?>">
            <input type="hidden" name="action" value="updateUserInfo">
            <button class="btn btn-primary" type="submit">Mettre à jour</button>
        </div>
    </form>
</div>


<?php include 'fragFooter.html'; ?>
