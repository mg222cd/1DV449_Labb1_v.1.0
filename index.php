<?php
require_once('View/HTMLView.php');
require_once('Controller/WebscraperController.php');

$view = new \View\HTMLView();
$controller = new \Controller\WebscraperController("https://coursepress.lnu.se/kurser");

$view->echoHTML($controller->doControl());

/*
man kör alltså ex $dom->loadHTML($data)
och datan är resultatet av curl

Resultatet göra till en array med element på sidan och sedan köra json_encode

lägga till header och followlocation:

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
*/