<!DOCTYPE html>
<html>
<style>
   .contact{
        color: #007bff;
    }

</style>

<?php
include_once('defaults/head.php');
?>
<body>
<div class="container">
    <?php
    include_once ('defaults/header.php');
    include_once ('defaults/menu.php');
    include_once ('defaults/pictures.php');
    ?>
    <?php if(!empty($message)): ?>
        <div class="alert alert-success" role="alert">
            <?=$message?>
        </div>
    <?php endif;?>
    <div class="container ">
        <h1 class="contact">Contact Waggie</h1>

        <p>Welkom bij Waggie , uw betrouwbare partner voor het huren van auto's. Heeft u vragen of wilt u meer informatie? Neem gerust contact met ons op:</p>

        <h2 class="contact">Onze Contactgegevens</h2>

        <p><strong>Adres:</strong> [Brasserskade, Delft]</p>
        <p><strong>Telefoon:</strong> [06 12345678]</p>
        <p><strong>E-mail:</strong> <a href="mailto:info@waggieautoverhuur.com">info@waggieautoverhuur.com</a></p>

        <h2 class="contact">Openingstijden</h2>

        <p>Maandag - Vrijdag: 9:00 - 18:00</p>
        <p>Zaterdag: 10:00 - 15:00</p>
        <p>Zondag: Gesloten</p>

        <h2 class="contact">Bezoek Ons</h2>

        <p>Kom langs op ons kantoor voor persoonlijk advies en om onze voertuigen te bekijken. Ons vriendelijke personeel staat voor u klaar.</p>

        <p>We kijken ernaar uit om u van dienst te zijn!</p>
    </div>
    <?php
    include_once ('defaults/footer.php');
    ?>
</div>
</body>
</html>
