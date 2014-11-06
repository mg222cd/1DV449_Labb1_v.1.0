<?php
require_once('View/HTMLView.php');

$view = new \View\HTMLView();
$test = "här har jag skrivit text";

$view->echoHTML($test);