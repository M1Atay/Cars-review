<?php
global $params;
//$params[2] is de action en $params[3] een getal die de action nodig heeft
//check if user has role admin
if (!isMember()) {
    logout();
    header ("location:/home");
} else {

    switch ($params[2]) {

        case 'home':



            include_once '../Templates/member/home.php';
            break;

        case 'products':
            include_once '../Templates/member/categories.php';
            break;
        case 'editprofile':
            include_once '../Templates/member/editprofile.php';
            break;
        case 'edit':
            include_once '../Templates/member/proile.php';
            break;
        case 'user':
            include_once '../Templates/member/user.php';
            break;

        case 'categories':
            $categories = getCategories();
            include_once '../Templates/member/categories.php';
            break;

        case 'category':
            $cars = getProductsFromCategory($params[3]);
            include_once '../Templates/member/cars.php';
            break;

        case 'product':
            $cars = getProductsFromCategory($params[3]);
            include_once '../Templates/member/review.php';
            break;

        case 'contact':
            $titleSuffix = ' | Contact';
            include_once "../Templates/member/contact.php";
            break;

        case 'review':
            $car = getProduct($params[3]);
            $message = setReview($params[3]);
            $reviews = getReviews($params[3]);
            include_once '../Templates/member/review.php';
            include_once '../Templates/member/insert-review.php';
            break;
        default:
            break;
    }
}