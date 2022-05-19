<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the necessary files
require_once('vendor/autoload.php');

// start a session
session_start();

/*
//Test Order class
$order = new Order();
$order->setMeal("lunch");
$order->setFood("bibimbap");
$order->setCondiments("kimchi");
var_dump($order);
*/

// Create an instance of the Base class
$f3 = Base::instance();

// Create an instance of the controller class
$con = new Controller($f3);

//Define a default route
$f3->route('GET /', function() {

    // First way
    //global $con;
    //$con->home();;

    // Second way
    $GLOBALS['con']->home();
});

//Define a breakfast route
$f3->route('GET /breakfast', function() {
    //echo "Breakfast page";

    $view = new Template();
    echo $view->render('views/breakfast-menu.html');
});

//Define a lunch route
$f3->route('GET /lunch', function() {
    //echo "Breakfast page";

    $view = new Template();
    echo $view->render('views/lunch.html');
});

//Define a lunch route
$f3->route('GET /breakfast/brunch', function() {
    //echo "Breakfast page";

    $view = new Template();
    echo $view->render('views/breakfast-menu.html');
});

//Define an order route
$f3->route('GET|POST /order', function($f3) {
    $GLOBALS['con']->order();
});

//Define an order2 route
$f3->route('GET|POST /order2', function($f3) {
    $GLOBALS['con']->order2();
});

//Define a summary route -> orderSummary.html
$f3->route('GET|POST /summary', function() {
    $GLOBALS['con']->summary();
});

//Run fat-free
$f3->run();