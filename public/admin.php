<?php
global $params;

//check if user has role admin
if (!isAdmin()) {
    logout();
    header ("location:/home");
} else {
/* $params[2] is de action
   $params[3] is een getal die de delete action nodig heeft
*/
    switch ($params[2]) {

        case 'home':
            include_once '../Templates/admin/home.php';
            break;

        case 'products':
            include_once '../Templates/admin/categories.php';
            break;
        case 'categories':
            $categories = getCategories();
            include_once '../Templates/admin/categories.php';
            break;

        case 'category':
            $cars = getProductsFromCategory($params[3]);
            include_once '../Templates/admin/cars.php';
            break;
        case 'editprofile':
            include_once '../Templates/admin/editprofile.php';
            break;
        case 'user':
            include_once '../Templates/admin/user.php';
            break;

        case 'product':
            $cars = getProductsFromCategory($params[3]);
            include_once '../Templates/admin/review.php';
            break;

        case 'contact':
            $titleSuffix = ' | Contact';
            include_once "../Templates/admin/contact.php";
            break;

        case 'review':
            $car = getProduct($params[3]);
            $message = setReview($params[3]);
            $reviews = getReviews($params[3]);
            include_once '../Templates/admin/review.php';
            include_once '../Templates/admin/insert-review.php';
            break;

        case 'beheer':
            include_once '../Templates/admin/beheer.php';
            break;
        case 'add-car':
            include_once '../Templates/admin/add-car.php';
            break;
        case 'update-car':
            include_once '../Templates/admin/update-car.php';
            break;

        case 'delete-car':
            include_once '../Templates/admin/delete-car.php';
            break;

        default:
            break;
    }
}