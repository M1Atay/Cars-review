<!DOCTYPE html>
<html>
<?php
// Adds the head for the page.
include_once('defaults/head.php');
?>

<body>

<div class="container">
    <?php
    //adds the rest of the default files.
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
        </ol>
    </nav>
    <?php if (!empty($message)): ?>
    <div class="alert alert-danger" role="alert">
        <?=$message?>
    </div>
    <?php endif;?>
    <form method="post" class="row g-3">
        <div class="col-md-6">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail">
        </div>
        <div class="col-md-6">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="inputPassword">
        </div>
        <div class="col-md-6">
            <label for="inputFirstname" class="form-label">Firstname</label>
            <input type="text" name="firstName" class="form-control" id="inputFirstName"
                   value="<?php if (isset($_POST['firstName'])){echo $_POST['firstName'];}
            else {echo"";}?>" placeholder="Jan">
            
        </div>
        <div class="col-md-6">
            <label for="inputLastName" class="form-label">Last name</label>
            <input type="text" name="lastName" class="form-control" id="inputLastName"
                   value="<?php if (isset($_POST['lastName'])){echo $_POST['lastName'];}
                   else {echo"";}?>" placeholder="Klaassen">

        </div>

        <div class="col-12">
            <button type="submit" name="register" class="btn btn-primary">Register</button>
        </div>
    </form>

    <hr>
    <?php
    include_once('defaults/footer.php');
    ?>
</div>

</body>
</html>


