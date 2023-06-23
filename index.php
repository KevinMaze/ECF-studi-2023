<?php 
require_once ("templates/header.php");

require_once ("lib/car.php");

require_once ("lib/services.php");

?>

        <section class="flux">
            <div class="section__div">
                <h1>Garage Vincent Parrot</h1>

                <p class="section_para">Vincent Parrot, fort de ses 15 années d'expérience dans la réparation automobile, a ouvert 
                son propre garage à Toulouse en 2021.<br>
                Depuis 2 ans, il propose une large gamme de services: réparation de la carrosserie et de la 
                mécanique des voitures ainsi que leur entretien régulier pour garantir leur performance et 
                leur sécurité. De plus, le Garage V. Parrot met en vente des véhicules d'occasion.<br>
                Vincent Parrot considère son atelier comme un véritable lieu de confiance pour ses clients et 
                leurs voitures doivent, selon lui, à tout prix être entre de bonnes mains.
                </p> 
            </div>

        </section class="flux">
            <div class="section__div flux">
                <h2>Nos services</h2>
                <div class="text-center">
                    <div class="row justify-content-center">
                        <?php foreach ($service as $key => $services) {

                            include ('templates/service-patial.php');
                            ?>

                        <?php } ?>

                    </div>
                </div>
            </div>
        <section>

        </section>

        <section class="flux pb-3">

            <h2>Dernières sélection</h2>
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <?php foreach ($cars as $key => $car) {

                        include ('templates/car-partial.php');
                    ?>
                    <?php } ?>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>



<?php require_once "templates/footer.php" ?>