<?php
require_once('View/HTMLView.php');

$view = new \View\HTMLView();
$test = "här har jag skrivit text";

$view->echoHTML($test);

/*
man kör alltså ex $dom->loadHTML($data)
och datan är resultatet av curl

lägga till header och followlocation:

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
*/