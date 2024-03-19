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
<div class="row">
    <div class="text-center mt-5"><h1>Plaats hier uw review</h1></div>
</div>

    <div class="container mt-4">

        <form method="post">
            <div class="mb-3">
                <label for="name" class="form-label text-white">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php if (isset($name)) {echo $name; }?>">
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label text-white">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" value="<?php if (isset($subject)) {echo $subject; }?>">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label text-white">Text</label>
                <input type="text" class="form-control" id="text" name="text" placeholder="Text" value="<?php if (isset($text)) {echo $text; }?>">
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label text-white">Rating (0-5)</label>
                <input type="number" class="form-control" id="rating" name="rating" min="0" max="5" placeholder="Rating 0-5" value="<?php if (isset($rating)) {echo $rating; }?>">
            </div>
            <button type="submit" class="btn btn-primary mt-2" name="verzenden">Opslaan</button>
        </form>
    </div>

    <?php
    include_once ('defaults/footer.php');
    ?>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>