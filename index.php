<?php 
require_once ("templates/header.php");

require_once ("lib/car.php");

?>

        <section class="flux backg-opacity">
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
            <div class="section__div backg-opacity">
                <h2>Nos services</h2>
                <div class="container text-center">
                    <div class="row">
                        <div class="col-lg">
                            <img src="assets/vidange.jpg" alt="vidange" class="section__service__img">
                            <p class="section__service__p">Révision et vidange</p>
                        </div>
                        <div class="col-lg">
                            <img src="assets/pneu.jpg" alt="vidange" class="section__service__img">
                            <p class="section__service__p">Pneus</p>
                        </div>
                        <div class="col-lg">
                            <img src="assets/frein.jpg" alt="vidange" class="section__service__img">
                            <p class="section__service__p">Freinage</p>
                        </div>
                        <div class="col-lg">
                            <img src="assets/pneu.jpg" alt="vidange" class="section__service__img">
                            <p class="section__service__p">Pneus</p>
                        </div>
                        <div class="col-lg">
                            <img src="assets/pneu.jpg" alt="vidange" class="section__service__img">
                            <p class="section__service__p">Pneus</p>
                        </div>
                        <div class="col-lg">
                            <img src="assets/pneu.jpg" alt="vidange" class="section__service__img">
                            <p class="section__service__p">Pneus</p>
                        </div>
                        <div class="col-lg">
                            <img src="assets/pneu.jpg" alt="vidange" class="section__service__img">
                            <p class="section__service__p">Pneus</p>
                        </div>
                        <div class="col-lg">
                            <img src="assets/pneu.jpg" alt="vidange" class="section__service__img">
                            <p class="section__service__p">Pneus</p>
                        </div>
                        <div class="col-lg">
                            <img src="assets/pneu.jpg" alt="vidange" class="section__service__img">
                            <p class="section__service__p">Pneus</p>
                        </div>
                        <div class="col-lg">
                            <img src="assets/pneu.jpg" alt="vidange" class="section__service__img">
                            <p class="section__service__p">Pneus</p>
                        </div>
                        <div class="col-lg">
                            <img src="assets/pneu.jpg" alt="vidange" class="section__service__img">
                            <p class="section__service__p">Pneus</p>
                        </div>

                    </div>
                </div>
            </div>
        <section>

        </section>


        <section class="carrousel flux">

            <?php foreach ($cars as $key => $car) {

                include ('templates/car-partial.php');
                ?>

            <?php } ?>

        </section>


<?php require_once "templates/footer.php" ?>