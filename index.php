<?php
//require_once('View/HTMLView.php');
require_once('Controller/WebscraperController.php');
require_once('View/JsonView.php');

//$view = new \View\HTMLView();
$controller = new \Controller\WebscraperController();
$jsonView = new \View\JsonView();

$jsonView->setContentHeader('application/json;');
echo($controller->doControl());