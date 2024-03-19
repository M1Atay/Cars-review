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

            <a href="/admin/categories" class="btn btn-primary">Terug</a>
        </ol>
    </nav>

    <div class="row">
        <?php global $car?>

        <div class="card mb-3">
            <img src="/img/<?= $car->picture?>" class="card-img-top review-img" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $car->name ?></h5>
                <p class="card-text"><?= $car->brand ?></p>
                <p class="card-text">price: €<?= $car->price ?> per dag</p>
                <p class="card-text">info: <?= $car->description ?> </p>

            </div>
        </div>
    </div>
    <hr>
    <row>
        <div class="text-center"><h3>Reviews</h3></div>
    </row>

    <style>
        /* Add your custom styles here */
        .rating {
            color: #FFD700; /* Set star color to gold */
        }
    </style>
    <div class="container">
        <?php
        include_once ('defaults/header.php');
        include_once ('defaults/menu.php');
        include_once ('defaults/pictures.php');
        ?>



        <div class="container mt-4">
            <h2 class="text-white">Reviews</h2>


            <?php
            global $reviews;
            ?>



            <div class="row">
                <?php foreach ($reviews as $row): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"> <?=$row['name']?></h5>

                                <p class="card-text"> <?=$row['subject']?></p>
                                <p class="card-text"> <?=$row['text']?></p>
                                <p class="card-text"> <?= displayStars($row['rating']) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>


            <?php


            function displayStars($rating) {
                $stars = '';
                for ($i = 1; $i <= 5; $i++) {
                    $class = ($i <= $rating) ? 'rating' : 'text-muted'; // Color stars based on rating
                    $stars .= '<span class="' . $class . '">&#9733;</span>';
                }
                return $stars;
            }
            ?>

        </div>


    </div>
</body>
</html>


