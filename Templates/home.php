<!DOCTYPE html>
<html>
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
            <h4>Waggie</h4>
            Welkom bij Waggie Autoverhuur, waar mobiliteit en service samenkomen voor een onvergetelijke rijervaring!
            Bij ons vindt u een uitgebreid assortiment hoogwaardige voertuigen, van compacte stadsauto's tot ruime SUV's, zorgvuldig onderhouden voor uw comfort en veiligheid.
            Ons toegewijde team staat klaar om u te voorzien van persoonlijke aandacht en deskundig advies, zodat u de perfecte auto kunt kiezen voor elke gelegenheid.
            Of het nu gaat om een zakelijke reis, een weekendje weg of een vakantie, Waggie Autoverhuur staat garant voor betaalbare tarieven en een naadloze huurervaring.
            Ontdek de vrijheid van de weg met ons!
            <hr>
            <?php
            include_once ('defaults/footer.php');
            ?>
        </div>
    </body>
</html>
