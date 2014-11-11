<?php
require_once('View/HTMLView.php');
require_once('Controller/WebscraperController.php');

$view = new \View\HTMLView();
$controller = new \Controller\WebscraperController();

$view->echoHTML($controller->doControl());