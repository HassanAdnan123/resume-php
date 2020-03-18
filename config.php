<?php

//SITE GLOBAL CONFIGURATION
$email = "hassandesigns.pro@gmail.com";  //<-- Your email

//Need to add the following codes
$origin = $_SERVER['HTTP_ORIGIN'];


if (in_array($origin, $allowed_domains)) {
    header('Access-Control-Allow-Origin: ' . $origin);
}

?>
