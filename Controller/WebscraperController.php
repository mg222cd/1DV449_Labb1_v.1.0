<?php
namespace Controller;

require_once('Model/PageModel.php');
require_once('View/CurlView.php');

class WebscraperController{
	private $curlView;
	private $pageModel;
	private $url = "https://coursepress.lnu.se/kurser/";
	private $courseLinks;
	private $courseInfo = array();

	public function __construct(){
		$this->pageModel = new \Model\PageModel();
		$this->curlView = new \View\CurlView();
	}

	public function doControl(){
		//1 - get data from https://coursepress.lnu.se/kurser/
		$tempData = $this->curlView->curlGetRequest($this->url);
		//2 - find how many pages in paging.
		$lastPage = $this->pageModel->getNumberOfPages($tempData);
		//3 - scrape courses from all pages in paging, result(url) will be but in array $courseLinks
		for ($i=1; $i <= $lastPage; $i++) { 
			$currentUrl = $this->url . "?bpage=" . $i;
			$data = $this->curlView->curlGetRequest($currentUrl);
			$this->courseLinks = $this->pageModel->getLinks($data);
		}
		// 4 - scrape information from each link
		foreach ($this->courseLinks as $course) {
			//curl-getta adressen
			$data = $this->curlView->curlGetRequest($course);
			//skrapa informationen
			$this->courseInfo = $this->pageModel->getCourseInfo($data, $course);
		}
		// 5 - parse to JSON-format
		
		$json = array(
			'site' => $this->url,
    		'latest_scrape' => date('Y/m/d H:i:s'),
    		'number_of_courses' => count($this->courseLinks),
    		'courses' => $this->courseInfo
			);
		
		return json_encode($json, JSON_PRETTY_PRINT);
	}
}