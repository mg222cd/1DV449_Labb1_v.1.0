<?php
require_once('Controller/WebscraperController.php');
require_once('View/JsonView.php');

$controller = new \Controller\WebscraperController();
$jsonView = new \View\JsonView();

//ta bort sen
//header('Content-type: application/json; charset=UTF-8');

//main-functions.
$file = 'file.json';
$jsonView->setContentHeader('application/json;');

//validate it latest scrape is made less than 5 minutes ago.
$data = file_get_contents('file.json');
$dataDecoded = json_decode($data);
$scrapedTime = $dataDecoded->latest_scrape;
$cacheExpire = date('Y/m/d H:i:s', strtotime('- 5 minutes'));
if ($scrapedTime >= $cacheExpire) {
	//show cache
	echo $data;
} 
else {
	//new scrape
	$data = $controller->doControl();
	file_put_contents($file, $data);
	echo $data;
}