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
    <?php
    try {

        global $pdo;
        $userData = isset($_SESSION['user']) ? $_SESSION['user'] : null;
        if ($userData) {
            $user_id = $userData->id;

            $query = $pdo->prepare("SELECT * FROM user WHERE id = :id");
            $query->bindParam(':id', $user_id, PDO::PARAM_INT);
            $query->execute();
            $result = $query->fetch(PDO::FETCH_ASSOC);

            if ($result) {
               //hier gaat die updaten
                if (isset($_POST['verzenden'])) {
                    $email = filter_input(INPUT_POST, 'email');
                    $password = filter_input(INPUT_POST, 'password');
                    $first_name = filter_input(INPUT_POST, 'first_name');
                    $last_name = filter_input(INPUT_POST, 'last_name');

                    // Update user details in the database
                    $query = $pdo->prepare("UPDATE user SET email=:email, password=:password, first_name=:first_name, last_name=:last_name WHERE id=:id");
                    $query->bindParam(":email", $email);
                    $query->bindParam(":password", $password);
                    $query->bindParam(":first_name", $first_name);
                    $query->bindParam(":last_name", $last_name);
                    $query->bindParam(":id", $user_id);

                    $query->execute();
                    header('Location: user');
                    exit;
                }
                ?>
                <div class="container mt-5">
                    <h2 class="text-center mb-4">Edit Profile</h2>
                    <form method="post">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" name="email" class="form-control" value="<?= $result['email'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="text" name="password" id="password" class="form-control" value="<?= $result['password'] ?>"></td>
                            </tr>
                            <tr>
                                <td>First Name</td>
                                <td><input type="text" name="first_name" class="form-control" value="<?= $result['first_name'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td><input type="text" name="last_name" class="form-control" value="<?= $result['last_name'] ?>"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button type="submit" name="verzenden" class="btn btn-primary">Save Changes</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>


                <?php
            } else {
                echo "Gebruiker niet gevonden.";
            }
        } else {
            echo "Gebruiker niet ingelogd.";
        }
    } catch (PDOException $e) {
        echo "Niet gelukt: " . $e->$message();
    }
    ?>

    <hr>
    <?php
    include_once ('../Templates/defaults/footer.php');
    ?>
</div>
</body>
</html>