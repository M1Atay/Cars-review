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
    <h4>Welkom

        <?php
        if (isset($_POST['verzenden'])) {
            $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
            $name = filter_input(INPUT_POST, 'name');
            $brand = filter_input(INPUT_POST, 'brand');
            $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);

            try {
                global $pdo;
                $query = $pdo->prepare("UPDATE autos SET name=:name, brand=:brand, price=:price WHERE id=:id");
                $query->bindParam(":name", $name);
                $query->bindParam(":brand", $brand);
                $query->bindParam(":price", $price);
                $query->bindParam(":id", $id);

                $query->execute();
                header('location: admin/beheer');
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
        ?>

        <?php
        $car = isset($_GET['id']) ? getCars($_GET['id']) : null;

        if (!$car) {
            echo "Car not found .";
        }
        ?>

        <form method="post">
            <label>Name</label>
            <input type="text" name="name" value="<?= $car['name'] ?>"><br>
            <label>Brand</label>
            <input type="text" name="brand" value="<?= $car['brand'] ?>"><br>
            <label>Price</label>
            <input type="text" name="price" value="<?= $car['price'] ?>"><br>

            <input type="submit" name="verzenden" value="opslaan">
        </form>

        <?php
        function getCars($id) {
            try {
                global $pdo;
                $query = $pdo->prepare("SELECT * FROM autos WHERE id=:id");
                $query->bindParam(':id', $id);
                $query->execute();
                $result = $query->fetch(PDO::FETCH_ASSOC);
                return $result;
            } catch (PDOException $e) {
                echo "fout";
            }
        }
        ?>



        <hr>
    <?php
    include_once ('../Templates/defaults/footer.php');
    ?>
</div>
</body>
</html>