<?php
/*
 * This file is the first file that will be run.
 * The code in this file will check on which page you are and includes all the files that are needed.
 */

//make sure you add all the modules.
require '../Modules/categories.php';
require '../Modules/cars.php';
require '../Modules/login.php';
require '../Modules/logout.php';
//includes the code to connect to the database
require '../Modules/database.php';
require '../Modules/common.php';

session_start();
var_dump($_SESSION);
//var_dump($_POST);

/*
 * this will get the part of the URL from the first "/".
 * so if the URL is "healthone.localhost/category/1" than $request will be "/category/1".
 */
$request = $_SERVER['REQUEST_URI'];

/*
 * this separates the URL where there is a "/" and puts it in an array.
 * For example: if the $request is "/category/1" than $params wil be:
 *  [0] => ""
 *  [1] => "category"
 *  [2] => "1"
 */
$params = explode("/", $request);
print_r($request);
//this wil be the title of your page
$title = "waggie";

//this variable will add text to your title. you can use this on the different pages.
$titleSuffix = "";

//if you want to send a message to the user you can use this variable.
$message = "";

/*$params[1] is the action (the page you are visiting).
 *$params[2] is parameter you give to the page.
 *the switch statement checks which page you want to go.
 */
switch ($params[1]) {

    case 'categories':
        //adds " | Categories:" to the title
        $titleSuffix = ' | Categories';
        /*
         * calls the function getCategories from categories.php in the modules folder.
         * check categories.php for more information.
         */
        $categories = getCategories();
        //var_dump($categories);die;

        /*
         * includes the template categories.php from the templates folder.
         * check categories.php for more information.
         */
        include_once "../Templates/categories.php";
        break;

    case 'category':
    $cars = getProductsFromCategory($params[2]);
        include_once "../Templates/cars.php";
        break;

    case 'product':
        break;

    case 'login':
        $titleSuffix = ' | Login';
        if (isset($_POST['login'])){
            $result =checkLogin();
            switch ($result){
                case 'ADMIN';
                header("location:/admin/home");
                break;
                case 'MEMBER';
                    header("location:/member/home");
                    break;
                case 'FAILURE':
                    $message ="Email of password niet correct ingevuld";
                    include_once "../Templates/login.php";
                    break;
                    case 'INCOMPLETE';
                    $message="Formulier niet volledig ingevuld";
                    include_once "../Templates/login.php";
                    break;

         }
        }else{
        include_once "../Templates/login.php";
        }
        break;

    case 'logout':
        logout();
        header("Location: /home");
        break;

    case 'register':
        $titleSuffix = ' | Register';

        if(isset($_POST['register'])){
            $result = makeRegistration();
            switch ($result){
                case 'SUCCES';
                header("Location: /home");
                break;
                case 'INCOMPLETE';
                $message="Niet alle velden correct ingevuld";
                include_once "../Templates/register.php";
                break;
                case 'EXIST';
                    $message="Gebruiker bestaat al";
                    include_once "../Templates/register.php";
                    break;
            }
        }else{
            include_once "../Templates/register.php";
        }
        break;

    case 'contact':
        $titleSuffix = ' | Contact';
        include_once "../Templates/contact.php";
        break;

    case 'admin':
        include_once('admin.php');
        break;

    case 'member':
        include_once('member.php');
        break;

    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
}







