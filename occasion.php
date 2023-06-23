<?php 
require_once ("templates/header.php");

require_once ("lib/car.php");

?>

<h2 class="flux title-occasion">Véhicules D'occasions</h2>

<section class="section-card flux section-occasion">
  
  <?php foreach ($cars as $key => $car) {

      include ('templates/car-occasion-partial.php');
      ?>

  <?php } ?>
  <?php foreach ($cars as $key => $car) {

      include ('templates/car-occasion-partial.php');
      ?>

  <?php } ?>
  <?php foreach ($cars as $key => $car) {

      include ('templates/car-occasion-partial.php');
      ?>

  <?php } ?>

</section>

<?php  
  require_once ('templates/footer.php')
?>