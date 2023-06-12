<?php require_once 'templates/header.php' ?>


<div  class="form">
            <form action="" method="post">

                <label for="field-firstname"><input name="firstname" id="field-firstname" placeholder="Nom"></label>

                <label for="field-lastname"><input name="lastname" id="field-lastname" placeholder="Prénom"></label>

                <label for="field-email"><input name="email" id="field-email" placeholder="Email"></label>
                
                <label for="field-number-phone"><input name="phone" id="field-number-phone" placeholder="Téléphone"></label>

                <label for="field-message"><textarea name="message" id="field-message" placeholder="Message"></textarea></label>

                <input type="submit" value="Envoyer">

                <input type="checkbox" name="accept" id=""><label for="accept">J'accepte que les données soient stockées et traitées dans le but de la prise de contact. Je sais que je peux révoquer mon consentement à tout moment.</label>
            </form>
        </div>


<?php require_once 'templates/footer.php'  ?>