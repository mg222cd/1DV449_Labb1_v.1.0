<?php
//require_once('View/HTMLView.php');
require_once('Controller/WebscraperController.php');
require_once('View/JsonView.php');

//$view = new \View\HTMLView();
$controller = new \Controller\WebscraperController();
$jsonView = new \View\JsonView();

$file = 'file.json';

//$jsonView->setContentHeader('application/json;');
header('Content-type: application/json; charset=UTF-8');
file_put_contents($file, $controller->doControl());
//echo $controller->doControl();