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

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">

            <a href="/member/categories" class="btn btn-primary">Terug</a>
        </ol>
    </nav>

    <div class="row">
        <?php global $cars?>
        <?php foreach ($cars as $car):?>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="/img/<?= $car->picture?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $car->name ?></h5>
                        <p class="card-text"><?= $car->brand ?></p>
                        <p class="card-text">price: €<?= $car->price ?> per dag</p>
                        <a href="/member/review/<?=$car->id?>" class="btn btn-primary">review</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <hr>
    <?php
    include_once ('defaults/footer.php');
    ?>
</div>
</body>
</html>

