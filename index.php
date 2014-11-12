<?php
require_once('Controller/WebscraperController.php');
require_once('View/JsonView.php');

$controller = new \Controller\WebscraperController();
$jsonView = new \View\JsonView();

//main-functions.
$file = 'file.json';
$jsonView->setContentHeader('application/json;');
$data = file_get_contents($file);

//testcode to demonstrate new scrape:
/*
$data = $controller->doControl();
file_put_contents($file, $data);
echo $data;
*/

//security-check if json is empty
if (!empty($data)) {
	$dataDecoded = json_decode($data);
	$scrapedTime = $dataDecoded->latest_scrape;
	$cacheExpire = date('Y/m/d H:i:s', strtotime('- 5 minutes'));
	if ($scrapedTime >= $cacheExpire) {
		//show cache
		echo $data;
	}
	else{
		$data = $controller->doControl();
		file_put_contents($file, $data);
		echo $data;
	} 
}
else{
	$data = $controller->doControl();
	file_put_contents($file, $data);
	echo $data;
}