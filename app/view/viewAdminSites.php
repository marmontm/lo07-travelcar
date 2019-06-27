<?php

require_once '../model/modelSite.php';

include 'fragHeader.html';

?>
<div class="container">
    <?php include "fragMenu.php"; ?>

    <?php
    if ($failure) {
        echo ("
        <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <strong>Oops...</strong> Il semblerait que les données ne soient pas correctes.
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

    <h2>Gestion des sites</h2>
    <p>Voici toutes les informations concernant les sites où peuvent se trouver les parkings.</p>

    <div class='panel panel-info'>
        <div class='panel-heading'>Ajouter un site</div>
        <div class='panel-body'>
            <form role="form" method="post" action="../controller/router.php">
                <div class="form-group">
                    <label for="label">Label du site</label>
                    <input id="label" type="text" name="label" class="form-control" value="" required>
                </div>
                <div class="form-group">
                    <label for="location">Localisation (adresse exacte : rue, CP ville, pays)</label>
                    <input id="location" type="text" name="location" class="form-control" value="" required>
                </div>
                <div class="form-group">
                    <label for="area">Zone (ex. une ville : Paris, France)</label>
                    <input id="area" type="text" name="area" class="form-control" value="" required>
                </div>
                <div class="form-group">
                    <label for="type">Type de lieu</label>
                    <input id="type" type="text" name="type" class="form-control" value="" required>
                </div>
                <div class="form-group">
                    <input type="hidden" name="action" value="addSite">
                    <button class="btn btn-primary" type="submit">Ajouter un site</button>
                </div>
            </form>
        </div>
    </div>

    <div class='panel panel-default'>
        <div class='panel-heading'>Liste des sites</div>
        <div class='panel-body'>
            <table class = "table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope = "col">ID</th>
                    <th scope = "col">Label</th>
                    <th scope = "col">Localisation</th>
                    <th scope = "col">Zone</th>
                    <th scope = "col">Type</th>
                    <th scope = "col">Operation</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($results as $ms) {
                    $id = $ms->getId();
                    $form = "
                        <form role=\"form\" method=\"post\" action=\"../controller/router.php\">
                        <div class=\"form-group\">
                            <input type=\"hidden\" name=\"id\" value=\"".$id."\">
                            <input type=\"hidden\" name=\"action\" value=\"delSite\">
                            <button class=\"btn btn-danger\" type=\"submit\">Supprimer</button>
                        </div>
                    </form>
                    ";
                    printf("<tr><td>%d</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",
                        $ms->getId(), $ms->getLabel(), $ms->getLocation(), $ms->getArea(), $ms->getType(), $form);
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>


</div>


<?php include 'fragFooter.html'; ?>
