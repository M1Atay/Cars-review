<!DOCTYPE html>
<html>
<?php
include_once('../Templates/defaults/head.php');
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
    <h4>beheer</h4>
    <?php
    try {
        global $pdo;
        $query = $pdo->query("SELECT * FROM autos");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>

    <div class="row">
        <?php global $result?>
        <?php foreach ($result as $car):?>
            <div class="col-3 mt-4">
                <div class="card" style="width: 18rem;">
                    <img src="/img/<?= $car['picture'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $car['name'] ?></h5>
                        <p class="card-text"><?= $car['brand'] ?></p>
                        <p class="card-text">price: €<?= $car['price'] ?> per dag</p>
                        <a href="/admin/update-car/<?= $car['id'] ?>" class="btn btn-success">update</a>
                        <a href="/admin/review/<?= $car['id'] ?>" class="btn btn-danger">delete</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <a href="/admin/add-car" class="btn btn-primary mt-5">add</a>


    <hr>
    <?php
    include_once ('../Templates/defaults/footer.php');
    ?>
</div>
</body>
</html>