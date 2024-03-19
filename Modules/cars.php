<?php
function getProductsFromCategory($id)
{
    global $pdo;
    $query =$pdo->prepare('SELECT * FROM autos WHERE category_id = :id');
    $query->bindParam('id',$id);
    $query->execute();
    $cars = $query->fetchAll(PDO::FETCH_CLASS,'Car');
    return $cars;


}

function getProduct($id)
{
    global $pdo;
    $query =$pdo->prepare('SELECT * FROM autos WHERE id = :id');
    $query->bindParam('id',$id);
    $query->execute();
    $query->setFetchMode(PDO::FETCH_CLASS,'Car');
    $cars = $query->fetch();
    return $cars;


}
//function getReviews($id)
//{
//    global $pdo;
//    $query =$pdo->prepare('SELECT * FROM review WHERE id = :id');
//    $query->bindParam('id',$id);
//    $query->execute();
//    $reviews = $query->fetchAll(PDO::FETCH_CLASS,'Review');
//    return $reviews;
//
//
//}

function getReviews($id)
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM review WHERE product_id=:id");
    $query->bindParam(':id', $id);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function setReview($id)
{
    if (isset($_POST['verzenden'])) {
        $name = filter_input(INPUT_POST, 'name');
        $subject = filter_input(INPUT_POST, 'subject');
        $text = filter_input(INPUT_POST, 'text');
        $rating = filter_input(INPUT_POST, 'rating', FILTER_VALIDATE_INT, array('options' => array('min_range' => 0, 'max_range' => 5)));

        if (empty($name) || empty($subject) || empty($text) || !$rating) {
            return  "Vul alle velden in en geef een geldige beoordeling (0-5 sterren).";
        } else {
            global $pdo;
            $query = $pdo->prepare("INSERT INTO review (name, subject, text, rating, product_id) VALUES(:name, :subject, :text, :rating, :product_id)");
            $query->bindParam(":name", $name);
            $query->bindParam(":subject", $subject);
            $query->bindParam(":text", $text);
            $query->bindParam(":rating", $rating);
            $query->bindParam(":product_id", $id);
            $query->execute();
            return 'Review gemaakt';
        }
    }
}
function getUserDetails($pdo, $user_id)
{
    $query = $pdo->prepare("SELECT first_name, last_name FROM user WHERE id = :id");
    $query->bindParam(':id', $user_id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}