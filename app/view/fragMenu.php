<?php

require_once '../model/modelUser.php';

// Vérifier si utilisateur connecté ou pas
$username = "guest";
$role = "guest";
session_start();

if (isset($_SESSION['signedin']) && $_SESSION['signedin'] === true) {
    $username = $_SESSION['username'];
    $role = $_SESSION['role'];
    $users = modelUser::read($username);
    $userLongName = $users[0]->getFirstname()." ".$users[0]->getSurname();
}
?>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../controller/router.php?action=home">Clover23</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="../controller/router.php?action=home">Accueil</a></li>
                <?php
                if ($role == "customer" || $role == "admin") {
                    echo ("
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Parking <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"../controller/router.php?action=searchParking\">Réserver un parking</a></li>
                            <li><a href=\"../controller/router.php?action=manageParking\">Gérer mes réservations</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Location <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"../controller/router.php?action=searchRental\">Louer un véhicule</a></li>
                        <li><a href=\"../controller/router.php?action=manageRental\">Gérer mes locations</a></li>
                        <li><a href=\"../controller/router.php?action=listTenants\">Voir mes véhicules loués</a></li>
                    </ul>
                </li>
                ");
                }
                ?>

                <?php
                if ($role == "admin") {
                    echo ("
                    <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Administration <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"../controller/router.php?action=adminDashboard\">Tableau de bord</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"../controller/router.php?action=adminSites\">Gérer les sites</a></li>
                        <li><a href=\"../controller/router.php?action=adminParkings\">Gérer les parkings</a></li>
                        <li><a href=\"../controller/router.php?action=adminCarCat\">Gérer les catégories de véhicules</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"../controller/router.php?action=adminUsers\">Lister les utilisateurs</a></li>
                        <li><a href=\"../controller/router.php?action=adminVehicles\">Lister les véhicules</a></li>
                    </ul>
                </li>
                    ");
                }
                ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <?php
            if ($role == "customer" || $role == "admin") {
                echo ("
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">".$userLongName." <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"../controller/router.php?action=myProfile\">Mes informations</a></li>
                            <li><a href=\"../controller/router.php?action=myVehicles\">Mes voitures</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"../controller/router.php?action=signout\">Se déconnecter</a></li>
                        </ul>
                    </li>
                ");
            }
            else {
                echo ("
                    <li><a href=\"../controller/router.php?action=signup\">S'inscrire</a></li>
                    <li><a href=\"../controller/router.php?action=signin\">Se connecter</a></li>
                ");
            }
            ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>