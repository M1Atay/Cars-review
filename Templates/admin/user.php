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
    <h4>Welkom member</h4>

    <?php


    try {
        echo "<h2>Gebruiker Details hghgh</h2>";
        global $pdo; // Assuming $pdo is defined somewhere before this code

        // Assuming 'user' is the key storing the user's data in the session
        $userData = isset($_SESSION['user']) ? $_SESSION['user'] : null;

        if ($userData) {
            $user_id = $userData->id; // Assuming $userData is an object

            $query = $pdo->prepare("SELECT * FROM user WHERE id = :id");
            $query->bindParam(':id', $user_id, PDO::PARAM_INT);
            $query->execute();
            $result = $query->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                ?>
                <div class="container ">
                    <h2 class="text-center mb-4">Gebruiker details</h2>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title">Email</h5>
                                    <p class="card-text"><?= $result['email'] ?></p>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="card-title">Password</h5>
                                    <p class="card-text"><?= $result['password'] ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title">First Name</h5>
                                    <p class="card-text"><?= $result['first_name'] ?></p>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="card-title">Last Name</h5>
                                    <p class="card-text"><?= $result['last_name'] ?></p>
                                </div>
                            </div>
                            <a href='/admin/editprofile' class="btn btn-outline-primary btn-sm">Edit Profile</a>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                echo "Gebruiker niet gevonden.";
            }
        } else {
            echo "Gebruiker niet ingelogd.";
        }
    } catch (PDOException $e) {
        echo "Niet gelukt: " . $e->getMessage();
    }
    ?>




    <hr>
    <?php
    include_once ('../Templates/defaults/footer.php');
    ?>
</div>
</body>
</html>