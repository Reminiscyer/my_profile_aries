<?php

header("X-Frame-Options: DENY");

header("X-Content-Type-Options: nosniff");

header("X-XSS-Protection: 1; mode=block");

ini_set('display_errors', 0); 

require_once 'controller/PortfolioController.php';

$app = new PortfolioController();


$app->index();

?>

<?php


require_once 'controller/PortfolioController.php';


$app = new PortfolioController();

$app->index();

?>