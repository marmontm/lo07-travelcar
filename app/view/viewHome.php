<?php include 'fragHeader.html'; ?>

<div class="container">
    <?php include 'fragMenu.php'; ?>
    <div class="jumbotron">
        <h1>Bienvenue !</h1>
        <p>Clover23 est une plateforme basée sur la solution existante TravelCar vous permettant de réserver un parking à prix très compétitifs et de permettre à d'autres utilisateurs de louer votre véhicule afin de réduire davantage vos coûts de réservation</p>
        <p>
            <?php
            if ($role == "customer" || $role == "admin") {
                echo ("
                <a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Réserver une place de parking</a>
                <a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Louer un véhicule</a>
                ");
            }
            else {
                echo ("
                <a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Se connecter</a>
                <a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">S'inscrire</a>
                ");
            }
            ?>
<!--            <a class="btn btn-primary btn-lg" href="#" role="button">Se connecter</a>-->
<!--            <a class="btn btn-primary btn-lg" href="#" role="button">S'inscrire</a>-->
<!--            <a class="btn btn-primary btn-lg" href="#" role="button">Réserver une place de parking</a>-->
<!--            <a class="btn btn-primary btn-lg" href="#" role="button">Louer un véhicule</a>-->
        </p>
    </div>
    <pre>
        <?php



        ?>
    </pre>

</div>

<?php include 'fragFooter.html'; ?>

